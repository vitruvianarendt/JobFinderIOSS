<section>
    <header>
        <div class="row">
            <div class="col-9">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Profile Information') }}
                </h2>
        
                <p class="mt-1 text-sm text-gray-600">
                    {{ __("Update your account's profile information and email address.") }}
                </p>
            </div>
            <div class="col-3">
                @if($user->img_path==null)
                            @if($user->gender=="Male")
                            <img src="{{url('images/male.png')}}" style="max-width:100px;max-height: 100px;margin-top:-65px" alt="User" class="rounded-circle mt-1" width="100px">
                            @else
                            <img src="{{url('images/female.png')}}" style="max-width:100px;max-height: 100px;margin-top:-65px" alt="User" class="rounded-circle mt-1" width="100px">
                            @endif
                        @else
                            <img src="{{asset('images/user_profile_img/'.$user->img_path)}}" style="max-width:100px;max-height: 100px;margin-top:-65px" alt="User" class="rounded-circle mt-1" width="300px" height="100px">
                        @endif
            </div>
        </div>
    </header>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div> 
            <x-input-label for="genderid" :value="__('Gender')" />
            <x-text-input id="genderid" name="gender" type="text" class="mt-1 block w-full" :value="old('gender', $user->gender)" required disabled autofocus autocomplete="gender" />
            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
        </div>
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        <div>
            <x-input-label for="phone_numberid" :value="__('Phone Number')" />
            <x-text-input id="phone_numberid" name="phone_number" type="text" class="mt-1 block w-full" :value="old('phone_number', $user->phone)" required autofocus autocomplete="Phone Number" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
        </div>
        <div>
            <x-input-label for="current_positionid" :value="__('Current Job/Position')" />
            <x-text-input id="current_positionid" name="current_position" type="text" class="mt-1 block w-full" :value="old('current_position', $user->current_position)" required autofocus autocomplete="Current Position" />
            <x-input-error class="mt-2" :messages="$errors->get('Current Position')" />
        </div>
        <div class="mt-4">
            <x-input-label for="user_typeid" :value="__('Account type')" />
            <x-text-input id="user_typeid" name="user_type" type="text" class="mt-1 block w-full" :value="old('user_type', $user->user_type)" disabled autofocus autocomplete="Phone Number" />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
