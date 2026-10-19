<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'contact')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<style>
    body, main {
        background-color: #c4c4a8 !important;
    }

    main {
        flex: 1;
    }

    .card, .bg-white {
        background-color: #fff !important;
    }

    .navbar {
        background-color: #0f0f0f !important;
    }

    .navbar a {
        color: #fff !important;
    }
</style>
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>
