@include('back-office/Layout.Header')

<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="w-full nftmax-main__column">
                <div class="nftmax-body min-h-screen w-full">
                    <div class="nftmax-dsinner w-full">

                        <!-- Welcome CTA -->
                        <div class="welcome-cta mg-top-40">
                            <div class="welcome-cta__heading">
                                <h2 class="welcome-cta__title text-6xl">Your published articles
                                </h2>
                                <p class="welcome-cta__text">Write to express not to impress</p>
                                {{-- <h1 class="text-4xl font-black">Client Orders</h1> --}}
                            </div>
                            <div class="welcome-cta__button">
                                <a href="{{ url('/articles/create') }}"
                                    class="nftmax-btn nftmax-btn__bordered bg radius">Write article </a>
                                <a href="{{ url('/dashboard') }}" class="nftmax-btn trs-white bl-color">My ArtWork</a>
                            </div>
                        </div>
                        <!-- End Welcome CTA -->

                        <!-- Marketplace Bar -->
                        <div class="nftmax-marketplace__bar mg-top-50 mg-btm-40">

                            <div class="w-full grid grid-cols-2 gap-5 py-10  overflow-auto">
                                @foreach ($articles as $article)
                                    <div class="max-w-sm w-full lg:max-w-full lg:flex">
                                        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center "
                                            style="background-image: url('./event-5.jpeg')" title="Woman holding a mug">
                                        </div>
                                        <div
                                            class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                            <div class="mb-8">
                                                <div class="text-gray-900 font-bold text-xl mb-2">
                                                    {{ $article->articleTitle }}</div>
                                                <p class="text-gray-700 text-base">{{ $article->articleContent }}</p>
                                            </div>
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="Post">
                                                <div class="float-right p-2">
                                                    <a class="btn btn-primary text-xs"
                                                        href="{{ route('articles.edit', $article->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="bg-red-500 btn btn-danger text-xs "
                                                        type="submit">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('back-office/Layout.RightSidebar')
        @include('back-office/Layout.Footer')
