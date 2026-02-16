<!DOCTYPE html>
<html lang="en" class="bg-[#0d1117] text-green-400 font-mono">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Saya')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased selection:bg-green-500 selection:text-black">
    @include('components.page-comps.navbar')

    <main>
        @yield('content', '<h1>Ini adalah halaman Website Saya</h1>')
    </main>

    @include('components.page-comps.footer')
</body>

</html>
