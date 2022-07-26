<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Petona</title>
</head>

<body class=" antialiased text-gray-800 dark:text-gray-200">
    <div class="min-h-screen bg-white dark:bg-gray-900 pt-20">
        <x-layout.navbar></x-layout.navbar>
        {{ $slot }}
        {{-- <x-layout.footer></x-layout.footer> --}}
    </div>
</body>

</html>
