@include('back-office/Layout.Header')
<!-- NFTmax Dashboard -->
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 nftmax-main__column">
                <div class="nftmax-body min-h-screen pt-10">
                    <form class="form" method="POST" action="{{ route('orders.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <div class="nftmax__item-box w-full">
                                    <div class="row nftmax-pcolumn w-full">
                                        <div class="col-xxl-12 col-lg-12 col-12 nftmax-pcolumn__two w-full">
                                            <div class="nftmax__item-form--main border rounded-lg border-[#e5e7eb] p-10 w-full">
                                                <div class="nftmax__item-form--group">
                                                    <label for="title" class="nftmax__item-label">Order Title</label>
                                                    <input name="title"
                                                        class="nftmax__item-input nftmax__item-input__arrow"
                                                        type="text"
                                                        placeholder="Order Title"
                                                        required="required">
                                                </div>
                                                <div class="nftmax__item-form--group">
                                                    <label for="artwork_id"
                                                        class="nftmax__item-label">Artwork</label>
                                                    <select name="artwork_id" id="artwork" class="form-select"
                                                        aria-label="Default select example">
                                                        <option disabled selected>Select Artwork</option>
                                                        <option value="1">Piece #001</option>
                                                        <option value="1">Piece #002</option>
                                                        <option value="1">Piece #003</option>
                                                    </select>
                                                </div>
                                                <div class="nftmax__item-form--group">
                                                    <label for="status"
                                                        class="nftmax__item-label">Status</label>
                                                    <select name="status" id="artwork" class="form-select"
                                                        aria-label="Default select example">
                                                        <option value="active" selected>Active</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="delivered">Delivered</option>
                                                        <option value="cancelled">Cancelled</option>
                                                    </select>
                                                </div>
                                                <div class="nftmax__item-form--group">
                                                    <label for="client" class="nftmax__item-label">Client Name</label>
                                                    <input name="client"
                                                        class="nftmax__item-input nftmax__item-input__arrow"
                                                        type="text"
                                                        placeholder="Client name"
                                                        required="required">
                                                </div>
                                                <div class="nftmax__item-form--group">
                                                    <label for="totalAmount" class="nftmax__item-label">Total Amount</label>
                                                    <input name="totalAmount"
                                                        class="nftmax__item-input nftmax__item-input__arrow"
                                                        type="number"
                                                        placeholder="Enter the price for which the item will be instantly sold"
                                                        required="required">
                                                </div>
                                                <div class="nftmax__item-form--group">
                                                    <label for="image" class="nftmax__item-label">Order Image</label>
                                                    <input name="image"
                                                        class="text-[#666] bg-[#FAFAFA] border border-[#E3E4FE] px-4 py-3 w-full hover:border-[#5356FB] rounded-3xl"
                                                        type="file">
                                                </div>
                                                <div class="nftmax__item-form--group">
                                                    <label class="nftmax__item-label">Description </label>
                                                    <textarea name="description" class="nftmax__item-input nftmax__item-textarea" type="text"
                                                        placeholder="Provide a detailed description of your item." required="required"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nftmax__item-button--group">
                                    <a href="{{ url('/orders') }}"><button class="nftmax__item-button--single nftmax__item-button--cancel"
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
            @include('back-office/Layout.RightSidebar')
            @include('back-office/Layout.Footer')
