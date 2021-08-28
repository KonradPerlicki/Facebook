@props(['name'])
@if($name == 'location')
<li class="flex items-center space-x-2"> 
    <ion-icon name="home-sharp" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
    <span class="flex-none">Live In</span> <strong> {{ $slot }}  </strong>
</li>
@elseif ($name == 'working_at')
<li class="flex items-center space-x-2"> 
    <ion-icon name="business-outline" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
    <span class="flex-none">Working at</span> <strong> {{ $slot }}  </strong>
</li>
@elseif($name == 'relationship')
<li class="flex items-center space-x-2"> 
    <ion-icon name="heart-sharp" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
    <strong>{{ $slot }}  </strong>
</li>
@endif
