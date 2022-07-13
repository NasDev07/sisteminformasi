@extends('../layouts.main')

@section('container')
{{-- berita utama --}}
<section id="chefs" class="chefs section-bg mt-2">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4 mt-3">
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
                            <a href="http://twitter.com/home/?status=" target="_black"><i class="bi bi-twitter"></i></a>
                            <a href="http://www.facebook.com/share.php?u=" target="_black"><i class="bi bi-facebook"></i></a>
                            <a href="http://www.instagram.com/share.php?u=" target="_black"><i class="bi bi-instagram"></i></a>
                            <a href="http://web.whatsapp.com/share.php?u=" target="_black"><i class="bi bi-whatsapp"></i></a>
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

    </div>
</section> <br><br><br><br>
{{-- ahkir berita --}}
@endsection
