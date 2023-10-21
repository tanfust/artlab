@include('back-office/Layout.Header')
<!-- NFTmax Dashboard -->
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 nftmax-main__column">
                <div class="nftmax-body min-h-screen pt-10">
                    <div class="flex items-center justify-between mx-8">
                        <h2 class="text-4xl font-extrabold mb-4">Create an article </h2>
                        <a href="{{ url('/articles') }}"><button
                                class="nftmax__item-button--single nftmax__item-button--cancel mr-4"
                                data-bs-toggle="modal" data-bs-target="#cancel_modal">Cancel</button></a>
                    </div>
                    <form class="form" method="POST" action="{{ route('articles.store') }}"
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
                                                    <input name="title"
                                                        class="nftmax__item-input nftmax__item-input__arrow"
                                                        type="text" placeholder="Article Title" required="required">
                                                </div>
                                                <div class="nftmax__item-form--group">
                                                    <label for="image" class="nftmax__item-label">Article
                                                        Image</label>
                                                    <input name="image"
                                                        class="text-[#666] bg-[#FAFAFA] border border-[#E3E4FE] px-4 py-3 w-full hover:border-[#5356FB] rounded-3xl"
                                                        type="file">
                                                </div>
                                                <div class="nftmax__item-form--group">
                                                    <label class="nftmax__item-label">Article Content </label>
                                                    <textarea name="content" class="nftmax__item-input nftmax__item-textarea" type="text" maxlength="400"
                                                        placeholder="Provide a detailed description of your item." required="required"></textarea>
                                                </div>
                                                <div class="flex items-center space-x-10">
                                                    <div class="nftmax-paymentm__content">
                                                        <h4
                                                            class="nftmax-paymentm__title nftmax-paymentm__title--notify">
                                                            Publish article </h4>
                                                        <p class="nftmax-paymentm__text nftmax-paymentm__text--notify">
                                                            you can publish or unpublish your article</p>
                                                    </div>
                                                    <div
                                                        class="nftmax-ptabs__notify-switch  nftmax-ptabs__notify-switch--two justify-center">
                                                        <label class="nftmax__item-switch">
                                                            <input type="checkbox" name="isPublished" value="1">
                                                            <span
                                                                class="nftmax__item-switch--slide nftmax__item-switch--round"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex m-4 float-right">
                                    <button href="{{ url('/articles') }}"
                                        class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius nftmax-item__btn"
                                        type="submit">Create Now</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @include('back-office/Layout.RightSidebar')
            @include('back-office/Layout.Footer')
