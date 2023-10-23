<x-guest-layout>
    <div class="w-full border-b-[2px] border-border pt-28 pb-10 px-[12vw] relative">
        <h1 class="md:text-9xl lg:text-[284px] font-bold pb-10 tracking-tighter flex items-start gap-5">Blog <img
                src="star.svg" /></h1>
        <h1 class="md:text-6xl lg:text-[87px] font-medium max-w-4xl tracking-tighter">WE CREATE VALUE FOR ART SEEKERS.
        </h1>
        <a href="#main"
            class="absolute right-16 bottom-12 rounded-full border-2 border-border w-40 h-40 hover:scale-[1.1] transition-all cursor-pointer flex items-center justify-center rotate-90 hover:rotate-0">
            <img src="arrow.svg" class="" />
        </a>
    </div>
    <main id="main">

        <form action="{{ route('blog') }}" method="GET" class="mb-4">
            <div class="flex items-center justify-center m-8 gap-16">
                <div class="flex flex-col gap-2 ">
                    <input type="text" id="name" name="query" value="{{ request()->input('query') }}"
                        class="w-full py-3 placeholder:text-text3 px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover"
                        placeholder="Search article by title..." />
                </div>
                <button
                    class=" font-medium text-lg w-fit self-center text-background3 bg-border py-4 px-20 hover:bg-text3"
                    type="submit">Search article</button>
            </div>
        </form>


        @foreach ($articles as $article)
            <div
                class="gradient-hover w-full border-t-2 border-text3 flex flex-col py-20 px-6 hover:underline cursor-pointer sm:flex-col">
                <div class="w-full flex items-center">
                    <h1 class="w-[50%] text-text3 font-semibold">

                        <div class="flex flex-col text-text3">
                            <h1 class="text-xl font-medium max-w-4xl tracking-tighter">Author :
                                {{ $article->user->name }}
                            </h1>
                            <h1 class="text-base font-light max-w-4xl tracking-tighter">
                                @foreach ($article->categories as $category)
                                    {{ $category->name }}
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </h1>
                        </div>
                    </h1>
                    <div class="w-[50%] flex justify-between">
                        <h1 class="text-7xl font-bold text-text3 pb-4">{{ $article->title }}</h1>
                        <div class="flex flex-col text-text3">
                            <h1 class="text-base font-medium max-w-4xl tracking-tighter">Published at :
                            </h1>
                            <h1 class="text-base font-light max-w-4xl tracking-tighter">{{ $article->created_at }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center pt-4">
                    <div class="w-[50%] flex flex-col gap-10 p-32 text-right items-end">
                        <h1 class="text-xl font-medium max-w-4xl tracking-tighter">{{ $article->content }}
                        </h1>
                        <h1 class="text-lg font-semibold max-w-xl tracking-tighter leading-tight">CHECK AND DISCOVERY
                            ABOUT
                            GOING ON IN THE ARTISTIC AND MUSEUM WORLD. BROWSE THROUGH THE ART EVENTS AND STAY UP TO DATE
                            WITH WHAT HAPPENING.</h1>
                        <div class="w-full border-2 border-border p-5 flex items-center justify-center"><a
                                href="/"><img src="arrow.svg" class="w-16" /></a></div>
                    </div>
                    <div class="">
                        <img src='{{ $article->image ? $article->image : "assets/img/notFoundImg.png" }}' 
                             alt="" 
                             srcset="" 
                             class="w-[100%] h-[500px]">
                    </div>
                    
                </div>
            </div>
        @endforeach
        <div class="">
            <!-- Use default Laravel pagination style -->
        </div>
        <div
            class=" mt-8  gradient-hover w-full border-t-2 border-text3 flex justify-center py-14 px-6 hover:underline cursor-pointer">
            {{ $articles->links('vendor.pagination.tailwind') }}
        </div>

    </main>
    <div class="px-10">
        <a href="{{ url('/tickets') }}">
            <div class="bg-border flex items-center justify-center p-40 cursor-pointer">
                <h1
                    class="text-9xl tracking-[0.2em] text-background font-bold hover:border-b-4 hover:border-b-[gray-800]">
                    BUY TICKET</h1>
            </div>
        </a>
    </div>




</x-guest-layout>
