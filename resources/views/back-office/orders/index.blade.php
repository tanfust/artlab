@include('back-office/Layout.Header')
<script>
    function toggleDrawer(email, name){
        const drawer = document.getElementById('drawer');
        const burger = document.getElementById('burger');
        const overlay = document.getElementById('overlay');
        const clientName = document.getElementById('client-name');
        const clientEmail = document.getElementById('client-email');

        burger.classList.toggle('active');
        overlay.classList.remove('hidden');
        drawer.classList.remove('right-[-500px]');
        drawer.classList.add('right-0');
        console.log(email);
        document.getElementById('client-name').innerHTML = name;
        document.getElementById('client-email').innerHTML = email;
    };
    function hideDrawer(){
        overlay.classList.add('hidden');
        drawer.classList.remove('right-0');
        drawer.classList.add('right-[-500px]');
    };
</script>
<!-- NFTmax Dashboard -->
<div id="overlay" onclick="hideDrawer()" class="hidden fixed z-[6000] top-0 bg-black opacity-20 w-[100vw] h-[100vh]"></div>
<div id="drawer" class="w-[500px] h-[100vh] fixed right-[-500px] top-0 bg-white transition-all z-[7000] p-2">
    <div id="drawer-content" class="rounded-lg bg-slate-100 w-full h-full p-5 flex flex-col gap-2">
        <h1 class="text-5xl pb-8">Client Details</h1>
        <p>Name</p>
        <h1 id="client-name" class="text-2xl opacity-80 pb-4"></h1>
        <p>Email</p>
        <h1 id="client-email" class="text-2xl opacity-80"></h1>

    </div>
</div>
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="w-full nftmax-main__column">
                <div class="nftmax-body min-h-screen w-full">
                    <div class="nftmax-dsinner w-full">

                        <!-- Welcome CTA -->
                        <div class="welcome-cta mg-top-40">
                            <div class="welcome-cta__heading">
                                <h2 class="welcome-cta__title text-6xl">Client Orders
                                </h2>
                                <p class="welcome-cta__text">Sell Exclusive Art pieces for your selected clients</p>
                                {{-- <h1 class="text-4xl font-black">Client Orders</h1> --}}
                            </div>
                            <div class="welcome-cta__button">
                                <a href="{{ url('/orders/create') }}"
                                class="nftmax-btn nftmax-btn__bordered bg radius z-20 relative">New Order</a>
                                <a href="{{ url('/dashboard') }}" class="nftmax-btn trs-white bl-color">My ArtWork</a>
                            </div>
                        </div>
                        <!-- End Welcome CTA -->

                        <!-- Marketplace Bar -->
                        <div class="nftmax-marketplace__bar mg-top-50 mg-btm-40">
                            <div class="nftmax-marketplace__bar-inner">
                                <!-- Marketplace Tab List -->
                                {{-- <div class="list-group nftmax-marketplace__bar-list" id="list-tab" role="tablist">
                                    <a class="list-group-item active" data-bs-toggle="list" href="#id1"
                                        role="tab">All</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id1"
                                        role="tab">Pending</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id2"
                                        role="tab">Active</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id3" role="tab">Delivered</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id3" role="tab">Cancelled</a>
                                </div> --}}
                                <!-- End Marketplace Tab List -->
                            </div>
                            <div class="w-full flex gap-10 overflow-x-scroll">
                                @foreach ($orders as $Order)
                                <div class="trending-action__single trending-action__single--v2 w-[360px] max-w-sm">
                                    <div class="nftmax-trendmeta">
                                        <div class="nftmax-trendmeta__main">
                                            <div class="nftmax-trendmeta__author">
                                                <div class="nftmax-trendmeta__content">
                                                    <span class="nftmax-trendmeta__small">Artwork Title</span>
                                                    <h4 class="nftmax-trendmeta__title font-bold text-xl">{{ $Order->title }}</h4>
                                                </div>
                                            </div>
                                            <div class="nftmax-trendmeta__author">
                                                <div class="nftmax-trendmeta__content">
                                                    <span class="nftmax-trendmeta__small">Client</span>
                                                    <h2 id="burger" onclick="toggleDrawer('{{$Order->client->email}}', '{{$Order->client->name}}')" class="nftmax-trendmeta__title cursor-pointer text-lg">{{ $Order->client->name }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Trending Head -->
                                    <div class="w-full h-40 relative" style="background: url({{ $Order->image }}); background-position: center; background-size: cover;">
                                        @if ($Order->status == 'active')
                                            <div class="bg-[green] absolute top-3 ml-3 text-[white] px-3 py-1 rounded-2xl text-sm">
                                                <span>Active</span>
                                            </div>
                                        @elseif ($Order->status == 'pending')
                                            <div class="bg-[orange] absolute top-3 ml-3 text-[black] px-3 py-1 rounded-2xl text-sm">
                                                <span>Pending</span>
                                            </div>
                                        @elseif ($Order->status == 'delivered')
                                        <div class="bg-[gray] absolute top-3 ml-3 text-[white] px-3 py-1 rounded-2xl text-sm">
                                            <span>Delivered</span>
                                        </div>
                                        @else
                                        <div class="bg-[#ff000084] absolute top-3 ml-3 text-[white] px-3 py-1 rounded-2xl text-sm">
                                            <span>Cancelled</span>
                                        </div>
                                        @endif
                                        <div class="trending-action__button v2 z-10 p-0 justify-center items-center bg-transparent">
                                            <div class="nftmax-header__amount justify-center px-3 items-center w-full bg-transparent">
                                                <a class="trending-action__btn mb-10"><i
                                                    class="fa-solid fa-ellipsis-vertical"></i></a>
                                                <!-- NFTMax Balance Hover -->
                                                <div class="nftmax-balance w-40 left-[150px] top-[80px] py-4 px-2">
                                                    <!-- NFTMax Balance List -->
                                                    <ul class="nftmax-balance_list">
                                                        <div class="nftmax-balance__button mt-0" data-bs-toggle="modal"
                                                        data-bs-target="#add_wallet"><a href="{{ route('orders.edit',$Order->id) }}"
                                                            class="nftmax-btn nftmax-btn__bordered bg radius">Edit</a>
                                                    </div>
                                                        <form action="{{ route('orders.destroy',$Order->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="nftmax-balance__button border-none" type="submit">
                                                                <span class="nftmax-btn nftmax-btn__bordered bg radius">Delete</span>
                                                            </button>
                                                        </form>
                                                    </ul>
                                                    <!-- NFTMax Balance Button -->
                                                </div>
                                                <!-- End NFTMax Balance Hover -->
                                            </div>
                                        </div>
                                        <div >
                                        </div>
                                    </div>
                                    <!-- Trending Body -->
                                    <div class="trending-action__body trending-marketplace__body pb-3">
                                    {{-- Artwork Description --}}
                                       <span class="nftmax-trendmeta__small">Description</span>
                                        <h4 class="nftmax-trendmeta__title">{{ $Order->description }}</h4>
                                    </div>
                                        <div class="nftmax-currency items-end pt-4">
                                            <div class="nftmax-currency__main">
                                                <div class="flex flex-col">
                                                        <span class="nftmax-trendmeta__small text-md">Amount</span>
                                                        <h4 class="text-lg">
                                                            {{ $Order->totalAmount }} USD </h4>
                                                </div>
                                            </div>
                                            <a href="{{ url('/market-place') }}"
                                                class="nftmax-btn nftmax-btn__secondary radius">View Artwork</a>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('back-office/Layout.RightSidebar')
            @include('back-office/Layout.Footer')
