@include('back-office/Layout.Header')
<!-- NFTmax Dashboard -->
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 nftmax-main__column">
                <div class="nftmax-body min-h-screen pt-10">
                    <h2 class="text-4xl font-extrabold mb-4">Create a Gallery </h2>
                    <form class="form" method="POST" action="{{ route('Gallery.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method('POST')
                        <div class="row">
                            <div class="col-12">
                                <div class="nftmax__item-box w-full">
                                    <div class="row nftmax-pcolumn w-full">
                                        <div class="col-xxl-12 col-lg-12 col-12 nftmax-pcolumn__two w-full">
                                            <div
                                                class="nftmax__item-form--main border rounded-lg border-[#e5e7eb] p-10 w-full">
                                                <div class="nftmax__item-form--group">
                                                    <label for="title" class="nftmax__item-label">
                                                        Name</label>
                                                    <input name="galleryName"
                                                        class="nftmax__item-input nftmax__item-input__arrow"
                                                        type="text" placeholder="Article Title" required="required">
                                                </div>

                                                <div class="nftmax__item-form--group">
                                                    <label class="nftmax__item-label">Creator id </label>
                                                    <input name="user_id"
                                                        class="nftmax__item-input nftmax__item-input__arrow"
                                                        type="number" value="{{ $Auth->id }}" required="required"
                                                        disabled>
                                                </div>
                                                <div class="nftmax__item-form--group">
                                                    <label class="nftmax__item-label" for="photo">Photo:</label>
                                                    <input type="file" name="photo" id="photo"
                                                        required="required accept="image/*">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex m-4 float-right">

                                    <button href="{{ url('/upload-product') }}"
                                        class="nftmax__item-button--single nftmax__item-button--cancel mr-4"
                                        data-bs-toggle="modal" data-bs-target="#cancel_modal">Cancel</button>
                                    <button
                                        class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius nftmax-item__btn"
                                        type="submit">Create Now</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('back-office/Layout.RightSidebar')
@include('back-office/Layout.Footer')
