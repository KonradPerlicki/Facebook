<x-layout.layout :user="$user">
    <!-- Main Contents -->
    <div class="main_content">
        <div class="mcontainer">
            <!--  Feeds  -->
            <div class="lg:flex lg:space-x-10">
                <div class="lg:w-3/4 lg:px-20 space-y-7">
                    <!-- Session Status -->
                    <x-flash-messages.auth-session-status class="mb-4 p-4 bg-green-100 rounded-xl"
                        :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-flash-messages.auth-validation-errors class="mb-4 p-4 bg-red-100 rounded-xl" :errors="$errors" />
                    {{-- Display all notifications paginated --}}
                    <div class="text-xl">
                        <h4>All results for <span class="font-bold">{{ request()->search }}</span></h4>
                    </div>
                    <ul>
                        @foreach ($searches as $search)
                            <div class="card lg:mx-0 mb-4">
                                <div class="flex items-center lg:p-4 p-2.5">
                                    <img src="{{ Storage::url($search->profile_image) }}"
                                        class="bg-gray-200 border border-white rounded-full w-11 h-11 mr-4">
                                    <span class="font-bold">{{ $search->first_name.' '.$search->last_name}}</span>
                                    @if(auth()->user()->friendWith($search))
                                        &nbsp;- <span class="italic"> &nbsp;Friend &check;</span>
                                    @endif
                                    <a href="{{ route('profile', $search->username) }}" class="ml-auto">
                                        <button type="button" class="bg-blue-500 rounded-md p-2 text-white">
                                            View Profile
                                        </button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </ul>
                    {{ $searches->links() }}
                </div>
                {{-- START: Right column --}}
                <x-index.right-widget />
                {{-- END: Right column --}}
            </div>
        </div>
    </div>
</x-layout.layout>