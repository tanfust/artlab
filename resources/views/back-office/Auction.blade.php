@include('back-office/Layout.Header')
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 nftmax-main__column">
                <div class="nftmax-body">
                    <!-- Welcome CTA -->
                    <div class="welcome-cta mg-top-40">
                        <div class="welcome-cta__heading">
                            <h2 class="welcome-cta__title">Create an Auction for one of your Arts..
                            </h2>
                            <p class="welcome-cta__text">Sell your Art and gain money from your work!</p>
                        </div>
                        <div class="welcome-cta__button">
                            <a href="{{ url('/auctions/create') }}"
                                class="nftmax-btn nftmax-btn__bordered bg radius">Create Auction</a>
                        </div>
                    </div>
                    <!-- End Welcome CTA -->

                    <div class="dashboard-banner nftmax-bg-cover mg-top-40"
                        style="background-image:url('assets/img/banner-bg.png')">
                        <div class="row">
                            <div class="col-12">
                                <div class="dashboard-banner__main">
                                    <div class="dashboard-banner__column dashboard-banner__column--one">
                                        <!-- Dashboard Content -->
                                        <div class="dashboard-banner__content">
                                            <h2 class="dashboard-banner__title nftmax-font-regular nftmax-lspacing">
                                                bid name</h2>
                                            <p class="dashboard-banner__text nftmax-lspacing">ID :
                                                bid id</p>
                                        </div>

                                        <div class="nftmax-header__author nftmax-header__author-two ">
                                            <div class="nftmax-header__author-img"><img src="event-1.jpeg"
                                                    alt="#"></div>
                                            <div class="nftmax-header__author-content ">
                                                <h4
                                                    class="nftmax-header__author-title nftmax-header__author-title--two nftmax-lspacing">
                                                    bid user id</h4>
                                                <p class="nftmax-header__author-text nftmax-header__author-text--two">
                                                    <a href="#" class="nftmax-font-regular nftmax-lspacing">bid
                                                        user
                                                        name</a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="dashboard-banner__bids">
                                            <div class="dashboard-banner__bid">
                                                <!-- Single Bid -->
                                                <div class="dashboard-banner__group">
                                                    <p class="dashboard-banner__group-small">Current Bid</p>
                                                    <h3 class="dashboard-banner__group-title">
                                                        $bids ETH</h3>
                                                    <p class="dashboard-banner__group-small">
                                                        $bids <span>USD</span></p>
                                                </div>
                                                <!-- End Single Bid -->
                                                <div class="dashboard-banner__middle-border"></div>
                                                <!-- Single Bid -->
                                                <div class="dashboard-banner__group">
                                                    <p class="dashboard-banner__group-small">Remaing Time</p>
                                                    <h3 class="dashboard-banner__group-title"
                                                        data-countdown="20/08/2021"></h3>
                                                    <p class="dashboard-banner__group-small nftmax-timing">
                                                        <span>Hrs</span> <span>Min</span> <span>Sec</span>
                                                    </p>
                                                </div>
                                                <!-- End Single Bid -->
                                            </div>
                                        </div>

                                        <!-- Dashboard Banner Button -->
                                        <div class="dashboard-banner__button">
                                            <div class="dashboard-banner__single-btn">
                                                <a class="dashboard-banner__heart"><i class="fa-solid fa-heart"></i></a>
                                            </div>
                                            <div class="dashboard-banner__single-btn dashboard-banner__main-btn">
                                                <a href="{{ url('/active-bids') }}"
                                                    class="nftmax-btn nftmax-btn__secondary radius">Place a Bid</a>
                                            </div>
                                            <div class="dashboard-banner__single-btn">
                                                <a href="{{ url('/market-place') }}" class="nftmax-btn trs-white">View
                                                    Art
                                                    Work</a>
                                            </div>
                                        </div>
                                        <!-- End Dashboard Banner Button -->
                                    </div>
                                    <div class="dashboard-banner__column dashboard-banner__column--two">
                                        <div class="dashboard-banner__slider">
                                            {{-- @foreach ($sliderBanner as $sliderBanner)
                                            <div class="dashboard-banner__single-slider">
                                                <img src="{{ asset($sliderBanner) }}" alt="#">
                                            </div>
                                        @endforeach --}}
                                            <div class="dashboard-banner__single-slider">
                                                <img src="event-2.jpeg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trending-action mg-top-40">
                        <h2 class="trending-action__heading mg-btm-20">All Bids</h2>
                        {{-- <div class="row nftmax-gap-sq30 trending-action__actives">
                            @foreach ($auctions as $auction)
                                <div class="col-xxl-3 col-lg-3 col-md-6 col-12">
                                    <!-- Treadning Single -->
                                    <div class="trending-action__single">
                                        <!-- Trending Head -->
                                        <div class="trending-action__head">
                                            <div class="trending-action__button">
                                                <a class="trending-action__btn heart-icon"><i
                                                        class="fa-solid fa-heart"></i></a>
                                                <a class="trending-action__btn"><i
                                                        class="fa-solid fa-ellipsis-vertical"></i></a>
                                            </div>
                                            <img src="{{ asset($auction['0']) }}" alt="#">
                                        </div>
                                        <!-- Trending Body -->
                                        <div class="trending-action__body">
                                            <div class="trending-action__author-meta">
                                                <div class="trending-action__author-img"><img
                                                        src="{{ asset($auction['1']) }}" alt="#"></div>
                                                <p class="trending-action__author-name">Owned by {{ $auction['1'] }} <a
                                                        href="profile.html">{{ $auction['2'] }}</a></p>
                                            </div>
                                            <h2 class="trending-action__title"><a
                                                    href="{{ url('/active-bids') }}">{{ $auction['3'] }}</a></h2>
                                            <div class="dashboard-banner__bid dashboard-banner__bid-v2">
                                                <!-- Single Bid -->
                                                <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                    <p class="dashboard-banner__group-small">Current Bid</p>
                                                    <h3 class="dashboard-banner__group-title">{{ $auction['4'] }}
                                                        ETH</h3>
                                                </div>
                                                <!-- End Single Bid -->
                                                <div class="dashboard-banner__middle-border"></div>
                                                <!-- Single Bid -->
                                                <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                    <p class="dashboard-banner__group-small">Remaing Time</p>
                                                    <h3 class="dashboard-banner__group-title" id="CountDown"
                                                        data-countdown="{{ $auction['7'] }}"></h3>
                                                </div>
                                                <!-- End Single Bid -->
                                            </div>
                                        </div>
                                        <div class="dashboard-banner__button trending-action__bottom">
                                            <a href="{{ url('/active-bids') }}"
                                                class="nftmax-btn nftmax-btn__secondary radius">Place a Bid</a>
                                            <a href="{{ url('/market-place') }}" class="nftmax-btn trs-white">View
                                                Atwork</a>
                                        </div>
                                    </div>
                                    <!-- End Treadning Single -->
                                </div>
                            @endforeach
                        </div> --}}
                        <div class="row nftmax-gap-sq30 trending-action__actives">
                            @foreach ($auctions as $auction)
                                <div class="col-xxl-3 col-lg-3 col-md-6 col-12">
                                    <!-- Trending Single -->
                                    <div class="trending-action__single">
                                        <!-- Trending Head -->
                                        <div class="trending-action__head">
                                            <div class="trending-action__button">
                                                <!-- Delete Button -->
                                                <form action="{{ route('auctions.destroy', $auction->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                                <!-- End Delete Button -->
                                                <!-- Edit Button -->
                                                <a href="{{ route('auctions.edit', $auction->id) }}"
                                                    class="btn btn-primary">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </a>
                                                <!-- End Edit Button -->

                                            </div>
                                            <img src="event-1.jpeg" alt="{{ $auction->title }}">
                                        </div>

                                        <!-- Trending Body -->
                                        <div class="trending-action__body">

                                            <div class="trending-action__author-meta">
                                                <div class="trending-action__author-img"><img src="event-1.jpeg"
                                                        alt="Creator Avatar">
                                                </div>
                                                {{-- "{{ asset($auction->owner_avatar) }}"
                                                {{ $auction->creator->name }}</a>
                                                </p> --}}
                                                <p class="trending-action__author-name">Owned by <a
                                                        href="{{ url('/profile/' . $auction->creator_id) }}">Test
                                                        user</a>
                                                </p>
                                            </div>
                                            <p>{{ $auction->description }}</p>
                                            <h2 class="trending-action__title"><a
                                                    href="{{ url('/active-bids') }}">{{ $auction->title }}</a></h2>
                                            <div class="dashboard-banner__bid dashboard-banner__bid-v2">
                                                <!-- Single Bid -->
                                                <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                    <p class="dashboard-banner__group-small">Starting Price</p>
                                                    <h3 class="dashboard-banner__group-title">
                                                        {{ $auction->startingPrice }} $</h3>
                                                </div>
                                                <!-- End Single Bid -->
                                                <div class="dashboard-banner__middle-border"></div>
                                                <!-- Single Bid -->
                                                <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                    <p class="dashboard-banner__group-small">Remaining Time</p>
                                                    <h3 class="dashboard-banner__group-title"
                                                        id="CountDown_{{ $auction->id }}">
                                                        {{ $auction->endDate }}
                                                    </h3>
                                                </div>
                                                <script>
                                                    // JavaScript code to calculate and update remaining time for this auction
                                                    var endDate_{{ $auction->id }} = new Date("{{ $auction->endDate }}").getTime();
                                                    var countdownElement_{{ $auction->id }} = document.getElementById("CountDown_{{ $auction->id }}");

                                                    // Update the countdown for this auction every second
                                                    var countdownInterval_{{ $auction->id }} = setInterval(function() {
                                                        var now = new Date().getTime();
                                                        var timeRemaining = endDate_{{ $auction->id }} - now;

                                                        if (timeRemaining <= 0) {
                                                            // Auction has ended
                                                            countdownElement_{{ $auction->id }}.innerHTML = "Auction Ended";
                                                            clearInterval(countdownInterval_{{ $auction->id }});
                                                        } else {
                                                            // Calculate days, hours, minutes, and seconds
                                                            var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                                                            var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                            var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                                                            var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                                                            // Update the countdown element for this auction
                                                            countdownElement_{{ $auction->id }}.innerHTML = days + "d " + hours + "h " + minutes + "m " +
                                                                seconds + "s";
                                                        }
                                                    }, 1000); // Update every second
                                                </script>
                                                <!-- End Single Bid -->
                                            </div>
                                        </div>
                                        <div class="dashboard-banner__button trending-action__bottom">
                                            <a href="{{ url('/active-bids') }}"
                                                class="nftmax-btn nftmax-btn__secondary radius">Place a Bid</a>
                                            <a href="{{ url('/market-place') }}" class="nftmax-btn trs-white">View
                                                Artwork</a>
                                        </div>
                                    </div>
                                    <!-- End Trending Single -->
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="nftmax-view__all"><a href="#"
                                        class="nftmax-btn trs-white bl-color">View Atwork</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- End Welcome CTA -->
                </div>
            </div>
            <!-- End Dashboard Inner -->
        </div>
    </div>
    @include('back-office/Layout.RightSidebar')
    @include('back-office/Layout.Footer')
