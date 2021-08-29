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
                      
                        {{-- START: Stories top TODO: MAX 5 DISPLAY --}}
                      <div class="user_story grid md:grid-cols-5 grid-cols-3 gap-2 lg:-mx-20 relative">
                          <x-index.story-preview name="Johnathan" />
                          <x-index.story-preview name="Johnathan" />
                          <x-index.story-preview name="Johnathan" />
                          <x-index.story-preview name="Johnathan" />
                          <x-index.story-preview name="Johnathan" />
                      </div>
                      {{-- END: Stories top --}}
                      {{-- START: Create Post Section --}}
                      <x-forms.create-post :user="$user"/>
                      {{-- END: Create Post Section --}}
                      @foreach ($posts as $post)
                          <x-index.post-card :post="$post" :invites="$user->invites"/>
                      @endforeach
                  </div>
                  {{-- START: Right column --}}
                  <div class="lg:w-80 w-full">
                      <h3 class="text-xl font-semibold mb-2"> Birthdays </h3>
                      <a href="#" class="uk-link-reset mb-2">
                          <div class="flex py-2 pl-2 mb-2 rounded-md hover:bg-gray-200">
                              <img src="assets/images/icons/gift-icon.png" class="w-9 h-9 mr-3" alt="">
                              <p class="line-clamp-2"> <strong> Jessica Erica </strong> and <strong> two others </strong>
                                  have a birthdays to day .
                              </p>
                          </div>
                      </a>
              
                      <h3 class="text-xl font-semibold"> Other Users </h3>
                      <div class="" uk-sticky="offset:80">
                        <div class="widget card p-5 border-t">
                            <div class="flex items-center justify-between mb-2">
                                <div>
                                    <h4 class="text-lg font-semibold"> all users TODO Related friends</h4>
                                </div>
                                <a href="#" class="text-blue-600 "> See all</a>
                            </div>
                            <div>
                                @foreach (\App\Models\User::where('id','!=', auth()->id())->inRandomOrder()->take(8)->get() as $user)
                                    <x-index.friend :user="$user" />
                                @endforeach
                            </div>
                        </div>
                      </div>
                  </div>
                  {{-- END: Right column --}}
                </div>
            </div>
        </div>
    {{-- START: Story --}}
    <div class="story-prev">
        <div class="story-sidebar uk-animation-slide-left-medium">
            <div class="md:flex justify-between items-center py-2 hidden">
                <h3 class="text-2xl font-semibold"> All Story </h3>
            </div>
            <div class="story-sidebar-scrollbar" data-simplebar>
                <h3 class="text-lg font-medium"> Your Story </h3>
                <a class="flex space-x-4 items-center hover:bg-gray-100 md:my-2 py-2 rounded-lg hover:text-gray-700" href="#">
                    <svg class="w-12 h-12 p-3 bg-gray-200 rounded-full text-blue-500 ml-1" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <div class="flex-1">
                        <div class="text-lg font-semibold"> Create a story </div>
                        <div class="text-sm -mt-0.5"> Share a photo or write something. </div>
                    </div>
                </a>
                <h3 class="text-lg font-medium lg:mt-3 mt-1"> Friends Story </h3>
                <div class="story-users-list"  uk-switcher="connect: #story_slider ; toggle: > * ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium ">
                    <x-index.story-list user="Andrzej Białek" />
                    <x-index.story-list user="Andrzej Białek" />
                    <x-index.story-list user="Andrzej Białek" />
                </div>
            </div>
        </div>
        <div class="story-content">
            <ul class="uk-switcher uk-animation-scale-up" id="story_slider" >
                <x-index.story-display />{{-- TODO: pass $user->image --}}
                <x-index.story-display />
                <x-index.story-display />
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