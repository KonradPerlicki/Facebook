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
                    <x-index.post-card :allComments="true" :post="$post" :invites="$user->invites"/>
              </div>
              {{-- START: Right column --}}
              <x-index.right-widget />
              {{-- END: Right column --}}
            </div>
        </div>
    </div>
</x-layout.layout>