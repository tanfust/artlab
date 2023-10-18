@include('back-office/Layout.Header')
<!-- NFTmax Dashboard -->
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 nftmax-main__column">
                <div class="nftmax-body min-h-screen pt-10">
                    <h2 class="text-4xl font-extrabold mb-4">Update "{{ $article->articleTitle }}" </h2>
                    <form class="form" method="POST" action="{{ route('articles.update') }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <div class="nftmax__item-box w-full">
                                    <div class="row nftmax-pcolumn w-full">
                                        <div class="col-xxl-12 col-lg-12 col-12 nftmax-pcolumn__two w-full">
                                            <div
                                                class="nftmax__item-form--main border rounded-lg border-[#e5e7eb] p-10 w-full">
                                                <div class="nftmax__item-form--group">
                                                    <label for="title" class="nftmax__item-label">Article
                                                        Title</label>
                                                    <input name="articleTitle" value="{{ $article->articleTitle }}"
                                                        class="nftmax__item-input nftmax__item-input__arrow"
                                                        type="text" placeholder="Article Title" required="required">
                                                </div>

                                                <div class="nftmax__item-form--group">
                                                    <label class="nftmax__item-label">Article Content </label>
                                                    <textarea name="articleContent" class="nftmax__item-input nftmax__item-textarea" type="text"
                                                        placeholder="Provide a detailed description of your item." required="required">{{ $article->articleContent }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nftmax__item-button--group">
                                    <a href="{{ url('/articles') }}"><button
                                            class="nftmax__item-button--single nftmax__item-button--cancel mr-4"
                                            data-bs-toggle="modal" data-bs-target="#cancel_modal">Cancel</button>
                                        <button
                                            class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius nftmax-item__btn"
                                            type="submit">Update Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @include('back-office/Layout.RightSidebar')
            @include('back-office/Layout.Footer')
