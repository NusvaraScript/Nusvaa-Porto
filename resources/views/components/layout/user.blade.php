<!DOCTYPE html>
<html lang="en" class="bg-[#0d1117] text-green-400 font-mono">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Guest@Root:~' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased selection:bg-green-500 selection:text-black">

    <div class="min-h-screen flex flex-col max-w-5xl mx-auto p-4 md:p-8">
        <x-page-comps.navbar />

        <main
            class="flex-grow border-x border-b border-gray-700 bg-[#161b22] shadow-2xl rounded-b-lg p-6 overflow-hidden">
            {{ $slot }}
        </main>

        <x-page-comps.footer />
    </div>

</body>

</html>
