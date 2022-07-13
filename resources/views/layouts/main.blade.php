<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="google-site-verification" content="3E7iuQXJeIeU4lMZq7P9YrahgON8RrM217M_CiQPI5A">
    {{-- Icon --}}
    <link href="/img/logo-unimal.png" rel="icon">
    <link href="/img/logo-unimal.png" rel="icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- bootstrap-icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Favicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=Bebas+Neue&family=Open+Sans:ital,wght@1,400;1,500&family=Roboto:ital,wght@0,400;1,300&family=Rubik:ital,wght@0,400;1,300&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    {{-- templet css --}}
    <link rel="stylesheet" href="{{ url('/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

    <title>Sistem Informasi | {{ $title }}</title>
</head>

<body data-bs-spy="scroll">

    <!-- ======= Header ======= -->
    @include('partials.navbar')

    <!-- ======= Hero Section ======= -->
    @include('partials.sub_navbar')

    <div class="container mt-4">
        @yield('container')
        @include('layouts.footer')
    </div>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <script src="https://github.com/pipwerks/PDFObject/blob/master/pdfobject.min.js"></script>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://laravel.build/example-app?with=mysql,redis"></script>
    <script src="https://laravel.build/example-app?with=mysql,redis&devcontainer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Vendor JS Files -->
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('/js/main.js') }}"></script>
</body>

</html>
