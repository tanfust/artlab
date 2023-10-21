<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="w-full pt-28 px-[12vw] relative">
        <h1 class="md:text-9xl lg:text-[184px] font-bold tracking-tighter flex items-start gap-5">Hello <img src="star.svg" /></h1>
    </div>
    <main>
        <form class="w-full flex flex-col gap-10 px-[20vw] py-28" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex flex-col gap-10 w-full">
                <!-- Email Address -->
                <div class="flex flex-col gap-2 w-full">
                    <label class="font-bold" for="email">E-MAIL <span class="pl-1 text-red">*</span></label>
                    <input id="email" class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Your e-mail" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="flex flex-col gap-2 w-full">
                    <label class="font-bold" for="pass">PASSWORD <span class="pl-1 text-red">*</span></label>
                    <input id="password" class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password"
                                    placeholder="Your password"/>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>
            <!-- Remember Me -->
            <div class="flex gap-2">
                <input id="remember_me" name="remember" type="checkbox"/>
                <label class="font-medium text-lg tracking-tight" for="remember">REMEMBER ME</label>
            </div>
            <button class="tracking-[0.2em] font-medium text-lg w-fit text-background3 bg-border py-4 px-20 hover:bg-buttonHover" type="submit">SIGN IN</button>
            <div class="flex flex-col gap-2">
                <a href="{{url('/register')}}"><h1 class="font-medium text-lg tracking-tight hover:text-text2">DON'T HAVE AN ACCOUNT? CREATE ONE.</h1></a>
                @if (Route::has('password.request'))
                    <a class="font-medium text-lg text-gray-500 tracking-tight hover:text-text2" href="{{ route('password.request') }}">
                        {{ __('FORGOT YOUR PASSWORD?') }}
                    </a>
                @endif
            </div>
        </form>
    </main>
</x-guest-layout>
