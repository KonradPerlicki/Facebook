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
                    {{-- Display single post --}}
                    <x-index.post-card :post="$post" :invites="$user->invites"/>
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
</x-layout.layout>