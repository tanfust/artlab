@include('back-office/Layout.Header')

<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-12 nftmax-main__column">
                <div class="nftmax-body">
                    <!-- Dashboard Inner -->

                    <div class="nftmax-dsinner">
                        <div class="nftmax-table mg-top-40 m-4">
                            <div class="flex items-center">
                                <h3 class="text-3xl">All Categories</h3>
                                <div class="ml-auto">
                                    <a class="nftmax-btn primary rounded-3xl"
                                        href="{{ url('/categories/create') }}">Create Category</a>
                                </div>
                            </div>
                            <div class="tab-content m-4" id="myTabContent">
                                <div class="tab-pane fade show active" id="table_1" role="tabpanel"
                                    aria-labelledby="table_1">
                                    <!-- NFTMax Table -->
                                    <table id="nftmax-table__main" class="">
                                        <!-- NFTMax Table Head -->
                                        <thead class="nftmax-table__head">
                                            <tr>
                                                <th class="nftmax-table__column-1 nftmax-table__h1">Category name</th>
                                                <th class="nftmax-table__column-2 nftmax-table__h2">Description</th>
                                                <th class="nftmax-table__column-3 nftmax-table__h3">slug</th>
                                                <th class="nftmax-table__column-4 nftmax-table__h4">Actions</th>
                                            </tr>
                                        </thead>
                                        <!-- NFTMax Table Body -->
                                        <tbody class="nftmax-table__body">
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td class="">
                                                        <div class="nftmax-table__product-content">
                                                            <h4 class="nftmax-table__product-title">
                                                                {{ $category->name }}</h4>

                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="nftmax-table__amount nftmax-table__text-one">
                                                            {{ $category->description }}
                                                        </div>
                                                    </td>

                                                    <td class="  ">
                                                        <div style="background-color: {{ $category->slug_color }}; "
                                                            class="rounded-2xl inline-block px-2 text-black ">
                                                            {{ $category->slug }}
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class=" flex justify-evenly items-center  ">
                                                            <div class=" ">
                                                                <a class="border-none" href="{{ route('categories.edit', $category->id) }}"><i
                                                                        class="fa-solid fa-edit"></i></a>
                                                            </div>
                                                            <form
                                                                action="{{ route('categories.destroy', $category->id) }}"
                                                                method="Post">
                                                                <div class=" p-2 ">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="">
                                                                        <button type="submit" class="border-none"><i
                                                                                class="fa-solid fa-trash-can"></i></button>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                        
                                        <!-- End NFTMax Table Body -->
                                    </table>
                                    <!-- End NFTMax Table -->
                                </div>
                                <a href="{{ url('/articles') }}"><button
                                    class="nftmax__item-button--single nftmax__item-button--cancel mr-4"
                                    data-bs-toggle="modal" data-bs-target="#cancel_modal">Back to articles</button></a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
