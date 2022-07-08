<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" >
    <title>Larapel</title>
</head>
<body class=" antialiased text-gray-800 dark:text-gray-200">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
        <x-layout.navbar></x-layout.navbar>
        {{ $slot }}
        <x-layout.footer></x-layout.footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>