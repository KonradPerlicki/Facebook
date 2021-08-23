<x-layout.layout :showSideBar="false" class="flex flex-col justify-between h-screen">
    <x-slot name="title">Verify your email</x-slot>
    <x-slot name="styles">
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
        <style>
            input , .bootstrap-select.btn-group button{
                background-color: #f3f4f6  !important;
                height: 44px  !important;
                box-shadow: none  !important; 
            }
        </style>
    </x-slot>
    <div class="bg-white py-4 shadow dark:bg-gray-800">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center lg:justify-between justify-around">
                
                    <img src="assets/images/logo.png" alt="" class="w-32">
                
    
                <div class="capitalize flex font-semibold my-2 space-x-3 text-sm">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content-->
    <div>
        <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 border rounded-xl bg-gray-100">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif
            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Resend Verification Email </button>
                </form>
            </div>
        </div>
    </div>
    <x-auth.footer />
</x-layout.layout>

