@include('back-office/Layout.Header')

<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit article</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('articles.index') }}" enctype="multipart/form-data">
                            Back</a>
                    </div>
                </div>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('articles.update',$article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>article title:</strong>
                            <input type="text" name="articleTitle" value="{{ $article->articleTitle }}" class="form-control" placeholder="article title">
                            @error('articleTitle')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>article content:</strong>
                            <input type="text" name="articleContent" class="form-control" placeholder="article content" value="{{ $article->articleContent }}">
                            @error('articleTitle')
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
