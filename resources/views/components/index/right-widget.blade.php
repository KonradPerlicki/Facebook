<div class="lg:w-96 w-full">
    @foreach (auth()->user()->friends as $myfriends)
        @if(request()->user()->hasBirthday($myfriends->user->id))
            <h3 class="text-xl font-semibold mb-2"> Birthdays </h3>
            <a href="{{ route('profile', $myfriends->user->username) }}" class="uk-link-reset mb-2">
                <div class="flex py-2 pl-2 mb-2 rounded-md hover:bg-gray-200">
                    <img src="assets/images/icons/gift-icon.png" class="w-9 h-9 mr-3" alt="">
                    <p class="line-clamp-2"> <strong> {{ $myfriends->user->fullname }} </strong>
                        have a birthday today .
                    </p>
                </div>
            </a>
        @endif
    @endforeach
    

    <div class="" uk-sticky="offset:80">
      <div class="widget card p-5 border-t">
          <div class="flex items-center justify-between mb-2">
              <div>
                  <h4 class="text-lg font-semibold">{{ __('index.other_users') }}</h4>
              </div>
        </div>
            <div>
                @foreach(App\Models\User::where('id','!=', auth()->id())->inRandomOrder()->take(8)->get() as $user)
                    @if(in_array($user->id, Cache::get('invited_users'))){{-- true or false if is invited --}} 
                        <x-index.friend :user="$user" :invited="true"/>
                    @elseif($user->friendWith(auth()->user())) {{-- are friends --}}
                        @continue
                    @else  {{-- not invited and not friend --}}
                        <x-index.friend :user="$user" />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>