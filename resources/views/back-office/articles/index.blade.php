@include('back-office/Layout.Header')

<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nftmax-table mg-top-40">
                    <div class="nftmax-table__heading">
                        <h3 class="nftmax-table__title mb-0">All articles</h3>
                    </div>
                    <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('articles.create') }}"> Create article</a>
                </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="table_1" role="tabpanel" aria-labelledby="table_1">
                            <!-- NFTMax Table -->
                            <table id="nftmax-table__main" class="nftmax-table__main nftmax-table__product-history ">
                                <!-- NFTMax Table Head -->
                                <thead class="nftmax-table__head">
                                    <tr>
                                        <th class="nftmax-table__column-1 nftmax-table__h1">article ID
                                        </th>
                                        <th class="nftmax-table__column-2 nftmax-table__h2">article title
                                        </th>
                                        <th class="nftmax-table__column-3 nftmax-table__h3">
                                            article content</th>
                                        <th class="nftmax-table__column-2 nftmax-table__h7">
                                            actions</th>
                                    </tr>
                                </thead>
                                <!-- NFTMax Table Body -->
                                <tbody class="nftmax-table__body">
                                    <?php $i = 0; ?>
                                    @foreach ($articles as $article)
                                    <tr>
                                        <td class="nftmax-table__column-1 nftmax-table__data-1">
                                            <span class="nftmax-table__text"><b>{{ $article->id }}</b></span>
                                        </td>
                                        <td class="nftmax-table__column-2 nftmax-table__data-2">
                                            <p class="nftmax-table__text nftmax-table__time">
                                                {{ $article->articleTitle }}</p>
                                        </td>


                                        <td class="nftmax-table__column-5 nftmax-table__data-5">
                                            <p class="nftmax-table__text nftmax-table__bid-text">
                                                {{ $article->articleContent }}</p>
                                        </td>

                                        <td class="nftmax-table__column-2 nftmax-table__data-4">
                                            
                                                <form action="{{ route('articles.destroy',$article->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                           
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <!-- End NFTMax Table Body -->
                            </table>
                            <!-- End NFTMax Table -->
                        </div>
                        <div class="tab-pane fade" id="table_2" role="tabpanel" aria-labelledby="table_1">
                            <!-- NFTMax Table -->

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Article</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('articles.create') }}"> Create article</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th> title</th>
                    <th> content</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->articleTitle }}</td>
                        <td>{{ $article->articleContent }}</td>

                        <td>
                            <form action="{{ route('articles.destroy',$article->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>

    </div> -->
