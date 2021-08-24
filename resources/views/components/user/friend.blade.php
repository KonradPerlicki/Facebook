@props(['card'=>''])
@if($card != 'card')
<a href="#">  
    <div class="avatar relative rounded-md overflow-hidden w-full h-24 mb-2"> 
        <img src="{{ asset('assets/images/avatars/avatar-1.jpg') }}" alt="" class="w-full h-full object-cover absolute">
    </div>
    <div class="text-sm truncate"> Dennis Han </div>
</a>
@else
<div class="card p-2">
    <a href="timeline.html">
        <img src="{{ asset('assets/images/avatars/avatar-2.jpg') }}" class="h-36 object-cover rounded-md shadow-sm w-full">
    </a>
    <div class="pt-3 px-1">
        <a href="timeline.html" class="text-base font-semibold mb-0.5">  James Lewis </a>
        <p class="font-medium text-sm">843K Following </p>
        <button class="bg-blue-100 w-full flex font-semibold h-8 items-center justify-center mt-3 px-3 rounded-md text-blue-600 text-sm mb-1">
            &check; Friends
        </button>
    </div>
</div>
@endif