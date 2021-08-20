<div class="sidebar">
    <div class="sidebar_header">
        <img src="assets/images/logo.png" alt="">
        <img src="assets/images/logo-icon.html" class="logo-icon" alt="">
        <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></span>
    </div>

    <div class="sidebar_inner" data-simplebar>
        <ul>
            <x-layout.sidebar.navigate name="home"/>
            <x-layout.sidebar.navigate name="pages"/>
            <x-layout.sidebar.navigate name="videos"/>
            <x-layout.sidebar.navigate name="groups"/>
            <x-layout.sidebar.navigate name="courses"/>
            <x-layout.sidebar.navigate name="jobs"/>
            <x-layout.sidebar.navigate name="blogs"/>
            {{-- Hidden by default --}}
            <x-layout.sidebar.navigate name="products" id="more-veiw" hidden/>
            <x-layout.sidebar.navigate name="events" id="more-veiw" hidden/>
            <x-layout.sidebar.navigate name="games" id="more-veiw" hidden/>
            <x-layout.sidebar.navigate name="forums" id="more-veiw" hidden/>
        </ul>

        <a href="#" class="see-mover h-10 flex my-1 pl-2 rounded-xl text-gray-600"
            uk-toggle="target: #more-veiw; animation: uk-animation-fade">
            <span class="w-full flex items-center" id="more-veiw">
                <svg class="  bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                See More
            </span>
            <span class="w-full flex items-center" id="more-veiw" hidden>
                <svg class="bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                See Less
            </span>
        </a>
        <hr>


        <h3 class="text-lg mt-3 font-semibold ml-2 is-title"> Followed Pages </h3>

        <div class="contact-list my-2 ml-1">
            {{-- TODO:foreach twoje posty name = post? --}}
            <x-layout.sidebar.your-page />
            <x-layout.sidebar.your-page />
            <x-layout.sidebar.your-page />
            <x-layout.sidebar.your-page />
        </div>

        <hr>
        <h3 class="text-lg mt-3 font-semibold ml-2 is-title"> Joined Groups </h3>

        <div class="contact-list my-2 ml-1">
            <x-layout.sidebar.your-group />
            <x-layout.sidebar.your-group />
            <x-layout.sidebar.your-group />
            <x-layout.sidebar.your-group />
        </div>

        <hr>
        <div class="footer-links">
            <a href="#">About</a>
            <a href="#">Blog </a>
            <a href="#">Careers</a>
            <a href="#">Support</a>
            <a href="#">Contact Us </a>
            <a href="#">Developer</a>
            <a href="#">Terms of service</a>
        </div>
    </div>
</div>