@props(['name'])
<a href="timeline.html">
    <div class="flex mr-4">
        <div class="flex items-center">
            <img src="{{ asset('assets/images/avatars/avatar-1.jpg') }}" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
            <img src="{{ asset('assets/images/avatars/avatar-4.jpg') }}" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
            <img src="{{ asset('assets/images/avatars/avatar-2.jpg') }}" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
        </div>
        {{--<span class="user_status status_online"></span>--}}
    </div>
    <div class="contact-username">{{$name}}</div>
</a>