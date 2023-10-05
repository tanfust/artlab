@include('front-office/Layout.Header')

        <div class="w-full pt-28 px-[12vw] relative">
            <h1 class="md:text-9xl lg:text-[224px] font-bold tracking-tighter flex items-start gap-5">Creator <img src="star.svg" /></h1>
        </div>

        <main>
            <form class="w-full flex flex-col gap-10 px-[20vw] py-32">
                <div class="flex flex-col gap-10 w-full">
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-bold" for="name">NAME <span class="pl-1 text-red">*</span></label>
                        <input type="text" id="name" name="name" class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover" placeholder="Your name" />
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-bold" for="email">E-MAIL <span class="pl-1 text-red">*</span></label>
                        <input type="email" id="email" name="email" class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover" placeholder="Your e-mail" />
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-bold" for="pass">PASSWORD <span class="pl-1 text-red">*</span></label>
                        <input type="password" id="pass" name="pass" class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover" placeholder="Your password" />
                    </div>
                </div>
                <div class="flex gap-2">
                    <input type="checkbox" id="privacy-policy" name="privacy-policy" />
                    <label class="font-medium text-lg tracking-tight" for="privacy-policy">CLICK HERE TO INDICATE THAT YOU HAVE READ AND AGREE TO THE TERMS PRESENTED IN THE PRIVACY POLICY AGREEMENT.</label>
                </div>
                <button class="tracking-[0.2em] font-medium text-lg w-fit text-background3 bg-border py-4 px-20 hover:bg-buttonHover" type="submit">SIGN UP</button>
                <a href="{{url('/creator')}}"><h1 class="font-medium text-lg tracking-tight hover:text-text2">ALREADY HAVE AN ACCOUNT? SIGN IN.</h1></a>
            </form>
        </main>

@include('front-office/Layout.Footer')
