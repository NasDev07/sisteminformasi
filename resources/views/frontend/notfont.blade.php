<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- templet css --}}
    <link rel="stylesheet" href="{{ url('/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

  </head>
  <body>
    
    <div class="container">
        <section id="hero" class="hero d-flex align-items-center section-bg mt-5">
            <div class="container">
                <div class="row justify-content-between gy-5">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">404</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Halaman Dalam Perbaikan</p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="/" class="btn-book-a-table">Back to Home</a>
                    </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="/img/notfont/notfont.gif" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="{{ url('/js/main.js') }}"></script>
  </body>
</html>