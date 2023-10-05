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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="/path/to/material-icons/iconfont/material-icons.css" rel="stylesheet">

    <!-- CSS/Tailwind -->
    @vite('resources/css/app.css')

</head>

<body class="antialiased bg-background">
    <div
        class="w-full border-b-2 border-border bg-accent p-2 flex items-center justify-center gap-4 overflow-auto tracking-[0.2em]">
        <h1 class="font-bold">
            50% OFF FOR YOUR 2ND & 4TH TICKET
        </h1>
    </div>
    <nav class="bg-background flex border-b-2 border-border w-full">
        <div
            class="border-r-2 border-border nav-link w-full flex flex-col justify-between transition-all hover:bg-backgroundHover hover:underline  cursor-pointer">
            <a class="text-2xl p-5 font-bold" href="{{ url('/') }}">ArtLab</a>
        </div>
        <div
            class="border-r-2 border-border nav-link w-full  flex flex-col justify-between hover:bg-text1 hover:text-background hover:underline transition-all cursor-pointer">
            <a class="text-2xl p-5 font-bold" href="{{ url('/events') }}">Events</a>
            <h1 class="text-2xl p-5 font-bold">3</h1>
        </div>
        <div
            class="border-r-2 border-border nav-link w-full  flex flex-col justify-between hover:bg-backgroundHover hover:underline transition-all cursor-pointer">
            <a class="text-2xl p-5 font-bold" href="{{ url('/tickets') }}">Buy Ticket</a>
        </div>
        <div
            class="nav-link w-full  flex flex-col justify-between hover:bg-backgroundHover hover:underline transition-all cursor-pointer">
            <a class="text-2xl p-5 font-bold" href="{{ url('/missions') }}">Our Mission<h1>
        </div>
    </nav>
