@include('front-office/Layout.Header')
<div class="w-full border-b-[2px] border-border pt-28 pb-10 px-[12vw] relative">
    <h1 class="md:text-9xl lg:text-[284px] font-bold pb-10 tracking-tighter flex items-start gap-5">Gallery <img
            src="star.svg" /></h1>
    <h1 class="md:text-6xl lg:text-[87px] font-medium max-w-4xl tracking-tighter">WE CREATE THE NEXT LEVEL CREATION.
    </h1>
    <a  href="#main"
        class="absolute right-16 bottom-12 rounded-full border-2 border-border w-40 h-40 hover:scale-[1.1] transition-all cursor-pointer flex items-center justify-center rotate-90 hover:rotate-0">
        <img src="arrow.svg" class="" />
    </a>
</div>
<main id="main">
    <div class="w-full flex py-20 px-36 items-center">
        <div class="event-1 w-[50%] h-[600px] mr-36"></div>
        <div class="w-[50%] flex flex-col gap-16">
            <div class="flex flex-col">
                <h1 class="text-base font-medium max-w-4xl tracking-tighter">NEW EVENT
                </h1>
                <h1 class="text-base font-light max-w-4xl tracking-tighter">ABOUT OUR MISSION
                </h1>
            </div>
            <h1 class="text-3xl font-semibold max-w-4xl tracking-tighter">OUR AGENCY CREATING AND INVITES THE QUALITY
                EVENT MEETING, FESTIVAL, MUSEUM SCULPTURE ON THE UNITED STATES — SINCE ©1982. A NEW VISION OF THE
                SHOWCASE.</h1>
            <h1 class="text-lg font-semibold max-w-4xl tracking-tighter">WE CREATE INSPIRING EVENTS COMBINED WITH ART.
                EFFECTIVE FORM OF INVOLVING PEOPLE IN PRODUCT PROMOTION WITH MODERN WEBSITE.</h1>
            <img src="arrow.svg" class="w-16" />
        </div>
    </div>
    <div class="gradient-hover w-full border-t-2 border-text2 flex flex-col py-20 px-6 hover:underline cursor-pointer">
        <div class="w-full flex items-end">
            <h1 class="w-[50%] text-text2 font-semibold">
                UPCOMING EVENT
            </h1>
            <div class="w-[50%] flex justify-between">
                <h1 class="text-7xl font-bold text-text2">Museum</h1>
                <div class="flex flex-col text-text2">
                    <h1 class="text-base font-medium max-w-4xl tracking-tighter">SCULPTURE
                    </h1>
                    <h1 class="text-base font-light max-w-4xl tracking-tighter">OPENING NEW COLLECT
                    </h1>
                </div>
            </div>
        </div>
        <div class="w-full flex items-center">
            <div class="w-[50%] flex flex-col gap-10 p-32 text-right items-end">
                <h1 class="text-4xl font-medium max-w-4xl tracking-tighter">We are inspired by artistic art rich in the
                    tradition of multiculturalism. The new week opens a new exhibition to which we pleasantly invite you
                    — Please check and view more gallery with detailed descriptions in events subpage.</h1>
                <h1 class="text-lg font-semibold max-w-xl tracking-tighter leading-tight">CHECK AND DISCOVERY ABOUT
                    GOING ON IN THE ARTISTIC AND MUSEUM WORLD. BROWSE THROUGH THE ART EVENTS AND STAY UP TO DATE WITH
                    WHAT HAPPENING.</h1>
                <div class="w-full border-2 border-border p-5 flex items-center justify-center"><img src="arrow.svg"
                        class="w-16" /></div>
            </div>
            <div class="event-2 w-[50%] h-[600px]"></div>
        </div>
    </div>

    <div class="flex justify-center gap-20 py-32">
        <div class="event-3 w-[700px] h-[900px]"></div>
        <div class="flex flex-col text-9xl font-black">
            <span>„</span>
            <h1 class="pt-20 text-8xl font-black tracking-[-0.07em] leading-[1] max-w-2xl">
                WE INVITE YOU TO THE OPEN DAYS OF THE EVENT ABOUT ART AND DESIGN.
            </h1>
            <h3 class="pt-20 flex items-center text-base font-semibold gap-4 tracking-[0.3em]"><img src="star.svg"
                    class="w-5" />CEO ARTLAB <span>—</span></h3>
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
