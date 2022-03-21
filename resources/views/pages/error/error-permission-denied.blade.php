
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @isset($meta)
            {{ $meta }}
        @endisset

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@400;600;700&family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/notyf/notyf.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">
        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all">
        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">

        <livewire:styles />

        <!-- Scripts -->
        <script defer src="{{ asset('vendor/alpine.js') }}"></script>
    </head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="page-error">
                    <div class="page-inner">
                        <h1>403</h1>
                        <div class="page-description">
                            Error!. Access forbidden.
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('stisla/js/modules/jquery.min.js') }}"></script>
    <script defer async src="{{ asset('stisla/js/modules/popper.js') }}"></script>
    <script defer async src="{{ asset('stisla/js/modules/tooltip.js') }}"></script>
    <script src="{{ asset('stisla/js/modules/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('stisla/js/modules/jquery.nicescroll.min.js') }}"></script>
    <script defer src="{{ asset('stisla/js/modules/moment.min.js') }}"></script>
    <script defer src="{{ asset('stisla/js/modules/marked.min.js') }}"></script>
    <script defer src="{{ asset('vendor/notyf/notyf.min.js') }}"></script>
    <script defer src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script defer src="{{ asset('stisla/js/modules/chart.min.js') }}"></script>
    <script defer src="{{ asset('vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('stisla/js/stisla.js') }}"></script>
    <script src="{{ asset('stisla/js/scripts.js') }}"></script>

    <livewire:scripts />
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
