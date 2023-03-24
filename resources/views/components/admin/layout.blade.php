<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
    <link rel="shortcut icon" href="assets/images/favicon.png" />

</head>

<body>
    <x-admin.sidenavbar />
    <x-admin.topnavbar />

    <main>
        {{ $slot }}
    </main>

    <x-admin.footer />
    <script src="{{ asset('template/assets/js/dashboard.js') }}"></script>

</body>

</html>
