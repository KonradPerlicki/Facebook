<x-layout.layout :user="$user">
        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">
                {{-- Top section --}}
                <div class="profile user-profile">
                    <div class="profiles_banner">
                        <img src="{{ Storage::url($user->background_image) }}" alt="">
                    </div>
                    <div class="profiles_content">
                        <div class="profile_avatar">
                            <div class="profile_avatar_holder"> 
                                <img src="{{ Storage::url($user->profile_image) }}" alt="">
                            </div>
                        </div>
                        <div class="profile_info">
                            <h1> {{ $user->first_name .' ' . $user->last_name}} </h1>
                            <p> {{ $user->about_me }} </p>
                        </div>
                    </div>
                    <div class="flex justify-between lg:border-t flex-col-reverse lg:flex-row">
                        <nav class="responsive-nav pl-2 is_ligh -mb-0.5 border-transparent">
                            <ul  uk-switcher="connect: #timeline-tab; animation: uk-animation-fade">
                                <li><a href="#">Timeline</a></li>
                                <li><a href="#">Friends <span>3,243</span> </a></li>
                                <li><a href="#">Pages</a></li> 
                                <li><a href="#">Groups</a></li> 
                            </ul>
                        </nav>
 
                        <div class="flex items-center space-x-1.5 flex-shrink-0 pr-3  justify-center order-1">
                            @if($user->id == auth()->id())
                            <a href="#" class="flex items-center justify-center hover:text-gray-300 h-10 px-5 rounded-md bg-blue-600 text-white  space-x-1.5"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                                </svg>
                                <span> Add Your Story </span>
                            </a>
                            @else {{-- TODO:adding users and change dropdown --}}
                            <a href="#" class="flex items-center justify-center hover:text-gray-300 h-10 px-5 rounded-md bg-blue-600 text-white  space-x-1.5"> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                                </svg>
                                <span> Add Friend </span>
                            </a>
                            <a href="#" class="flex items-center justify-center h-10 w-10 rounded-md bg-gray-100"> 
                              <ion-icon name="ellipsis-horizontal" class="text-xl"></ion-icon>
                            </a>
                            <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"  
                            uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                                <ul class="space-y-1">
                                  <li> 
                                      <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                        <ion-icon name="star-outline"  class="pr-2 text-xl"></ion-icon>  Send Message 
                                      </a> 
                                  </li>
                                  <li>
                                    <hr class="-mx-2 my-2 dark:border-gray-800">
                                  </li>
                                  <li> 
                                      <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                        <ion-icon name="stop-circle-outline" class="pr-2 text-xl"></ion-icon>  Unfriend
                                      </a> 
                                  </li>
                                </ul>
                            </div>
                            @endif          
                        </div>
                    </div>
                </div>
                
                <div class="uk-switcher lg:mt-8 mt-4" id="timeline-tab">
                    <!-- Timeline -->
                    <div class="md:flex md:space-x-6 lg:mx-16">
                        <div class="space-y-5 flex-shrink-0 md:w-7/12">
                           {{-- Create post form --}}
                           <x-forms.create-post :user="$user"/>
                            {{-- Posts TODO PAGINATION --}}

                            @foreach ($posts as $post)
                                <x-index.post-card :post="$post"/>
                            @endforeach

                        </div>
                        <!-- Sidebar -->
                        <div class="w-full space-y-6">
                            {{-- About section --}}
                            <div class="widget card p-5">
                                <h4 class="text-lg font-semibold"> About </h4>
                                <ul class="text-gray-600 space-y-3 mt-3">
                                    @if($user->location)
                                        <x-user.about name="location">{{ $user->location }}</x-user.about>
                                    @endif
                                    @if($user->working_at)
                                        <x-user.about name="working_at">{{ $user->working_at }}</x-user.about>
                                    @endif
                                    @if($user->relationship)
                                        <x-user.about name="relationship">{{ $user->relationship }}</x-user.about>
                                    @endif
                                    <li class="flex items-center space-x-2"> 
                                        <ion-icon name="document-text-outline" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                                        Total posts: <strong>{{-- -$user->posts->count() problem n+1? --}} 230 </strong>{{-- TODO count posts --}}
                                    </li>                                
                                </ul>
                            </div>
                            {{-- Friends SIDE --}}
                            <div class="widget card p-5 border-t">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <h4 class="text-lg font-semibold"> Friends </h4>
                                        <p class="text-sm"> 3,451 Friends</p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-3 text-gray-600 font-semibold">
                                    <x-user.friend />
                                    <x-user.friend />
                                    <x-user.friend />
                                    <x-user.friend />
                                    <x-user.friend />
                                </div>
                            </div>
                            {{-- Groups SIDE --}}
                            <div class="widget card p-5 border-t">
                                <div class="flex items-center justify-between mb-2">
                                    <div>
                                        <h4 class="text-lg font-semibold"> Groups </h4>
                                    </div>
                                </div>
                                <div>
                                    <x-user.group />
                                    <x-user.group />
                                    <x-user.group />
                                    <x-user.group />
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- FRIENDS SECTION --}}
                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">
                        <h2 class="text-xl font-semibold"> Friends</h2>
                        <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-x-2 gap-y-4 mt-3">
                            <x-user.friend card='card'/>
                            <x-user.friend card='card'/>
                            <x-user.friend card='card'/>
                            <x-user.friend card='card'/>
                            <x-user.friend card='card'/>
                            <x-user.friend card='card'/>
                            <x-user.friend card='card'/>
                            <x-user.friend card='card'/>
                        </div>
                        {{-- TODO AJAX --}}
                        <div class="flex justify-center mt-6">
                            <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load more ...</a>
                        </div>
                    </div>
                    {{-- GROUPS SECTION --}}
                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">

                        <div class="flex justify-between items-start relative md:mb-4 mb-3">
                            <div class="flex-1">
                                <h2 class="text-2xl font-semibold"> Groups </h2>
                                <nav class="responsive-nav style-2 md:m-0 -mx-4">
                                    <ul>
                                        <li class="active"><a href="#"> Joined <span> 230</span> </a></li>
                                        <li><a href="#"> My Groups </a></li>
                                        <li><a href="#"> Discover </a></li> 
                                    </ul>
                                </nav>
                            </div>
                            <a href="create-group.html" data-tippy-placement="left" data-tippy="" data-original-title="Create New Album" class="bg-blue-100 font-semibold py-2 px-6 rounded-md text-sm md:mt-0 mt-3 text-blue-600">
                                Create       
                            </a>
                        </div>

                        <div class="grid md:grid-cols-2  grid-cols-2 gap-x-2 gap-y-4 mt-3"> 
                             
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize">Graphic Design </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize"> Mountain Riders  </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize">  Coffee Addicts  </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-5.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize">  Property Rent  </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-1.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize"> Architecture </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize">Graphic Design </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-4.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize"> Mountain Riders  </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            <div class="flex items-center flex-col md:flex-row justify-center p-4 rounded-md shadow hover:shadow-md md:space-x-4">
                                <a href="timeline-group.html" iv="" class="w-16 h-16 flex-shrink-0 overflow-hidden rounded-full relative">
                                    <img src="assets/images/group/group-2.jpg" class="absolute w-full h-full inset-0 " alt="">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline-page.html" class="text-base font-semibold capitalize">  Coffee Addicts  </a>
                                    <div class="text-sm text-gray-500"> 54 mutual friends </div>
                                </div>
                                <button class="bg-gray-100 font-semibold py-2 px-3 rounded-md text-sm md:mt-0 mt-3">
                                    Following
                                </button>
                            </div>
                            
                        </div>

                        <div class="flex justify-center mt-6">
                            <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load more ..</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.layout>