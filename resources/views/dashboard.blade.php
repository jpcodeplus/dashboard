@php
    $user = 'JP';
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Dashboard</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-stone-700 min-h-screen flex flex-col">

    <header></header>

    <main class="flex flex-1 flex-col justify-center items-center">

        <livewire:clock wire:poll />

    </main>

    <footer></footer>

    <div class="w-full h-screen fixed top-0 left-0 -z-50 overflow-hidden ">
        <div class="bg-black/70 w-full h-full absolute"></div>
        <img class=" w-full h-full object-cover" src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000" alt="">
    </div>

</body>

</html>
