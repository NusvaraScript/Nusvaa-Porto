<!DOCTYPE html>
<html lang="en" class="bg-[#0d1117] font-mono">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Saya')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased selection:bg-green-500">
    @include('components.page-comps.navbar')
    <main class="flex flex-col md:flex-row gap-6">
        @if (Route::is('blog.*') || Route::is('projects'))
        @include('components.page-comps.sidebar')
        @endif

        <div class="flex-1 w-full">
            @include('components.page-comps.hero')
            @yield('content')
            @include('components.page-comps.cta')
        </div>
    </main>
    @include('components.page-comps.footer')
</body>

</html>
