<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        @include('../components/navbar.blade.php')
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('../components/footer.blade.php')
    </footer>
</body>

</html>
