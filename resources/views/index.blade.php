<x-layout.layout :user="$user">
        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">
                <!--  Feeds  -->
                <div class="lg:flex lg:space-x-10">
                  <div class="lg:w-3/4 lg:px-20 space-y-7">
                        <!-- Session Status -->
                        <x-flash-messages.auth-session-status class="mb-4 p-4 bg-green-100 rounded-xl" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-flash-messages.auth-validation-errors class="mb-4 p-4 bg-red-100 rounded-xl" :errors="$errors" />
                      
                        {{-- START: Stories TOP --}}
                      <div class="user_story grid md:grid-cols-5 grid-cols-3 gap-2 lg:-mx-20 relative">
                        @php $stories=1; @endphp
                        @foreach ($user->friends as $friend)
                            @if ($friend->user->available_story)
                                <x-index.story-preview :user="$friend->user" />
                                    @php $stories++; @endphp
                            @endif
                            @if($stories > 4)
                                <a href="#" uk-toggle="target: body ; cls: story-active">
                                    <div class="bg-blue-100 single_story">
                                        <img src="{{ Storage::url('public/stories/3dots.jpg') }}" >
                                        <div class="story-content text-center text-xl"> <h4> And more </h4> </div>
                                    </div>
                                </a>
                                @break
                            @endif
                        @endforeach
                        {{-- Script for marking story as read --}}
                        <x-slot name="scripts">
                            <script>
                                $('.story-list').click(function(){
                                    username = this.id
                                    clicked_story = this
                                    $.ajaxSetup({
                                        headers: {
                                            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
                                        },
                                    });
                                    $.ajax({
                                        url: "show-story",
                                        type: "POST",
                                        data: { username: username },
                                        success: function () {
                                            $(clicked_story).children('div:first').removeClass('border-blue-600')
                                            $(clicked_story).children('div:first').addClass('border-gray-500')
                                            $(clicked_story).find("span[class='text-blue-600']").remove() 

                                            $('.preview_open_story[id="'+username+'"]').children().children('img:first').removeClass('filter blur-2xl')
                                            $('.preview_open_story[id="'+username+'"]').children().children('div:first').removeClass('border-blue-600')
                                            $('.preview_open_story[id="'+username+'"]').children().children('div:first').addClass('border-gray-500')
                                        },
                                    });
                                })
                            </script>
                        </x-slot>
                      </div>
                      {{-- END: Stories top --}}
                      {{-- START: Create Post Section --}}
                      <x-forms.create-post :user="$user"/>
                      {{-- END: Create Post Section --}}
                      @foreach ($posts as $post)
                          <x-index.post-card :post="$post" :invites="$user->invites"/>
                      @endforeach
                      {{ $posts->links() }}
                  </div>
                    {{-- START: Right column --}}
                        <x-index.right-widget />
                    {{-- END: Right column --}}
                </div>
            </div>
        </div>
    {{-- START: Story --}}
    <div class="story-prev">
        <div class="story-sidebar uk-animation-slide-left-medium">
            <div class="md:flex justify-between items-center py-2 hidden">
                <h3 class="text-2xl font-semibold"> All Stories </h3>
            </div>
            <div class="story-sidebar-scrollbar" data-simplebar>
                <div class="story-users-list"  uk-switcher="connect: #story_slider ; toggle: > * ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium ">
                    <a href="#" style="display:none">
                        Select story to display
                    </a>
                    @foreach ($user->friends as $friend)
                        @if ($friend->user->available_story)
                            <x-index.story-list :user="$friend->user" />
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="story-content">
            <ul class="uk-switcher uk-animation-scale-up" id="story_slider" >
                <li class="relative text-2xl">
                    <ion-icon name="arrow-back-outline" class="w-7 h-7"></ion-icon><span> Select story to display</span>
                </li>
                @foreach ($user->friends as $friend)
                    @if ($friend->user->available_story)
                        <x-index.story-display :user="$friend->user"/>
                    @endif
                @endforeach
            </ul>
        </div>
        <!-- story close button-->
        <span class="story-btn-close" uk-toggle="target: body ; cls: story-active"
            uk-tooltip="title:Close story ; pos: left">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </span>
    </div> 
    {{-- END: Story --}}
</x-layout.layout>