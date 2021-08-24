<x-layout.layout :user="$user">
    <!-- Main Contents -->
    <div class="main_content">
        <div class="mcontainer">
            <div class="mb-6">
                <h2 class="text-2xl font-semibold"> Setting </h2>
                <nav class="responsive-nav border-b md:m-0 -mx-4">
                    <ul uk-switcher="connect: #forms; animation: uk-animation-fade">
                        <li class="uk-active"><a href="#" class="lg:px-2 active"> Profile</a></li>
                        <li><a href="#" class="lg:px-2"> Privacy</a></li>
                        <li><a href="#" class="lg:px-2"> Notification</a></li>
                        <li><a href="#" class="lg:px-2"> Social links </a></li>
                        <li><a href="#" class="lg:px-2"> Billing </a></li>
                        <li><a href="#" class="lg:px-2"> Security </a></li>
                    </ul>
                </nav>
            </div>
            <div id="forms" class="uk-switcher">
                {{-- PROFILE SECTION --}}
                <div class="grid lg:grid-cols-3 mt-12 gap-8">
                    <div>
                        <h3 class="text-xl mb-2"> Basic</h3>
                        <p class="mb-4"> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>

                         <!-- Session Status -->
                         <x-flash-messages.auth-session-status class="mb-4" :status="session('status')" />

                         <!-- Validation Errors -->
                         <x-flash-messages.auth-validation-errors class="mb-4" :errors="$errors"/>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">
                        <div>
                            <form method="POST" action="" class="grid grid-cols-2 gap-3 lg:p-6 p-4" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="table" value="users" />
                                <div class="col-span-2">
                                    <label>Background image</label>
                                    <img src="{{ Storage::url($user->background_image) }}" height=450 class="w-full rounded-xl">
                                    Change background image <input type="file" name="background_image" accept="image/*">
                                </div>
                                <div class="row-span-2">
                                    <label>Profile image</label>
                                    <img src="{{ Storage::url($user->profile_image) }}" height=200  class="w-full rounded-xl">
                                    Change profile image <input type="file" name="profile_image" accept="image/*">
                                </div>
                                <div>
                                    <label for=""> First name</label>
                                    <input name="first_name" type="text"  class="shadow-none with-border" value="{{ $user->first_name }}">
                                </div>
                                <div>
                                    <label for=""> Last name</label>
                                    <input name="last_name" type="text"  class="shadow-none with-border" value="{{ $user->last_name }}">
                                </div>
                                <div class="col-span-2">
                                    <label for="about">About me (max:255)</label>
                                    <textarea id="about" name="about_me" rows="3"
                                        class="shadow-none bg-gray-100 with-border">{{ $user->about_me }}</textarea>
                                </div>
                                <div class="col-span-2">
                                    <label for=""> Location</label>
                                    <input name="location" type="text"  class="shadow-none with-border" value="{{ $user->location }}">
                                </div>
                                <div>
                                    <label for=""> Working at</label>
                                    <input name="working_at" type="text"  class="shadow-none with-border" value="{{ $user->working_at }}">
                                </div>
                                <div>
                                    <label for=""> Relationship </label>
                                    <select id="relationship" name="relationship"
                                        class="shadow-none selectpicker with-border ">
                                        <option value="None" {{ $user->relationship == 'None' ? ' selected' : ''}} >None</option>
                                        <option value="Single" {{ $user->relationship == 'Single' ? ' selected' : ''}}>Single</option>
                                        <option value="In a relationship" {{ $user->relationship == 'In a relationship' ? ' selected' : ''}}>In a relationship</option>
                                        <option value="Married" {{ $user->relationship == 'Married' ? ' selected' : ''}}>Married</option>
                                        <option value="Engaged" {{ $user->relationship == 'Engaged' ? ' selected' : ''}}>Engaged</option>
                                    </select>
                                </div>
                        </div>
                        <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                            <button type="submit" class="button bg-blue-700"> Save </button>
                        </div>
                        </form>
                    </div>
                </div>
                {{-- PRIVACY SECTION --}}
                <div class="grid lg:grid-cols-3 mt-12 gap-8">
                    <div>
                        <h3 class="text-xl mb-2"> Privacy</h3>
                        <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                    </div>
                    <div class="bg-white mt-3 rounded-md lg:shadow-md shadow lg:p-6 p-4 col-span-2">
                        <form method="post" action="">
                            @csrf
                            @method('PUT')
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4> Who can follow me ?</h4>
                                    <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                                </div>
                                <select name="who_can_follow"
                                        class="shadow-none selectpicker with-border ">
                                    <option value="2" {{ $user->settings->who_can_follow=2 ? 'selected' : '' }}>Everyone</option>
                                    <option value="1" {{ $user->settings->who_can_follow=1 ? 'selected' : '' }}>Only friends my friends</option>
                                    <option value="0" {{ $user->settings->who_can_follow=0 ? 'selected' : '' }}>Anyone</option>
                                </select>
                            </div>
                            <hr>
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4> Show my activities to </h4>
                                    <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                                </div>
                                <select name="show_my_activities"
                                        class="shadow-none selectpicker with-border ">
                                    <option value="2" {{ $user->settings->show_my_activities=2 ? 'selected' : '' }}>Everyone</option>
                                    <option value="1" {{ $user->settings->show_my_activities=1 ? 'selected' : '' }}>Only my friends and their friends</option>
                                    <option value="0" {{ $user->settings->show_my_activities=0 ? 'selected' : '' }}>Anyone</option>
                                </select>
                            </div>
                            <hr>
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4> Display in search engines </h4>
                                    <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch">
                                            <input name="display_in_search_engine" type="checkbox" {{ $user->settings->display_in_search_engine ? 'checked' : '' }}>
                                            <span class="switch-button"></span> 
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-10 pt-0 flex justify-end space-x-3">
                                <button type="submit" class="button bg-blue-700"> Save </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                {{-- Notifications section --}}
                <div class="grid lg:grid-cols-3 mt-12 gap-8">
                    <div>
                        <h3 class="text-xl mb-2"> Notification</h3>
                        <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                    </div>
                    <div class="bg-white mt-3 rounded-md lg:shadow-md shadow lg:p-6 p-4 col-span-2">
                        <form>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4> Who can follow me ?</h4>
                                    <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox" checked><span
                                                class="switch-button"></span> </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4> Show my activities </h4>
                                    <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox"><span class="switch-button"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4> Search engines </h4>
                                    <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox" checked><span
                                                class="switch-button"></span> </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4> Allow Commenting </h4>
                                    <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                                </div>
                                <div class="switches-list -mt-8 is-large">
                                    <div class="switch-container">
                                        <label class="switch"><input type="checkbox"><span class="switch-button"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-10 pt-0 flex justify-end space-x-3">
                                <button type="submit" class="button bg-blue-700"> Save </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout.layout>