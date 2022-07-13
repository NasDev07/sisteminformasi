@extends('../layouts/main')

@section('container')
    <div class="row">
        <div class="col-md-9 post-content" data-aos="fade-up" action="/detailberita/{{ $mahasiswa->id }}/update">

            <!-- ======= Single Post Content ======= -->


            <div class="single-post">
                <h1 class="" name="judul">{{ $mahasiswa->judul }}</h1>
                <div class="post-meta mt-3"><span name="">{{ $mahasiswa->tanggal }}</span></div>
                <figure class="my-4">
                    <img name="foto" src="{{ asset('images/' . $mahasiswa->foto) }}" alt=""
                        class="img-fluid rounded" value="{{ $mahasiswa->foto }}">
                </figure>
                <p name="paragrafsatu"><a href="https://news.unimal.ac.id/" target="_black" class="text-primary fw-bolder">UNIMALNEWS |</a>{{ $mahasiswa->paragrafsatu }}</p>
                <p name="paragrafdua">{{ $mahasiswa->paragrafdua }}</p>
                <p mame="paragraftiga">{{ $mahasiswa->paragraftiga }}</p>
                <p name="paragrafempat">{{ $mahasiswa->paragrafempat }}</p>
                <p neme="paragraflima">{{ $mahasiswa->paragraflima }}</p>
                <p neme="paragrafenam">{{ $mahasiswa->paragrafenam }}</p>
                <p neme="paragraftujuh">{{ $mahasiswa->paragraftujuh }}</p>
                <p neme="paragrafdelapan">{{ $mahasiswa->paragrafdelapan }}</p>
                <p neme="paragrafsembilan">{{ $mahasiswa->paragrafsembilan }}</p>
                <p neme="paragrafsepuluh">{{ $mahasiswa->paragrafsepuluh }}</p>
            </div><!-- End Single Post Content -->


        </div>

        <div class="col-md-3" data-aos="fade-left">
            {{-- @include('frontend.saibarmenu') --}}
            <div class="aside-block">
                <button type="button" class="btn btn-primary btn-lg btn-radius my-3">Populer</button>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Popular -->
                    <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                        aria-labelledby="pills-popular-tab">
                        <div class="post-entry-1 border-bottom">
                            <img src="{{ asset('images/' . $mahasiswa->foto) }}" alt=""
                                class="img-fluid rounded">
                            <div class="post-meta fw-light"><span class="date"><i>Sport</i></span> <span
                                    class="mx-1">&bullet;</span>
                                <span><i>{{ $mahasiswa->tanggal }}</i></span>
                            </div>
                            <h5 class="mb-2"><a href="/detailberita/{{ $mahasiswa->id }}">{{ $mahasiswa->judul }}</a></h5>                            
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
