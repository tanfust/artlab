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
                                    <div
                                        class="relative flex flex-col text-gray-700 bg-white shadow-md w-96 rounded-xl bg-clip-border">
                                        <div
                                            class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg rounded-xl bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40">
                                            <img src="{{ $article->image }}" alt="img-blur-shadow" layout="fill" />
                                        </div>
                                        <div class="p-6">
                                            <h5
                                                class="block  font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                                {{ $article->title }}
                                            </h5>
                                            <span class="inline-block {{ $article->isPublished ? 'bg-teal-200' : 'bg-red-400' }}  text-black text-xs px-2 rounded-full uppercase font-semibold tracking-wide">{{ $article->isPublished ? 'Published' : 'Unpublished' }}</span>
                                            <p
                                                class="block font-sans text-xl antialiased font-light leading-relaxed text-inherit truncate">
                                                {{ $article->content }}
                                            </p>
                                        </div>
                                        <div class="p-6 pt-0">
                                            <p class="text-sm text-gray-600 flex items-center">
                                                Created at : {{ $article->created_at }}
                                            </p>
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
