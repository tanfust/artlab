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
    <body class="antialiased bg-background3">
        <div class="w-full border-b-2 border-border bg-accent p-2 flex items-center justify-center gap-4 overflow-auto tracking-[0.2em]">
            <h1 class="font-bold" >
                50% OFF FOR YOUR 2ND & 4TH TICKET
            </h1>

        </div>

        <nav class="bg-background3 flex border-b-2 border-border w-full">
            <div class="border-r-2 border-border nav-link w-full flex flex-col justify-between transition-all hover:bg-backgroundHover hover:underline  cursor-pointer">
                <h1 class="text-2xl p-5 font-bold">ArtLab</h1>
            </div>
            <div class="border-r-2 border-border nav-link w-full  flex flex-col justify-between hover:bg-text1 hover:text-background hover:underline transition-all cursor-pointer">
                <h1 class="text-2xl p-5 font-bold">Events</h1>
                <h1 class="text-2xl p-5 font-bold">3</h1>
            </div>
            <div class="border-r-2 border-border nav-link w-full  flex flex-col justify-between hover:bg-backgroundHover hover:underline transition-all cursor-pointer">
                <h1 class="text-2xl p-5 font-bold">Buy Ticket</h1>
            </div>
            <div class="nav-link w-full  flex flex-col justify-between hover:bg-backgroundHover hover:underline transition-all cursor-pointer">
                <h1 class="text-2xl p-5 font-bold">Our Mission<h1>
            </div>
        </nav>

        <div class="w-full border-b-[2px] border-border pt-28 pb-10 px-[12vw] relative">
            <h1 class="md:text-9xl lg:text-[284px] font-bold pb-10 tracking-tighter flex items-start gap-5">Tickets <img src="star.svg" /></h1>
            <h1 class="md:text-6xl lg:text-[87px] font-medium max-w-4xl tracking-tighter">SELECT EVENT AND BOOK A TICKET.</h1>
            <a class="absolute right-16 bottom-12 rounded-full border-2 border-border w-40 h-40 hover:scale-[1.1] transition-all cursor-pointer flex items-center justify-center rotate-90 hover:rotate-0">
                <img src="arrow.svg" class=""/>
            </a>
        </div>

        <main class="overflow-x-hidden">
            <div class="flex flex-col w-full justify-center items-center py-20 px-40 gap-20">
                <div class="flex">
                    <div class="flex flex-col w-[50%]">
                        <h1 class="text-base font-medium max-w-4xl tracking-tighter">EVENTS</h1>
                        <h1 class="text-base font-light max-w-4xl tracking-tighter">SELECT AND BOOK NOW</h1>
                    </div>
                    <h1 class="text-2xl font-bold w-[50%]">
                        QUESTIONS AND COMMENTS ARE IMPORTANT TO US, SO PLEASE USE THE FORM BELOW TO CONTACT OUR CREW. WE WILL REPLY WITHIN 12 HOURS.
                    </h1>
                </div>
                <form class="w-full flex flex-col gap-10">
                    <div class="flex gap-10 w-full">
                        <div class="flex flex-col gap-2 w-full">
                            <label class="font-bold" for="name">NAME <span class="pl-1 text-red">*</span></label>
                            <input type="text" id="name" name="name" class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover" placeholder="Name and surname" />
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <label class="font-bold" for="email">E-MAIL <span class="pl-1 text-red">*</span></label>
                            <input type="email" id="email" name="email" class="w-full py-3 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover" placeholder="Your e-mail" />
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <label class="font-bold" for="event">CHECK EVENT <span class="pl-1 text-red">*</span></label>
                            <select type="text" id="event" name="name" class="w-full py-[14.5px] placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover" placeholder="Please Select" >
                                <option value="">Please Select</option>
                                <option value="Museum">Museum</option>
                                <option value="Listed-Coming">Listed Coming</option>
                                <option value="Magazine">Magazine</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <label class="font-bold" for="message">MESSAGE <span class="pl-1 text-red">*</span></label>
                        <textarea class="py-5 placeholder:text-textPlaceholder px-6 text-lg border-2 border-border bg-backgroundInput hover:bg-backgroundHover w-full h-32" id="message" name="message" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="flex gap-2">
                        <input type="checkbox" id="privacy-policy" name="privacy-policy" />
                        <label class="font-medium text-lg tracking-tight" for="privacy-policy">CLICK HERE TO INDICATE THAT YOU HAVE READ AND AGREE TO THE TERMS PRESENTED IN THE PRIVACY POLICY AGREEMENT.</label>
                    </div>
                    <button class="tracking-[0.2em] font-medium text-lg w-fit self-center text-background3 bg-border py-4 px-20 hover:bg-buttonHover" type="submit">SEND MESSAGE</button>
                </form>
            </div>
            <div class="w-full h-[800px] ml-56 event-4"></div>

        </main>
        <footer class="p-20 pt-32">
            <div class="w-full flex gap-20 text-base font-bold items-center justify-center pb-10">
                <a class="tracking-[0.2em] cursor-pointer hover:border-b-2 hover:border-b-border border-b-2 border-border">HOME PAGE</a>
                <a class="tracking-[0.2em] cursor-pointer hover:border-b-2 hover:border-b-border">EVENTS</a>
                <a class="tracking-[0.2em] text-4xl px-20">ARTLAB</a>
                <a class="tracking-[0.2em] cursor-pointer hover:border-b-2 hover:border-b-border">BUY TICKET</a>
                <a class="tracking-[0.2em] cursor-pointer hover:border-b-2 hover:border-b-border">OUR MISSION</a>
            </div>
            <div class="border-t-2 border-b-2 border-border flex justify-center py-10">
                <h1 class="tracking-[0.2em]">COPYRIGHT © 2023 ARTLAB PLATFORM. ALL RIGHT RESERVED.</h1>
            </div>
        </footer>

    </body>
</html>
