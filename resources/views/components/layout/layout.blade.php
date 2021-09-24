@props(['styles' =>'' ,
'index' => '' , 'scripts' => '' ,'title' => 'Facebook' , 
'searches'=> App\Models\Search::with('user')->where('user_id', auth()->id())->latest()->take(5)->get(),
'showSideBar' => true, 'user' => auth()->user(), 
'notifications' => App\Models\Notification::withoutTrashed()->with('from')->where('to_user_id', auth()->id())->orderBy('seen')->orderByDesc('updated_at')->take(8)->get(),
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
        <x-layout.top-bar :user="$user" :notifications="$notifications" :searches="$searches"/> {{-- Top Bar and Sidebar --}}
        {{-- END: OPENING PAGE 
        ================================================================
        --}}
    @endif

    {{ $slot }}
    
    </div>
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
                'url':'allow-comments',
                'method': 'POST',
                'data':{post_id:post_id},
                'success': function(){
                    location.reload();
                }
            })
        }else{ //disable comments
            $.ajax({
                'url':'disable-comments',
                'method': 'POST',
                'data':{post_id:post_id},
                'success': function(){
                    location.reload();
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