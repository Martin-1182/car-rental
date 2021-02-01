<div class="p-2">
    @if ($successMessage)
        <div
            class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
            <div slot="avatar">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-check-circle w-5 h-5 mx-2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>
            <div class="text-xl font-normal  max-w-full flex-initial">
                {{ $successMessage }}</div>
            <div class="flex flex-auto flex-row-reverse">
                <div>
                    <svg wire:click="$set('successMessage', null)" xmlns="http://www.w3.org/2000/svg" width="100%"
                        height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x cursor-pointer hover:text-green-400 rounded-full w-5 h-5 ml-2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
            </div>
        </div>
    @endif

    <form wire:submit.prevent="submitForm" action="/contact">
        @csrf
        @method('POST')
        <div>
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name"
                :value="old('name')" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email"
                :value="old('email')" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-jet-label for="phone" value="{{ __('Phone') }}" />
            <x-jet-input wire:model="phone" id="phone" class="block mt-1 w-full" type="tel" name="phone"
                :value="old('phone')"/>
            <x-jet-input-error for="phone" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4">
                <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                {{ __('Book this car') }}
            </x-jet-button>
        </div>
    </form>
</div>
