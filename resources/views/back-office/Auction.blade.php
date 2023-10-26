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
                    <h2 class="trending-action__heading mg-btm-20 mt-10">All Bids</h2>
                    @foreach ($auctions as $auction)
                        <div class="dashboard-banner nftmax-bg-cover mg-top-40"
                            style="background-image:url('assets/img/banner-bg.png')">
                            <div class="row">
                                <div class="col-12">
                                    <div class="dashboard-banner__main">
                                        <div class="dashboard-banner__column dashboard-banner__column--one">
                                            <div class="dashboard-banner__content">
                                                <h2 class="dashboard-banner__title nftmax-font-regular nftmax-lspacing">
                                                    {{ $auction->description }}</h2>
                                                <p class="dashboard-banner__text nftmax-lspacing">Auction Id
                                                    :
                                                    {{ $auction->id }}</p>
                                            </div>
                                            <div class="nftmax-header__author nftmax-header__author-two ">
                                                <div class="nftmax-header__author-img"><img src="event-1.jpeg"
                                                        alt="#"></div>
                                                <div class="nftmax-header__author-content ">
                                                    <h4
                                                        class="nftmax-header__author-title nftmax-header__author-title--two nftmax-lspacing">
                                                        {{ $Auth->name }}</h4>
                                                    <p
                                                        class="nftmax-header__author-text nftmax-header__author-text--two">
                                                        <a href="#"
                                                            class="nftmax-font-regular nftmax-lspacing">Id:
                                                            {{ $Auth->id }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="dashboard-banner__bids">
                                                <div class="dashboard-banner__bid">
                                                    <div class="dashboard-banner__group">
                                                        <p class="dashboard-banner__group-small">Current Bid
                                                        </p>
                                                        <h3 class="dashboard-banner__group-title">
                                                            {{ $auction->startingPrice }}</h3>
                                                        <p class="dashboard-banner__group-small">
                                                            $bids <span>USD</span></p>
                                                    </div>
                                                    <div class="dashboard-banner__middle-border"></div>
                                                    <div class="dashboard-banner__group">
                                                        <p class="dashboard-banner__group-small">Remaing
                                                            Time</p>
                                                        <h3 class="dashboard-banner__group-title"
                                                            data-countdown="{{ $auction->endDate }}">
                                                            {{ $auction->endDate }}
                                                        </h3>
                                                        <p class="dashboard-banner__group-small nftmax-timing">
                                                            <span>Days</span> <span>Hrs</span>
                                                            <span>Min</span>
                                                            <span>Sec</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dashboard-banner__button">
                                                <div class="dashboard-banner__single-btn">
                                                    <form action="{{ route('auctions.destroy', $auction->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="dashboard-banner__single-btn dashboard-banner__main-btn">
                                                    <a href="{{ route('auctions.edit', $auction->id) }}"
                                                        class="btn btn-primary">
                                                        <i class="fa-solid fa-pencil"></i>
                                                    </a>
                                                </div>
                                                <div class="dashboard-banner__single-btn">
                                                    <a href="{{ url('/market-place') }}"
                                                        class="nftmax-btn trs-white">View
                                                        Art
                                                        Work</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dashboard-banner__column dashboard-banner__column--one">
                                            <div class="dashboard-banner__slider">
                                                <div class="dashboard-banner__single-slider">
                                                    <img src="{{ asset($auction->Artwork->imageName) }}"
                                                        class="w-full h-full" alt="#">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="row nftmax-gap-sq30 trending-action__actives">
                        <h2 class="trending-action__heading mg-btm-20 mt-10">All Reservation</h2>
                        <form action="#">
                            <div class="nftmax-personals__history">
                                <table id="nftmax-table__main" class="nftmax-table__main nftmax-table__main--profile">
                                    <thead class="nftmax-table__head">
                                        <tr>
                                            <th class="nftmax-table__column-1 nftmax-table__h1">
                                                ID</th>
                                            <th class="nftmax-table__column-2 nftmax-table__h2">
                                                Auction Name</th>
                                            <th class="nftmax-table__column-3 nftmax-table__h3">
                                                Name </th>
                                            <th class="nftmax-table__column-4 nftmax-table__h4">
                                                Email</th>
                                            <th class="nftmax-table__column-5 nftmax-table__h5">
                                                Reservation Date</th>
                                            <th class="nftmax-table__column-6 nftmax-table__h6">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="nftmax-table__body">
                                        @foreach ($Reservations as $Reservations)
                                            <tr>
                                                <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                    <div class="nftmax-table__product-content">
                                                        <p class="nftmax-table__product-desc">
                                                            {{ $Reservations->id }}</p>
                                                    </div>
                                                </td>
                                                <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                    <div class="nftmax-table__product-content">
                                                        <p class="nftmax-table__product-desc">
                                                            {{ $Reservations->Auction->description }}</p>
                                                    </div>
                                                </td>
                                                <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                    <div class="nftmax-table__product-content">
                                                        <p class="nftmax-table__product-desc">
                                                            {{ $Reservations->name }}</p>
                                                    </div>
                                                </td>
                                                <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                    <div class="nftmax-table__product-content">
                                                        <p class="nftmax-table__product-desc">
                                                            {{ $Reservations->email }}</p>
                                                    </div>
                                                </td>
                                                <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                    <div class="nftmax-table__product-content">
                                                        <p class="nftmax-table__product-desc">
                                                            {{ $Reservations->reservation_date }}</p>
                                                    </div>
                                                </td>
                                                <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                    <div class="nftmax-table__product-content">
                                                        <div class="nftmax-table__status__group">
                                                            <div class="nftmax-table__trash">
                                                                <form
                                                                    action="{{ route('reservations.destroy', $Reservations->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('back-office/Layout.RightSidebar')
@include('back-office/Layout.Footer')
