<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Icons -->
        <link href="/path/to/material-icons/iconfont/material-icons.css" rel="stylesheet">

        <!-- CSS/Tailwind -->
        @vite('resources/css/app.css')

    </head>
    <body class="antialiased bg-background2">

        <nav class="bg-background2 flex border-b-2 border-border w-full">
            <div class="border-r-2 border-border nav-link w-full flex flex-col justify-between transition-all hover:bg-backgroundHover hover:underline  cursor-pointer">
                <a href="{{url('/')}}"><h1 class="text-xl p-5 font-bold">ArtLab</h1></a>
            </div>
            <div class="border-r-2 border-border nav-link w-full  flex flex-col justify-between hover:bg-text1 hover:text-background hover:underline transition-all cursor-pointer">
                <a href="{{url('/events')}}">
                    <h1 class="text-xl p-5 font-bold">Upcoming Events</h1>
                    <h1 class="text-xl p-5 font-bold">3</h1>
                </a>
            </div>
            <div class="border-r-2 border-border nav-link w-full  flex flex-col justify-between hover:bg-text1 hover:text-background hover:underline transition-all cursor-pointer">
                <a href="{{url('/auctions')}}">
                    <h1 class="text-xl p-5 font-bold">Live Auctions</h1>
                    <h1 class="text-xl p-5 font-bold">5</h1>
                </a>
            </div>
            <div class="border-r-2 border-border nav-link w-full  flex flex-col justify-between hover:bg-backgroundHover hover:underline transition-all cursor-pointer">
                <a href="{{url('/blog')}}"><h1 class="text-xl p-5 font-bold">ArtBlog</h1></a>
            </div>
            <div class="border-r-2 border-border nav-link w-full  flex flex-col justify-between hover:bg-backgroundHover  transition-all cursor-pointer">
                <a href="{{url('/creator')}}">
                    <h1 class="text-xl p-5 font-bold">Creator</h1>
                    <h1 class="text-lg p-5 font-regular">Sign-in</h1>
                </a>
            </div>
        </nav>

        <div class="w-full border-b-[2px] border-border pt-28 pb-10 px-[12vw] relative">
            <h1 class="md:text-9xl lg:text-[284px] font-bold pb-10 tracking-tighter flex items-start gap-5">Events <img src="star.svg" /></h1>
            <h1 class="md:text-6xl lg:text-[87px] font-medium max-w-4xl tracking-tighter">DESIGN BUILDS POSITIVE EMOTIONS.</h1>
            <a href="#main" class="absolute right-16 bottom-12 rounded-full border-2 border-border w-40 h-40 hover:scale-[1.1] transition-all cursor-pointer flex items-center justify-center rotate-90 hover:rotate-0">
                <img src="arrow.svg" class=""/>
            </a>
        </div>

        <main id="main">
            <div class="gradient-hover w-full border-t-2 border-text3 flex flex-col py-20 px-6 hover:underline cursor-pointer">
                <div class="w-full flex items-end">
                    <h1 class="w-[50%] text-text3 font-semibold">
                        UPCOMING EVENT
                    </h1>
                    <div class="w-[50%] flex justify-between">
                        <h1 class="text-7xl font-bold text-text3">Museum</h1>
                        <div class="flex flex-col text-text3">
                            <h1 class="text-base font-medium max-w-4xl tracking-tighter">SCULPTURE
                            </h1>
                            <h1 class="text-base font-light max-w-4xl tracking-tighter">OPENING NEW COLLECT
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center">
                    <div class="w-[50%] flex flex-col gap-10 p-32 text-right items-end">
                       <h1 class="text-4xl font-medium max-w-4xl tracking-tighter">We are inspired by artistic art rich in the tradition of multiculturalism. The new week opens a new exhibition to which we pleasantly invite you — Please check and view more gallery with detailed descriptions in events subpage.</h1>
                       <h1 class="text-lg font-semibold max-w-xl tracking-tighter leading-tight">CHECK AND DISCOVERY ABOUT GOING ON IN THE ARTISTIC AND MUSEUM WORLD. BROWSE THROUGH THE ART EVENTS AND STAY UP TO DATE WITH WHAT HAPPENING.</h1>
                       <div class="w-full border-2 border-border p-5 flex items-center justify-center"><img src="arrow.svg" class="w-16"/></div>
                   </div>
                   <div class="event-2 w-[50%] h-[600px]"
                   ></div>
               </div>
            </div>
        </main>

        <div class="px-10">
            <a href="{{url('/tickets')}}">
                <div class="bg-border flex items-center justify-center p-40 cursor-pointer">
                    <h1 class="text-9xl tracking-[0.2em] text-background font-bold hover:border-b-4 hover:border-b-[gray-800]">BUY TICKET</h1>
                </div>
            </a>
        </div>

        <footer class="p-20">
            <div class="w-full flex gap-20 text-base font-bold items-center justify-center pb-10">
                <a href="{{url('/events')}}" class="tracking-[0.2em] cursor-pointer hover:border-b-2 hover:border-b-border">EVENTS</a>
                <a href="{{url('/auctions')}}" class="tracking-[0.2em] cursor-pointer hover:border-b-2 hover:border-b-border">AUCTIONS</a>
                <a href="{{url('/')}}" class="tracking-[0.2em] text-4xl px-20">ARTLAB</a>
                <a href="{{url('/blog')}}" class="tracking-[0.2em] cursor-pointer hover:border-b-2 hover:border-b-border">BLOG</a>
                <a href="{{url('/mission')}}" class="tracking-[0.2em] cursor-pointer hover:border-b-2 hover:border-b-border">OUR MISSION</a>
            </div>
            <div class="border-t-2 border-b-2 border-border flex justify-center py-10">
                <h1 class="tracking-[0.2em]">COPYRIGHT © 2023 ARTLAB PLATFORM. ALL RIGHT RESERVED.</h1>
            </div>
        </footer>
    </body>
</html>
