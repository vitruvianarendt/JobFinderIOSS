<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <label><input type="radio" name="gender" value="Male" checked> Male</label>
            <label><input type="radio" name="gender" value="Female"> Female</label>
        </div>
        <div class="mt-4">
            <div style="margin: 1em 0em 1em 0em;">
                <div class="input-group d-flex mb-3">
                    <div class="col-2 d-flex mx-0">
                        <span class="input-group-text text-light-emphasis control-label">Profile Picture</span>
                    </div>
                    <div class="col-10">
                        <input name="profile_img"  type="file" class="form-control shadow-sm" id="profile_imgid" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 1.1em">
            <x-input-label for="genderid" :value="__('Current Job/Position')" />
            <x-text-input id="genderid" class="block mt-1 w-full" type="text" name="current_position" :value="old('current_position')" required autofocus />
            <x-input-error :messages="$errors->get('current_position')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div style="margin-top: 1.1em">
            <x-input-label for="phone_numberid" :value="__('Phone Number')" />
            <x-text-input id="phone_numberid" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required autofocus />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="mt-4">
            {{-- <label for="user_typeid">Account type:</label> --}}
            <x-input-label for="user_typeid" :value="__('Account type')" />
            <select name="user_type" id="user_typeid">
                <option value="Personal_Account" selected>Personal Account</option>
                <option value="Recruiter">Recruiter</option>
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
