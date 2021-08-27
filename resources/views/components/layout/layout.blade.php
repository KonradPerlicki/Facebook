@props(['styles' =>'' , 'index' => '' , 'scripts' => '' ,'title' => 'Nasza Klasa' , 'showSideBar' => true, 'user'])
{{-- START: OPENING PAGE 
================================================================
--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">
    <!-- Basic Page Needs
        ================================================== -->
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{ $styles }}
</head>

<body>
    <div id="wrapper" {{ $attributes }}>
    @if($showSideBar)
        <x-layout.top-bar :user="$user" /> {{-- Top Bar and Sidebar --}}
        {{-- END: OPENING PAGE 
        ================================================================
        --}}
    @endif
        {{ $slot }}

    </div>
    @if($showSideBar)
        {{-- START: CLOSING PAGE 
        ================================================================
        --}}
        <!-- open chat box -->
        <div uk-toggle="target: #offcanvas-chat" class="start-chat">
            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                </path>
            </svg>
        </div>

        {{-- START: Chat right corner --}}
        <div id="offcanvas-chat" uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar bg-white p-0 w-full lg:w-80 shadow-2xl">
                <div class="relative pt-5 px-4">
                    <h3 class="text-2xl font-bold mb-2"> Chats </h3>
                    <div class="absolute right-3 top-4 flex items-center">
                        <button class="uk-offcanvas-close  px-2 -mt-1 relative rounded-full inset-0 lg:hidden blcok"
                            type="button" uk-close></button>
                        <a href="#" uk-toggle="target: #search;animation: uk-animation-slide-top-small">
                            <ion-icon name="search" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                        </a>
                    </div>
                </div>
                <div class="absolute bg-white z-10 w-full -mt-5 lg:-mt-2 transform translate-y-1.5 py-2 border-b items-center flex"
                    id="search" hidden>
                    <input type="text" placeholder="Search.." class="flex-1">
                    <ion-icon name="close-outline"
                        class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-4 cursor-pointer"
                        uk-toggle="target: #search;animation: uk-animation-slide-top-small"></ion-icon>
                </div>
                <nav class="responsive-nav border-b extanded mb-2 -mt-2">
                    <ul uk-switcher="connect: #chats-tab; animation: uk-animation-fade">
                        <li class="uk-active"><a class="active" href="#0"> Friends </a></li>
                        <li><a href="#0">Groups <span> 10 </span> </a></li>
                    </ul>
                </nav>
                <div class="contact-list px-2 uk-switcher" id="chats-tab">
                    {{-- FRIENDS --}}
                    <div class="p-1">
                        <x-layout.chats.friend name="Alex Kongo" />
                        <x-layout.chats.friend name="Alex Kongo" />
                        <x-layout.chats.friend name="Alex Kongo" />
                        <x-layout.chats.friend name="Alex Kongo" />
                        <x-layout.chats.friend name="Alex Kongo" />
                        <x-layout.chats.friend name="Alex Kongo" />
                    </div>
                    {{-- GROUPS --}}
                    <div class="p-1">
                        <x-layout.chats.group name="Alex Kongo" />
                        <x-layout.chats.group name="Alex Kongo" />
                        <x-layout.chats.group name="Alex Kongo" />
                        <x-layout.chats.group name="Alex Kongo" />
                        <x-layout.chats.group name="Alex Kongo" />
                        <x-layout.chats.group name="Alex Kongo" />
                    </div>
                </div>
            </div>
        </div>
    @endif
        <!-- For Night mode -->
        <script>
            (function (window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' night-mode';
        }
    })(window, document);

    (function (window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function (event) {
            event.preventDefault();
            document.documentElement.classList.toggle('dark');
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('gmtNightMode', true);
                return;
            }
            localStorage.removeItem('gmtNightMode');
        }, false);

    })(window, document);
        </script>
<script>
    function msg(id)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'type' : 'POST',
            'url':'/like',
            'dataType':'json',
            'data' :{id:id},
            success:function(data){ // showing 3 latest users who liked current post
                var images = []
                $('#like'+id).html(data.txt);//change text like/unlike

                if(data.filled){//adding like
                    $('#like-icon'+id).toggleClass('text-blue-500') //add class
                    if(data.all_likes.length >= 1){
                        $('#has-likes'+id).html('<span id="who-likes'+id+'"></span><span id="likes'+id+'"></span>')
                        $('#who-likes'+id).html('Liked by <strong id="last-liker'+id+'">'+data.last_user.first_name + ' ' + data.last_user.last_name+'</strong>')
                    }
                    for(i=0;i<data.all_likes.length-1;i++){
                        src = data.all_likes[i].user.profile_image
                        alt = data.all_likes[i].user.username
                        images.push('<img src="/storage/'+src.replace('public/','')+'" alt="'+alt+'" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">')
                    }
                    last_user = data.last_user.profile_image
                    images.push('<img src="/storage/'+last_user.replace('public/','')+'" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">')
                    
                    if(images.length > 3) images.shift() //maximum 3 images - remove latest user who liked
                    
                    $('#last-liker'+id).html(data.last_user.first_name + ' ' + data.last_user.last_name)
                    if(data.all_likes.length >= 2){
                        $('#likes'+id).html(' and <strong> '+data.likes+' '+data.other+'</strong>')
                    }
                }
                else{//removing like
                    $('#like-icon'+id).toggleClass('text-blue-500') //remove class
                    if(data.last_user == 'zero'){
                        $('#likers-images'+id).html('')
                        $('#has-likes'+id).html('No one has liked yet')
                    }
                    for(i=0;i<data.all_likes.length;i++){
                        alt = data.all_likes[i].user.username
                        src = data.all_likes[i].user.profile_image
                        images.push('<img src="/storage/'+src.replace('public/','')+'" alt="'+alt+'" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">')
                    }
                    $('#last-liker'+id).html(data.all_likes[images.length-1].user.first_name + ' ' +data.all_likes[images.length-1].user.last_name) //index 2 because it is third and last element from array
                    if(data.likes == 0){
                        $('#likes'+id).remove()
                    }
                }
                $('#likers-images'+id).html(images)
            },
        })
    }
</script>
        <!-- Javascript
        ================================================== -->
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/tippy.all.min.js') }}"></script>
        <script src="{{ asset('assets/js/uikit.js') }}"></script>
        <script src="{{ asset('assets/js/simplebar.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        {{ $scripts }}
</body>

</html>