<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Dashboard</title>
</head>

<body class="p-2 bg-slate-200 flex space-x-1">
    <x-dashboard.sidebar />
    <div class="bg-dash-secondary w-4/5 min-h-[600px] rounded-sm mx-auto">
        {{ $slot }}
    </div>
</body>

</html>
