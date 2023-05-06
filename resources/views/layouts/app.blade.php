<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('theme/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/materialdesignicons.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="navbar-fixed sidebar-fixed font-sans antialiased" id="body">
    <div class=" wrapper min-h-screen bg-gray-100">
        @include('layouts.sidebar')

        @include('layouts.navigation')
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
    <script src="{{ asset('theme/plugins/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('theme/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('theme/js/mono.js') }}"></script>
    <script src="{{ asset('theme/js/chart.js') }}"></script>
    <script src="{{ asset('theme/js/map.js') }}"></script>
    <script src="{{ asset('theme/js/custom.js') }}"></script>
</body>

</html>
