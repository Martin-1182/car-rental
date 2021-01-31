<form action="#" method="post">
    @csrf
    <div>
        <x-jet-label for="name" value="{{ __('Name') }}" />
        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
            :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <div class="mt-4">
        <x-jet-label for="email" value="{{ __('Email') }}" />
        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
            :value="old('email')" required />
    </div>

    <div class="mt-4">
        <x-jet-label for="phone" value="{{ __('Phone') }}" />
        <x-jet-input id="phone" class="block mt-1 w-full" type="tel" name="phone"
            :value="old('phone')" required />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-jet-button class="ml-4">
            {{ __('Book this car') }}
        </x-jet-button>
    </div>
</form>
