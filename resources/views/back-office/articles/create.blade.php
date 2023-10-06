@include('back-office/Layout.Header')

<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left mb-2">
                        <h2>Add article</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>article title:</strong>
                            <input type="text" name="articleTitle" class="form-control" placeholder="article title">
                            @error('articleTitle')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>article Content:</strong>
                            <input type="text" name="articleContent" class="form-control" placeholder="article Content">
                            @error('articleContent')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>



{{-- 

<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 nftmax-main__column">
                <div class="nftmax-body">
                    <!-- Dashboard Inner -->
                    <div class="nftmax-dsinner">
                        <!-- All Notification Heading -->
                        <div class="nftmax-inner__heading">
                            <h2 class="nftmax-inner__page-title">Add article</h2>
                        </div>
                        <!-- End All Notification Heading -->

                        <div class="nftmax-personals">

                            <div class="row">

                                <div class="col-lg-9 col-md-10 col-12  nftmax-personals__content">
                                    <div class="nftmax-ptabs__inner">
                                        <div class="tab-content" id="nav-tabContent">
                                            <!--  Features Single Tab -->
                                            <div class="tab-pane fade show active" id="id1" role="tabpanel">
                                                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="nftmax-ptabs__separate">
                                                                <div class="nftmax-ptabs__form-main">
                                                                    <div class="nftmax__item-form--group">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="nftmax__item-form--group nftmax-last-name">
                                                                                    <label class="nftmax__item-label">article Title
                                                                                    </label>
                                                                                    <input class="nftmax__item-input" type="text" name="articleTitle" required="required">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nftmax__item-form--group">
                                                                        <label class="nftmax__item-label">article content
                                                                        </label>
                                                                        <input class="nftmax__item-input" type="text" name="articleContent" required="required">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary ml-3">Submit</button>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>



                                                </form>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Dashboard Inner -->
                </div>
            </div> --}}
