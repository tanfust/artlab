@include('back-office/Layout.Header')

<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-12 nftmax-main__column">
                <div class="nftmax-body mt-8">
                    <h1 class=" flex justify-center text-4xl">Create a new Category</h1>
                    <div class="nftmax-dsinner flex justify-center mt-8">
                        <div class="col-lg-6 col-md-6 col-12">
                            <!-- Sign in Form -->

                            <form class="nftmax-wc__form-main "  enctype="multipart/form-data" action="{{ route('categories.store') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="">
                                    <label class="ml-4">Name</label>
                                    <div class="">
                                        <input class="mb-6" type="text" name="name">
                                    </div>
                                </div>
                                <div class="">
                                    <label class="ml-4">Description</label>
                                    <div class="">
                                        <input class="mb-6" type="text" name="description">
                                    </div>
                                </div>
                                <div class="">
                                    <label class="ml-4">Slug</label>
                                    <div class="">
                                        <input class="mb-6" type="text" name="slug">
                                    </div>
                                </div><div class="">
                                    <label class="ml-4">Slug Color</label>
                                    <div class="">
                                        <input class="" type="color" value="#FFFFFF" name="slug_color">
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <div class="nftmax__item-button--group nftmax__item-button--group--profile w-40">
                                        <button
                                        href="{{ url('/categories') }}"
                                            class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius "
                                            type="submit" >Add category</button>
                                    </div>
                                </div>

                                
                            </form>

                            <div class="flex justify-center mt-4"><a href="{{ url('/categories') }}"><button
                                        class="nftmax__item-button--single nftmax__item-button--cancel mr-4 "
                                        data-bs-toggle="modal" data-bs-target="#cancel_modal">Cancel</button></a></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>