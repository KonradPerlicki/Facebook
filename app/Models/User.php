<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function settings()
    {
        return $this->hasOne(Settings::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function invites()
    {
        return $this->hasMany(Invite::class,'sender_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'from_user_id');
    }
    
    public function friends()
    {
        return $this->hasMany(Friend::class, 'user_id');
    }
    //check if two users are friends
    public function friendWith(User $user)
    {
        return $this->friends->contains('friend_id', $user->id);
    }
    //returns number of mutual friends
    public function mutual_friends(User $user)
    { 
        $user_id = $user->id; //id checked currently user

        if(Cache::has('myfriends')){
            $friends = Cache::get('myfriends');
        }else{
            $myfriends = Friend::with('user')->where('user_id', auth()->id())->get(); //friends user's currented logged in
            $friends=[];
            foreach($myfriends as $friendId){
                $friends[] .= $friendId->user->id;
            }
            Cache::add('myfriends', $friends, now()->addMinutes(10));
        }
        //TODO OPTIMIZE THIS TOO MANY COUNTS
        $mutual_friends = Friend::without('user')->whereIn('friend_id',$friends)->where('user_id',$user_id)->count();
        
        return $mutual_friends;
    }
    //TODO add if two users have birthday display all of them
    public function hasBirthday($id)
    {
        return User::where('id',$id)->whereDay('birth_date',date('d'))->whereMonth('birth_date', date('m'))->first();
    }

    public function story()
    {
        return $this->hasOne(Story::class);
    }
    public function available_story()
    {
        return $this->story()->where('expires_at', '>=', now());
    }
    public function viewed_story($id)
    {
        $viewed_stories = ViewedStories::where('user_id',auth()->id())->latest()->pluck('story_id');
        return $viewed_stories->contains($id);
    }

    public function search()
    {
        return $this->hasMany(Search::class);
    }
}
