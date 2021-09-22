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
                <div class="right_side">
                <div class="header_widgets">
                    <a href="#" class="is_icon" uk-tooltip="title: Cart">
                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
                    </a>
                    {{-- START: Cart --}}
                    <div uk-drop="mode: click" class="header_dropdown dropdown_cart">
                     
                        <div class="drop_headline">
                            <h4>  My Cart </h4>
                            <a href="#" class="btn_action hover:bg-gray-100 mr-2 px-2 py-1 rounded-md underline"> Checkout </a>
                        </div>

                        <ul class="dropdown_cart_scrollbar" data-simplebar>
                            <li>
                                <div class="cart_avatar">
                                    <img src="assets/images/product/2.jpg" alt="">
                                </div>
                                <div class="cart_text">
                                    <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Wireless headphones </div>
                                    <p class="text-sm">Type Accessories  </p>
                                </div>
                                <div class="cart_price">
                                    <span> $14.99 </span>
                                    <button class="type"> Remove</button>
                                </div>
                            </li>
                            <li>
                                <div class="cart_avatar">
                                    <img src="assets/images/product/13.jpg" alt="">
                                </div>
                                <div class="cart_text">
                                    <div class=" font-semibold leading-4 mb-1.5 text-base line-clamp-1"> Parfum Spray</div>
                                    <p class="text-sm">Type Parfums  </p>
                                </div>
                                <div class="cart_price">
                                    <span> $16.99 </span>
                                    <button class="type"> Remove</button>
                                </div>
                            </li>
                        </ul>
                        <div class="cart_footer">
                            <p> Subtotal : $ 320 </p>
                            <h1> Total :  <strong> $ 320</strong> </h1>
                        </div>
                    </div>
                    {{-- END: Cart blade template --}}
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
                                     {{-- TODO maybe add this and in settings add something
                                    <a href="#" data-tippy-placement="left" title="Notifications">
                                        <ion-icon name="settings-outline"></ion-icon>
                                    </a>--}}
                             </div>
                             <ul>
                                @foreach ($notifications as $notification)
                                    <x-layout.top-bar.notification :notification="$notification" />
                                @endforeach
                             </ul> 
                         </div>
                    </div> 
                    {{-- END: Notifications blade template --}}

                    {{-- START: Messages --}}
                    <a href="#" class="is_icon" uk-tooltip="title: Message">
                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                        <span>4</span>
                    </a>
                    <div uk-drop="mode: click" class="header_dropdown is_message">
                        <div  class="dropdown_scrollbar" data-simplebar>
                            <div class="drop_headline">
                                 <h4>Messages </h4>
                                <div class="btn_action">
                                    <a href="#" data-tippy-placement="left" title="Notifications">
                                        <ion-icon name="settings-outline" uk-tooltip="title: Message settings ; pos: left"></ion-icon>
                                    </a>
                                    <a href="#" data-tippy-placement="left" title="Mark as read all">
                                        <ion-icon name="checkbox-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                            <input type="text" class="uk-input" placeholder="Search in Messages">
                            <ul>
                                <li class="un-read">
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-7.jpg" alt="">
                                        </div>
                                        <div class="drop_text">
                                            <strong> Stella Johnson </strong> <time>12:43 PM</time>
                                            <p>  Alex will explain you how ...  </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_text">
                                            <strong> Adrian Mohani </strong> <time> 6:43 PM</time>
                                            <p> Thanks for The Answer sit amet...  </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-6.jpg" alt="">
                                        </div>
                                        <div class="drop_text">
                                            <strong>Alia Dolgove </strong> <time> Wed </time>
                                            <p>  Alia just joined Messenger!  </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                        </div>
                                        <div class="drop_text">
                                            <strong> Jonathan Madano </strong> <time> Sun</time>
                                            <p>  Replay Your Comments insit amet consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="un-read">
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="drop_text">
                                            <strong> Stella Johnson </strong> <time>12:43 PM</time>
                                            <p>  Alex will explain you how ...  </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="see-all"> See all in Messages</a>
                    </div>
                    {{-- END: Messages blade template ?? --}}

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