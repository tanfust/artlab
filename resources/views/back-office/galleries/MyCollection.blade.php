@include('back-office/Layout.Header')

<!-- NFTmax Dashboard -->
<section class="nftmax-adashboard nftmax-show">

    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 nftmax-main__column">
                <div class="nftmax-body">
                    <!-- Dashboard Inner -->
                    <div class="nftmax-dsinner">
                    <div class="welcome-cta mg-top-40">
                        <div class="welcome-cta__heading">
                            <h2 class="welcome-cta__title">Create an new Gallery for your ArtWork
                            </h2>
                           
                        </div>
                        <div class="welcome-cta__button">
                            <a href="{{ route('Gallery.create') }}"
                                class="nftmax-btn nftmax-btn__bordered bg radius">Create A new Gallery</a>
                        </div>
                    </div>
                        <div class="row nftmax-gap-sq30 ">
                            @foreach ($Gallery as $Gallery)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="nftmax-collection__single">
                                        <div class="nftmax-collection__head">
                                           <h1>{{$Gallery->galleryName}}</h1>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End Dashboard Inner -->
                </div>
            </div>

            @include('back-office/Layout.RightSidebar')
            @include('back-office/Layout.Footer')
