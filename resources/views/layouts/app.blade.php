<!DOCTYPE html>
<html>
<head>
    <title>My Web</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.header') <!-- Header include ho raha hai -->

    <main>
        @yield('content') <!-- Page-specific content yahaan render hoga -->
    </main>
</body>
</html>
