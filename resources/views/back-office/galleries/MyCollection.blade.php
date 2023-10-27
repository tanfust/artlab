@include('back-office/Layout.Header')

<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="w-full nftmax-main__column">
                <div class="nftmax-body min-h-screen w-full">
                    <div class="welcome-cta mg-top-40">
                        <div class="welcome-cta__heading">
                            <h2 class="welcome-cta__title text-6xl">Art Galleries</h2>
                            <p class="welcome-cta__text">Open and view available Art Galleries</p>
                        </div>
                        <div class="welcome-cta__button">
                            <a href="{{ route('Gallery.create') }}"
                                class="nftmax-btn nftmax-btn__bordered bg radius">Create A new Gallery</a>
                        </div>
                    </div>
                    <div class="w-full flex gap-10 overflow-x-scroll mt-10">
                        @foreach ($Gallery as $Gallery)
                            <div class="trending-action__single trending-action__single--v2 w-[360px] max-w-sm flex flex-col">
                                <div class="nftmax-trendmeta">
                                    <div class="items-start">
                                        <div class="nftmax-trendmeta__author">
                                            <div class="nftmax-trendmeta__content max-w-[150px]">
                                                <span class="nftmax-trendmeta__small">Gallery name</span>
                                                <h4 class="nftmax-trendmeta__title font-bold text-xl">{{ $Gallery->galleryName }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Trending Head -->
                                <div class="w-full h-40 relative" style="background: url({{ 'public/assets/img/' . $Gallery->photo }}); background-position: center; background-size: cover;">
                                    <div class="trending-action__button v2 z-10 p-0 justify-center items-center bg-transparent">
                                        <div class="nftmax-header__amount justify-center px-3 items-center w-full bg-transparent">
                                            <a class="trending-action__btn mb-10"><i
                                                class="fa-solid fa-ellipsis-vertical"></i></a>
                                            <!-- NFTMax Balance Hover -->
                                            <div class="nftmax-balance w-40 left-[150px] top-[50px] py-4 px-2">
                                                <!-- NFTMax Balance List -->
                                                <ul class="nftmax-balance_list">
                                                    <div class="nftmax-balance__button mt-0" data-bs-toggle="modal"
                                                    data-bs-target="#add_wallet"><a href="{{ route('Gallery.edit', $Gallery->id) }}"
                                                        class="nftmax-btn nftmax-btn__bordered bg radius">Edit</a>
                                                </div>
                                                    <form action="{{ route('Gallery.destroy', $Gallery->id) }}" method="POST">
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
                                </div>
                                <!-- Trending Body -->
                                <div class="flex justify-end w-full">
                                    <div class="nftmax-currency items-end pt-4 mt-auto">
                                        <a href="{{ route('Gallery.show', $Gallery->id) }}" class="nftmax-btn nftmax-btn__secondary radius">Visit Gallery</a>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('back-office/Layout.RightSidebar')
@include('back-office/Layout.Footer')
