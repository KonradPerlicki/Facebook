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
                    <div  class="header_dropdown uk-open block">
                        <div class="dropdown_scrollbar" data-simplebar="init">
                            <div class="simplebar-wrapper" style="margin: 0px -14px 0px 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: -21px; bottom: 0px;">
                                        <div class="simplebar-content"
                                            style="padding: 0px 14px 0px 0px; overflow: hidden scroll;">
                                            <div class="drop_headline">
                                                <h4>All Notifications </h4>
                                            </div>
                                            <ul>
                                                @foreach ($notifications as $notification)
                                                    <x-layout.top-bar.notification :notification="$notification" />
                                                @endforeach
                                            </ul>
                                            {{ $notifications->links() }}
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: 20vw; height: 506px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar"
                                    style="transform: translate3d(0px, 0px, 0px); visibility: hidden;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                    style="transform: translate3d(0px, 0px, 0px); visibility: visible; height: 423px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- START: Right column --}}
                <x-index.right-widget />
                {{-- END: Right column --}}
            </div>
        </div>
    </div>
</x-layout.layout>