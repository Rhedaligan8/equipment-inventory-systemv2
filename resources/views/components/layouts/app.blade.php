<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/pnri-logo.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>ICT EQUIPMENT INVENTORY</title>
    @livewireStyles
</head>

<body class="flex flex-col h-screen antialiased bg-zinc-100 text-zinc-900">
    <x-bladewind::notification />
    @if (isset($header))
        {{$header}}
    @endif

    <main class="flex-grow overflow-hidden">
        {{$slot}}
    </main>
    @livewireScripts
</body>

<script>
    window.addEventListener('showNotification', function (event) {
        showNotification(event.detail.title,
            event.detail.message,
            event.detail.type,
            2,
            'regular',
            'same_one');
    });
</script>

</html>