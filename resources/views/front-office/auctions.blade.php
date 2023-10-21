<x-guest-layout>

    <div class="w-full border-b-[2px] border-border pt-28 pb-10 px-[12vw] relative">
        <h1 class="md:text-9xl lg:text-[204px] font-bold pb-10 tracking-tighter flex items-start gap-5">AUCTIONS <img src="star.svg" /></h1>
        <h1 class="md:text-6xl lg:text-[87px] font-medium max-w-4xl tracking-tighter">WHERE VALUABLES BECOME ACCESSIBLE.</h1>
        <a href="#main" class="absolute right-16 bottom-12 rounded-full border-2 border-border w-40 h-40 hover:scale-[1.1] transition-all cursor-pointer flex items-center justify-center rotate-90 hover:rotate-0">
            <img src="arrow.svg" class=""/>
        </a>
    </div>

    <main id="main">

    </main>
    <div class="px-10">
        <a href="{{url('/tickets')}}">
            <div class="bg-border flex items-center justify-center p-40 cursor-pointer">
                <h1 class="text-9xl tracking-[0.2em] text-background font-bold hover:border-b-4 hover:border-b-[gray-800]">BUY TICKET</h1>
            </div>
        </a>
    </div>

</x-guest-layout>
