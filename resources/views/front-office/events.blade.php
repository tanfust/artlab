@include('front-office/Layout.Header')

<div class="w-full border-b-[2px] border-border pt-28 pb-10 px-[12vw] relative">
    <h1 class="md:text-9xl lg:text-[284px] font-bold pb-10 tracking-tighter flex items-start gap-5">Events <img
            src="star.svg" /></h1>
    <h1 class="md:text-6xl lg:text-[87px] font-medium max-w-4xl tracking-tighter">DESIGN BUILDS POSITIVE EMOTIONS.
    </h1>
    <a  href="#main"
        class="absolute right-16 bottom-12 rounded-full border-2 border-border w-40 h-40 hover:scale-[1.1] transition-all cursor-pointer flex items-center justify-center rotate-90 hover:rotate-0">
        <img src="arrow.svg" class="" />
    </a>
</div>

<main id="main">
    <div class="gradient-hover w-full border-t-2 border-text3 flex flex-col py-20 px-6 hover:underline cursor-pointer">
        <div class="w-full flex items-end">
            <h1 class="w-[50%] text-text3 font-semibold">
                UPCOMING EVENT
            </h1>
            <div class="w-[50%] flex justify-between">
                <h1 class="text-7xl font-bold text-text3">Museum</h1>
                <div class="flex flex-col text-text3">
                    <h1 class="text-base font-medium max-w-4xl tracking-tighter">SCULPTURE
                    </h1>
                    <h1 class="text-base font-light max-w-4xl tracking-tighter">OPENING NEW COLLECT
                    </h1>
                </div>
            </div>
        </div>
        <div class="w-full flex items-center">
            <div class="w-[50%] flex flex-col gap-10 p-32 text-right items-end">
                <h1 class="text-4xl font-medium max-w-4xl tracking-tighter">We are inspired by artistic art rich in
                    the tradition of multiculturalism. The new week opens a new exhibition to which we pleasantly
                    invite you — Please check and view more gallery with detailed descriptions in events subpage.
                </h1>
                <h1 class="text-lg font-semibold max-w-xl tracking-tighter leading-tight">CHECK AND DISCOVERY ABOUT
                    GOING ON IN THE ARTISTIC AND MUSEUM WORLD. BROWSE THROUGH THE ART EVENTS AND STAY UP TO DATE
                    WITH WHAT HAPPENING.</h1>
                <div class="w-full border-2 border-border p-5 flex items-center justify-center"><img src="arrow.svg"
                        class="w-16" /></div>
            </div>
            <div class="event-2 w-[50%] h-[600px]"></div>
        </div>
    </div>

</main>

<div class="px-10">
    <a href="{{url('/tickets')}}" >
        <div class="bg-border flex items-center justify-center p-40 cursor-pointer">
            <h1 class="text-9xl tracking-[0.2em] text-background font-bold hover:border-b-4 hover:border-b-[gray-800]">
                BUY TICKET
            </h1>
        </div>
    </a>
</div>
@include('front-office/Layout.Footer')
