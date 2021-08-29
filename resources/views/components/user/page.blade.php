@props(['name'])
<div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
    <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
        <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 " alt="">
    </a>
    <div class="flex-1">
        <a href="timeline-page.html" class="text-base font-semibold capitalize">{{ $name }} </a>
        <div class="text-sm text-gray-500"> 54 mutual friends </div>
    </div>
    <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
        Following
    </button>
</div>