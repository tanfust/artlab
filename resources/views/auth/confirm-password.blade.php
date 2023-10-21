<x-guest-layout>


    <form class="w-full flex flex-col gap-10 px-[20vw] py-28" method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="mb-4 text-xl font-bold">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>
        <!-- Password -->
        <div class="flex flex-col gap-2 w-full">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <x-primary-button>
            {{ __('Confirm') }}
        </x-primary-button>
    </form>
</x-guest-layout>
