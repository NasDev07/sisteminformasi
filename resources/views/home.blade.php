@extends('layouts.main')

@section('container')

    {{-- Carosel --}}
    @include('frontend.corosel')
    {{-- ahkir Carosel --}}

    {{-- berita utama --}}
    <section id="chefs" class="chefs section-bg mt-5">
        <div  id="book-a-table" class="container" data-aos="fade-up">

            <div class="section-header mt-4" data-aos="fade-up" data-aos-delay="65">
                <h2 class="text-primary fw-bolder">Informasi Utama</h2>
            </div>

            <div class="row gy-4 mt-2">
                @php
                    $no = 1;
                @endphp
                @foreach ($mahasiswa as $mahasiswa)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="65">
                    <div class="chef-member">
                        <div class="member-img">
                            <img src="{{ asset('images/' . $mahasiswa->foto) }}"
                                class="img-fluid" alt="">
                            <div class="social">
                                <a href="" class="bg-dark fw-bold">
                                    <p class="text-dark">Berita</p>
                                </a>
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <a class="h4" href="/detailberita/{{ $mahasiswa->id }}">{{ $mahasiswa->judul }}</a>
                            <span class="mt-2">{{ $mahasiswa->tanggal }}</span>
                            <p>{{ $mahasiswa->paragrafdepan }}</p>
                        </div>
                        <p class="text-transparent" style="font-size: 1px">{{ $no++ }}</p>
                    </div>
                </div><!-- End Chefs Member -->
                @endforeach

            </div>

            <div class="d-flex justify-content-center" style="align-items: center">
                <a href="/berita" type="button" class="btn btn-primary my-5 rounded-pill">Berita Selengkapnya<i class="bi bi-arrow-right"></i></a>
            </div>

        </div>
    </section> <br><br><br><br>
    {{-- ahkir berita --}}

    {{-- footer --}}

    {{-- ahkir footer --}}
@endsection
