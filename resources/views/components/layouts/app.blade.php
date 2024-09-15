<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ config('app.name') ?? "Untitled"}}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-zinc-200 p-4 ">

<!-- main view, two areas 2 and 10 cols -->
<div
    class="bg-white shadow sm:rounded-lg px-4 py-5 sm:p-6 max-w-screen min-w-fit p-4 overflow-x-hidden min-h-screen grid md:grid-cols-12 gap-5 p-4">
    <!-- 2 col lefct sidebar nav -->
    <div class="md:col-span-2 h-fit">
        <livewire:components.navigation></livewire:components.navigation>
    </div>
    <!-- 10 col application view-->
    <div class="col-span-10 h-fit min-h-screen">
        {{$slot}}
    </div>
</div>

</body>
</html>
