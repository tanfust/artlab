<x-guest-layout>
    <div class="w-full pt-28 px-[12vw] relative">
        <h1 class="md:text-9xl lg:text-[184px] font-bold tracking-tighter flex items-start gap-5">Creator <img src="star.svg" /></h1>
    </div>
    <main>
        <form class="w-full flex flex-col gap-10 px-[20vw] py-28" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="flex flex-col gap-10 w-full">

                <!-- Name -->
                <div class="flex flex-col gap-2 w-full">
                    <label class="font-bold" for="name">NAME <span class="pl-1 text-red">*</span></label>
                    <input id="name" type="text" name="name"
                            class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover"
                            placeholder="Your name"
                            :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="flex flex-col gap-2 w-full">
                    <label class="font-bold" for="email">E-MAIL <span class="pl-1 text-red">*</span></label>
                    <input id="email" type="email" name="email"
                            :value="old('email')"
                            required autocomplete="username"
                            class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover"
                            placeholder="Your e-mail" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="flex flex-col gap-2 w-full">
                    <label class="font-bold" for="pass">PASSWORD <span class="pl-1 text-red">*</span></label>
                    <input class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="Your password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="flex flex-col gap-2 w-full">
                    <label class="font-bold" for="pass">CONFIRM PASSWORD <span class="pl-1 text-red">*</span></label>
                    <input id="password_confirmation" type="password"
                            name="password_confirmation" required
                            autocomplete="new-password"
                            class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover"
                            placeholder="Repeat your password" />
                </div>
            </div>

            <!-- Privacy Policy -->
            <div class="flex gap-2">
                <input type="checkbox" id="privacy-policy" name="privacy-policy" />
                <label class="font-medium text-lg tracking-tight" for="privacy-policy">CLICK HERE TO INDICATE THAT YOU HAVE READ AND AGREE TO THE TERMS PRESENTED IN THE PRIVACY POLICY AGREEMENT.</label>
            </div>
            <button class="tracking-[0.2em] font-medium text-lg w-fit text-background3 bg-border py-4 px-20 hover:bg-buttonHover" type="submit">SIGN UP</button>
            <a href="{{ route('login') }}"><h1 class="font-medium text-lg tracking-tight hover:text-text2">ALREADY HAVE AN ACCOUNT? SIGN IN.</h1></a>
        </form>
    </main>

</x-guest-layout>
