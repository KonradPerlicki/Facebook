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

        <x-auth.top-bar />

        <div class="lg:p-12 lg:mt-40 max-w-xl  my-12 mx-auto p-6 border rounded-xl bg-gray-100">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-flash-messages.auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-flash-messages.auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <!-- Email Address -->
                <div>
                    <label class="mb-0  @error('email') text-red-500 @enderror"> Email Address </label>
                    <input name="email" type="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full @error('email') border-2 border-red-500 @enderror" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                    Email Password Reset Link</button>
                </div>
            </form>
        </div>
</x-layout.layout>
