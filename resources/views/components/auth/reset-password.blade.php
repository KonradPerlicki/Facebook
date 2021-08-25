<x-layout.layout :showSideBar="false">
    <x-slot name="title">Reset your password</x-slot>
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
                
                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-32">
    
                <div class="capitalize flex font-semibold my-2 space-x-3 text-sm">
                    <a href="{{ route('login') }}" class="py-3 px-4">Login</a>
                    <a href="{{ route('register') }}" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Content-->
    <div class="lg:p-12 lg:mt-40 max-w-xl  my-12 mx-auto p-6 border rounded-xl bg-gray-100">

        <!-- Session Status -->
        <x-flash-messages.auth-session-status class="mb-4 p-4 bg-green-100 rounded-xl" :status="session('status')" />

        <!-- Validation Errors -->
        <x-flash-messages.auth-validation-errors class="mb-4 p-4 bg-red-100 rounded-xl" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <label class="mb-0  @error('email') text-red-500 @enderror"> Email Address </label>
                <input  name="email" type="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full @error('email') border-2 border-red-500 @enderror" value="{{ old('email', $request->email) }}" required >
            </div>
            <div class="mt-4">
                <label class="mb-0 @error('password') text-red-500 @enderror">New Password </label>
                <input name="password" autocomplete="new-password" type="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full @error('password') border-2 border-red-500 @enderror" required autofocus>
            </div>
            <div class="mt-4">
                <label class="mb-0">Confirm Password </label>
                <input name="password_confirmation" type="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                Reset Password</button>
            </div>
        </form>
    </div>
</x-layout.layout>
