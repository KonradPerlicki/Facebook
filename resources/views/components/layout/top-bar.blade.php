<header>
    <div class="header_wrap">
        <div class="header_inner mcontainer">
            <div class="left_side">                        
                <span class="slide_menu" uk-toggle="target: #wrapper ; cls: is-collapse is-active">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z" fill="currentColor"></path></svg>
                </span>

                <div id="logo">
                    <a href="/"> 
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-32">
                        <img src="{{ asset('assets/images/logo-mobile.png') }}" class="logo_mobile" alt="">
                    </a>
                </div>
            </div>
             
          <!-- search icon for mobile -->
            <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
            <div class="header_search"><i class="uil-search-alt"></i> 
                <form method="POST" action="{{ route('search.add' ) }}">
                    @csrf
                    <input value="" id="search_input" type="text" name="search" class="form-control" placeholder="Search for users..." autocomplete="off">
                </form>
                <div uk-drop="mode: click" class="header_search_dropdown">
                    <h4 class="search_title"> Recently </h4>
                    <ul id="search_hint"> {{-- SEARCH ajax display blade template--}}
                        @foreach ($searches as $search)
                            <x-layout.top-bar.search-item :search="$search"/>
                        @endforeach
                    </ul>
                </div>
                <script>
                    $('#search_input').keyup(function(){
                        search = this.value
                        $.ajax({
                            url: "/api/search/"+search,
                            type: "GET",
                            data: { search: search },
                            dataType: "JSON",
                            success: function (data) {
                                $('#search_hint').empty()
                                $('.search_title').html(data[0].total+' Results for '+search)
                                for(let i=1; i<data.length; i++) {
                                    if(data[i].profile_image.includes('public/')){
                                        img = data[i].profile_image.replace('public/', 'storage/')
                                    }else{
                                        img = data[i].profile_image.replace('profile_image/', 'storage/profile_image/')
                                    }
                                    $('#search_hint').append('<li><a href="/profile/'+data[i].username+'"><img class="list-avatar" src="'+img+'"><div class="list-name">'+data[i].first_name+' '+data[i].last_name+'</div></a></li>')
                                }
                                if(data.length==0) {
                                    $('#search_hint').append('<li><a><div class="list-name">No users found</div></a></li>')
                                }
                            },
                        });
                    })
                </script>
            </div>
            @if (app()->getLocale() == 'pl')
                <a href="{{ route('language', 'en') }}">
                    Set English Language
                </a>
            @else
                <a href="{{ route('language', 'pl') }}">
                    Ustaw Polski Język
                </a>
            @endif
                <div class="right_side">
                <div class="header_widgets">
                    {{-- START: Notifications --}}
                    <a href="#" onclick="mark_as_read({{ auth()->id() }})" class="is_icon" uk-tooltip="title: Notifications">
                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                        @if($count = \App\Models\Notification::withoutTrashed()->where('to_user_id', auth()->id())->where('seen', false)->count())
                            <span id="notifications">{{ $count }}</span>
                        @endif
                    </a>
                    <div uk-drop="mode: click" class="header_dropdown w-96">
                         <div  class="dropdown_scrollbar max-h-96 pb-3" data-simplebar>
                             <div class="drop_headline">
                                 <h4>Latest Notifications </h4>
                                    <a href="{{ route('notifications') }}" class="text-blue-500 hover:underline">See All</a>
                             </div>
                             <ul>
                                @forelse ($notifications as $notification)
                                    <x-layout.top-bar.notification :notification="$notification" />
                                    @empty
                                    You don't have any notifications
                                @endforelse
                             </ul> 
                         </div>
                    </div> 
                    {{-- END: Notifications blade template --}}
                    {{-- START: Account image --}}
                    <a href="#">
                        <img src="{{ $user->prof_image }}" class="is_avatar" alt="">
                    </a>
                    <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">

                        <a href="{{ route('profile', $user->username) }}" class="user">
                            <div class="user_avatar">
                                <img src="{{ $user->prof_image }}" alt="">
                            </div>
                            <div class="user_name">
                                <div> {{ $user->fullname}} </div>
                                <span> {{ '@'.$user->username }}</span>
                            </div>
                        </a>
                        <hr>
                        <x-layout.top-bar.user-dropdown-item name="{{ route('settings') }}">Settings</x-layout.top-bar.user-dropdown-item>
                        <a href="#" id="night-mode" class="btn-night-mode">
                            <x-layout.top-bar.svg name="darkmode" />
                             Night mode
                            <span class="btn-night-mode-switch">
                                <span class="uk-switch-button"></span>
                            </span>
                        </a>
                        <form method="POST" id="logout" action="{{ route('logout') }}">
                        @csrf
                            <a href="#" onclick="document.getElementById('logout').submit()">
                            <x-layout.top-bar.svg name="logout"/>
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </div>
                    {{-- END: Account image --}}
                </div>
            </div>
        </div>
    </div>
</header>
<x-layout.sidebar/>