@props(['card'=>false, 'user']){{-- TODO add in firend if invited and if its me --}}
@if(!$card) {{-- display in right section --}}
<a href="{{ route('profile', $user->username) }}">  
    <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
        <img src="{{ Storage::url($user->profile_image) }}" alt="" class="w-full h-full object-cover absolute">
    </div>
    <div class="text-sm truncate"> {{$user->first_name.' '.$user->last_name}} </div>
</a>
@else
<div class="card p-2">
    <a href="{{ route('profile', $user->username) }}">
        <img src="{{ Storage::url($user->profile_image) }}" class="h-36 object-cover rounded-md shadow-sm w-full">
    </a>
    <div class="pt-3 px-1">
        <a href="{{ route('profile', $user->username) }}" class="text-base font-semibold mb-0.5"> {{$user->first_name.' '.$user->last_name}} </a>
        <p class="font-medium text-sm">843K Mutual friends </p>
        <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
            &check; Friends
        </button>
    </div>
</div>
@endif