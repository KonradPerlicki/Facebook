<x-layout.layout :showSideBar="false">
    <x-slot name="title">Register now!</x-slot>

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
            <!-- Content-->
            <div>
                <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
                    <form method="POST" action="{{ route('register') }}" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
                        @csrf
                        <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>
                        <!-- Session Status -->
                        <x-flash-messages.auth-session-status class="mb-4 p-4 bg-green-100 rounded-xl" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-flash-messages.auth-validation-errors class="mb-4 p-4 bg-red-100 rounded-xl" :errors="$errors"/>

                        <div class="grid lg:grid-cols-2 gap-3">
                            <div>
                                <label class="mb-0 @error('first_name') text-red-500 @enderror"> First Name </label>
                                <input name="first_name" type="text" placeholder="Your Name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full @error('first_name') border-2 border-red-500 @enderror" required value="{{ old('first_name') }}">
                            </div>
                            <div>
                                <label class="mb-0 @error('last_name') text-red-500 @enderror"> Last  Name </label>
                                <input name="last_name" type="text" placeholder="Last  Name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full @error('last_name') border-2 border-red-500 @enderror" required value="{{ old('last_name') }}">
                            </div>
                        </div>
                        <div>
                            <label class="mb-0 @error('username') text-red-500 @enderror"> Username </label>
                            <input name="username" type="text" placeholder="Username" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full @error('username') border-2 border-red-500 @enderror" required value="{{ old('username') }}">
                        </div>
                        <div>
                            <label class="mb-0 @error('email') text-red-500 @enderror"> Email Address </label>
                            <input name="email" type="email" placeholder="Info@example.com" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full @error('email') border-2 border-red-500 @enderror" required value="{{ old('email') }}">
                        </div>
                        <div>
                            <label class="mb-0 @error('password') text-red-500 @enderror"> Password </label>
                            <input name="password" autocomplete="new-password" type="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full @error('password') border-2 border-red-500 @enderror" required>
                        </div>
                        <div>
                            <label class="mb-0">Confirm Password </label>
                            <input name="password_confirmation" type="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                        </div>
                        <div class="grid lg:grid-cols-2 gap-3">
                            <div>
                                <label class="mb-0 @error('gender') text-red-500 @enderror"> Gender </label>
                                <select name="gender" class="selectpicker mt-2 @error('gender') border-2 border-red-500 @enderror" required>
                                    <option hidden selected disabled>Select</option>
                                    <option value="Male" {{ old('gender') == 'Male' ? ' selected' : ''}}>Male</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? ' selected' : ''}}>Female</option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-0 @error('phone') text-red-500 @enderror"> Phone: optional  </label>
                                <input name="phone" type="text" placeholder="ex. 543 445 543" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full @error('phone') border-2 border-red-500 @enderror" value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="checkbox">
                            <input name="terms" type="checkbox" id="chekcbox1" >
                            <label for="chekcbox1" class="@error('terms') text-red-500 @enderror"><span class="checkbox-icon"></span> I agree to the  Terms and Conditions 
                            </label>
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                                Register!</button>
                        </div>
                    </form>
                </div>
            </div>
</x-layout.layout>