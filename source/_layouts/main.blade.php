<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="canonical" href="{{ $page->getUrl() }}"> --}}
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        {{-- <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script> --}}

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/assets/css/styles.css" rel="stylesheet" />

        <style>
            .reddit img {max-width: 100%;}
        </style>
    </head>

    <body>
        @include('_partials.nav')
        @include('_partials.header')

        <div class="container px-4 px-lg-5">
            <div class="reddit">
                @yield('content')
            </div>
            @yield('body')
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/assets/js/scripts.js"></script>
    </body>
</html>
