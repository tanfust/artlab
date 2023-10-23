<x-guest-layout>

    <div class="w-full border-b-[2px] border-border pt-28 pb-10 px-[12vw] relative">
        <h1 class="md:text-9xl lg:text-[204px] font-bold pb-10 tracking-tighter flex items-start gap-5">AUCTIONS <img
                src="star.svg" /></h1>
        <h1 class="md:text-6xl lg:text-[87px] font-medium max-w-4xl tracking-tighter">WHERE VALUABLES BECOME ACCESSIBLE.
        </h1>
        <a href="#main"
            class="absolute right-16 bottom-12 rounded-full border-2 border-border w-40 h-40 hover:scale-[1.1] transition-all cursor-pointer flex items-center justify-center rotate-90 hover:rotate-0">
            <img src="arrow.svg" class="" />
        </a>
    </div>

    <main id="main">

        <div class="w-full h-fit border-b-[2px] border-border pt-28 pb-10 px-[12vw] relative">
            <div class="auction-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($auctions as $auction)
                    @php
                        $endDateTimestamp = strtotime($auction->endDate);
                        $currentTimestamp = time();
                    @endphp

                    @if ($endDateTimestamp > $currentTimestamp)
                        <div class="border border-black rounded-lg shadow-md p-4 h-full relative">
                            <img src="{{ asset($auction->Artwork->imageName) }}" alt="Image description"
                                class="w-full h-96 mb-4">

                            <h1 class="md:text-3xl lg:text-6xl font-medium max-w-3xl tracking-tighter">
                                {{ $auction->id }}</h1>
                            <h1
                                class="mt-2 text-gray-600 md:text-3xl lg:text-6xl font-medium max-w-3xl tracking-tighter ">
                                {{ $auction->description }}</h1>
                            <p class="mt-2 text-gray-700 md:text-xl lg:text-3xl font-medium max-w-xl tracking-tighter">
                                Starting Price: {{ $auction->startingPrice }} ETH</p>
                            <div
                                class="mt-2 text-gray-700 md:text-xl border border-black p-2 rounded-lg text-center lg:text-3xl font-medium max-w-xl tracking-tighter">

                                <span id="countdown-{{ $auction->id }}"></span>
                            </div>
                            <script>
                                const endDate{{ $auction->id }} = new Date("{{ $auction->endDate }}").getTime();
                                const x{{ $auction->id }} = setInterval(function() {
                                    const now = new Date().getTime();
                                    const distance = endDate{{ $auction->id }} - now;

                                    if (distance > 0) {
                                        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                        document.getElementById("countdown-{{ $auction->id }}").innerHTML =
                                            days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
                                    } else {
                                        document.getElementById("countdown-{{ $auction->id }}").innerHTML = "Auction Ended";
                                    }
                                }, 1000);
                            </script>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>

        <div class="px-10">
            <a href="{{ url('/reservations/create') }}">
                <div class="bg-border flex items-center justify-center p-40 cursor-pointer">
                    <h1
                        class="text-9xl tracking-[0.2em] text-background font-bold hover:border-b-4 hover:border-b-[gray-800]">
                        RESERVE A PLACE!
                    </h1>
                </div>
            </a>
        </div>
    </main>


</x-guest-layout>
