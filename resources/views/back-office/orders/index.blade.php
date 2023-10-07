@include('back-office/Layout.Header')
<!-- NFTmax Dashboard -->
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="w-full nftmax-main__column">
                <div class="nftmax-body min-h-screen w-full">
                    <div class="nftmax-dsinner w-full">

                        <!-- Welcome CTA -->
                        <div class="welcome-cta mg-top-40">
                            <div class="welcome-cta__heading">
                                <h2 class="welcome-cta__title">Create artwork for client commision-only.
                                </h2>
                                <p class="welcome-cta__text">Sell Exclusive Art pieces for your selected clients</p>
                            </div>
                            <div class="welcome-cta__button">
                                <a href="{{ url('/orders/create') }}"
                                class="nftmax-btn nftmax-btn__bordered bg radius">New Order</a>
                                <a href="{{ url('/dashboard') }}" class="nftmax-btn trs-white bl-color">My ArtWork</a>
                            </div>
                        </div>
                        <!-- End Welcome CTA -->

                        <!-- Marketplace Bar -->
                        <div class="nftmax-marketplace__bar mg-top-50 mg-btm-40">
                            <div class="nftmax-marketplace__bar-inner">
                                <!-- Marketplace Tab List -->
                                <div class="list-group nftmax-marketplace__bar-list" id="list-tab" role="tablist">
                                    <a class="list-group-item active" data-bs-toggle="list" href="#id1"
                                        role="tab">All</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id1"
                                        role="tab">Pending</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id2"
                                        role="tab">Active</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id3" role="tab">Delivered</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id3" role="tab">Cancelled</a>
                                </div>
                                <!-- End Marketplace Tab List -->

                                <div class="nftmax-marketplace__bar-right">
                                    <div class="nftmax-marketplace__bar-one">
                                        <form class="nftmax-marketplace__bar-search" action="#">
                                            <button class="search-btn" type="submit"><img src="assets/img/search.png"
                                                    alt="#"></button>
                                            <input name="s" value="" type="text"
                                                placeholder="Search items, collections...">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex py-10 gap-10 overflow-x-scroll">
                                @foreach ($orders as $Order)
                                <div class="trending-action__single trending-action__single--v2 w-[360px] max-w-sm">
                                    <div class="nftmax-trendmeta">
                                        <div class="nftmax-trendmeta__main">
                                            <div class="nftmax-trendmeta__author">
                                                <div class="nftmax-trendmeta__content">
                                                    <span class="nftmax-trendmeta__small">Artwork Title</span>
                                                    <h4 class="nftmax-trendmeta__title font-bold text-xl">{{ $Order->title }}</h4>
                                                        {{-- {{ $Order['1'] }}</h4> --}}
                                                </div>
                                            </div>
                                            <div class="nftmax-trendmeta__author">
                                                <div class="nftmax-trendmeta__img">
                                                    <img src="assets/img/market-author-1.png"
                                                        alt="#">
                                                </div>
                                                <div class="nftmax-trendmeta__content">
                                                    <span class="nftmax-trendmeta__small">Client</span>
                                                    <h4 class="nftmax-trendmeta__title">{{ $Order->client }}</h4>
                                                        {{-- {{ $Order['1'] }}</h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Trending Head -->
                                    <div class="w-full h-40 relative" style="background: url({{ $Order->image }}); background-position: center; background-size: cover;">
                                        @if ($Order->status == 'active')
                                            <div class="bg-[green] absolute mt-4 ml-3 text-[white] px-3 py-1 rounded-2xl text-sm">
                                                <span>Active</span>
                                            </div>
                                        @elseif ($Order->status == 'pending')
                                            <div class="bg-[orange] absolute mt-4 ml-3 text-[black] px-3 py-1 rounded-2xl text-sm">
                                                <span>Pending</span>
                                            </div>
                                        @elseif ($Order->status == 'delivered')
                                        <div class="bg-[gray] absolute mt-4 ml-3 text-[white] px-3 py-1 rounded-2xl text-sm">
                                            <span>Delivered</span>
                                        </div>
                                        @else
                                        <div class="bg-[#ff000084] absolute mt-4 ml-3 text-[white] px-3 py-1 rounded-2xl text-sm">
                                            <span>Cancelled</span>
                                        </div>
                                        @endif
                                        <div class="trending-action__button v2 z-10 absolute">
                                            <a class="trending-action__btn heart-icon"><i
                                                    class="fa-solid fa-heart"></i></a>
                                            <a class="trending-action__btn"><i
                                                    class="fa-solid fa-ellipsis-vertical"></i></a>
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
