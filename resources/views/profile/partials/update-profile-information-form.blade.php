<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text"
                class="mt-1 block w-full"
                :value="old('name', $user->name)"
                required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email"
                class="mt-1 block w-full"
                :value="old('email', $user->email)"
                required />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label :value="__('Choose Avatar')" />

            <div class="flex gap-6 mt-3">

                <label class="cursor-pointer">
                    <input type="radio" name="avatar" value="avatar1.png"
                        class="peer hidden"
                        {{ $user->avatar == 'avatar1.png' ? 'checked' : '' }}>

                    <img src="{{ asset('images/avatars/avatar1.png') }}"
                        class="h-16 w-16 rounded-full border-4 border-transparent
                        peer-checked:border-blue-500 hover:scale-110 transition">
                </label>

                <label class="cursor-pointer">
                    <input type="radio" name="avatar" value="avatar2.png"
                        class="peer hidden"
                        {{ $user->avatar == 'avatar2.png' ? 'checked' : '' }}>

                    <img src="{{ asset('images/avatars/avatar2.png') }}"
                        class="h-16 w-16 rounded-full border-4 border-transparent
                        peer-checked:border-blue-500 hover:scale-110 transition">
                </label>

            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }"
                   x-show="show"
                   x-transition
                   x-init="setTimeout(() => show = false, 2000)"
                   class="text-sm text-gray-600">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>

    </form>
</section>