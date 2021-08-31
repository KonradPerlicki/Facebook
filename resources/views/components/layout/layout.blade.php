@props(['styles' =>'' ,
'index' => '' , 'scripts' => '' ,'title' => 'Facebook' , 
'showSideBar' => true, 'user' => auth()->user(), 
'notifications' => \App\Models\Notification::withoutTrashed()->with('from')->where('to_user_id', auth()->id())->orderBy('seen')->orderByDesc('updated_at')->take(8)->get(),
])
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
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon" type="image/png">
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
        <x-layout.top-bar :user="$user" :notifications="$notifications" /> {{-- Top Bar and Sidebar --}}
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
                        <li class="uk-active"><a class="active" href="#"> Friends </a></li>
                        <li><a href="#">Groups <span> 10 </span> </a></li>
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
    function comments_switch(post_id, action)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        if(action){//enable comments
            $.ajax({
                'url':'post-allow-comments',
                'method': 'POST',
                'data':{post_id:post_id},
                'success': function(){
                    $('#comments-switch'+post_id).html('<i class="uil-comment-slash mr-1"></i> Disable comments')
                    $('#comments-switch'+post_id).attr('onclick','comments_switch('+post_id+',false)')
                }
            })
        }else{ //disable comments
            $.ajax({
                'url':'post-disable-comments',
                'method': 'POST',
                'data':{post_id:post_id},
                'success': function(){
                    $('#comments-switch'+post_id).html('<i class="uil-comment mr-1"></i> Enable comments')
                    $('#comments-switch'+post_id).attr('onclick','comments_switch('+post_id+',true)')
                }
            })
        }
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
        <script src="{{ asset('assets/js/ajaxLiking.js') }}"></script>{{-- TODO look inside file --}}
        <script src="{{ asset('assets/js/ajaxSendFriendsInvite.js') }}"></script>
        <script src="{{ asset('assets/js/ajaxNotifications.js') }}"></script>
        {{ $scripts }}
</body>

</html>