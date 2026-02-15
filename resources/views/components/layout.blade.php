<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'GegeRent' }}</title>
</head>

<body>
    @include('partials.navbar')
    <main class="container py-4">
        {{ $slot }}
    </main>
</body>

</html>
