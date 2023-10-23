<x-guest-layout>

    <div class="w-full border-b-[2px] border-border pt-28 pb-10 px-[12vw] relative">
        <h1 class="md:text-9xl lg:text-[204px] font-bold pb-10 tracking-tighter flex items-start gap-5">RESERVATION
            <img src="star.svg" />
        </h1>
        <h1 class="md:text-6xl lg:text-[87px] font-medium max-w-4xl tracking-tighter">WHERE VALUABLES BECOME
            ACCESSIBLE.
        </h1>
        <a href="#main"
            class="absolute right-16 bottom-12 rounded-full border-2 border-border w-40 h-40 hover:scale-[1.1] transition-all cursor-pointer flex items-center justify-center rotate-90 hover:rotate-0">
            <img src={{ asset('arrow.svg') }} class="" />
        </a>
    </div>

    <main id="main">
        <div class="flex flex-col w-full justify-center items-center py-20 px-40 gap-20">
            <div class="flex">
                <div class="flex flex-col w-[50%]">
                    <h1 class="text-base font-medium max-w-4xl tracking-tighter">RESERVATION</h1>
                    <h1 class="text-base font-light max-w-4xl tracking-tighter">SELECT AND RESERVE A PLACE NOW</h1>
                </div>
                <h1 class="text-2xl font-bold w-[50%]">
                    RESERVE A PLACE FOR THE LATEST AUCTION YOU FIND, THE EARLY YOU RESERVE THE BETTER THE CHANCE YOU
                    GET
                    A PLACE.
                </h1>
            </div>
            <form class="w-full flex flex-col gap-10" method="POST" action="{{ route('reservations.store') }}">
                {{ csrf_field() }}
                <div class="flex gap-10 w-full">
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-bold" for="name">NAME <span class="pl-1 text-red">*</span></label>
                        <input type="text" id="name" name="name"
                            class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover"
                            placeholder="Name and surname" />
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-bold" for="email">E-MAIL <span class="pl-1 text-red">*</span></label>
                        <input type="email" id="email" name="email"
                            class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover"
                            placeholder="Your e-mail" />
                    </div>
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-bold" for="auction_id">Auction ID <span
                                class="pl-1 text-red">*</span></label>
                        <select type="text" id="auction_id" name="auction_id"
                            class="w-full py-[14.5px] placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover"
                            placeholder="Please Select">
                            <option value="">Please Select</option>
                            <option value="1">Museum</option>
                            <option value="2">Listed Coming</option>
                            <option value="3">Magazine</option>
                        </select>
                    </div>
                </div>
                <div class="flex gap-2">
                    <input type="checkbox" id="privacy-policy" name="privacy-policy" />
                    <!-- I can add validation here -->
                    <label class="font-medium text-lg tracking-tight" for="privacy-policy">CLICK HERE TO INDICATE
                        THAT
                        YOU HAVE READ AND AGREE TO THE TERMS PRESENTED IN THE PRIVACY POLICY AGREEMENT.</label>
                </div>
                <button
                    class="tracking-[0.2em] font-medium text-lg w-fit self-center text-background3 bg-border py-4 px-20 hover:bg-buttonHover"
                    type="submit">SEND MESSAGE</button>
            </form>
        </div>
    </main>


</x-guest-layout>
