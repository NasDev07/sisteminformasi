@extends('../layouts/main')

@section('container')
    <section id="chefs" class="chefs section-bg mt-5">
        <div id="book-a-table" class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="text-primary fw-bolder">DAFTAR DOSEN</h2>
                <p class="fst-italic">Daftar Dosen <span class="text-primary">Prodi Sistem Informasi</span></p>
            </div>
            <div class="row text-center">
                <!-- Team item -->
                @php
                    $no = 1;
                @endphp
                @foreach ($dosen as $dosen)
                    <div class="col-xl-3 col-sm-6 mb-5 mt-2" data-aos="fade-up">
                        <div class="bg-white shadow p-3 mb-5 bg-body rounded"><img
                                src="{{ asset('images/dosen/' . $dosen->foto) }}" alt="" width="130"
                                class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0 text-start">
                                {{ $dosen->nama }}
                            </h5>
                            <p class="text-transparent" style="font-size: 1px">{{ $no++ }}</p>
                            <h5 class="fs-6 fw-lighter text-start">
                                <span class="fst-italic">NIP / NIDN</span>
                                <span class="text-primary fw-bold">:</span>
                                <br>
                                {{ $dosen->nidn }}
                            </h5>
                            <h5 class="fs-6 fw-lighter text-start">
                                <span class="fst-italic">Jabatan</span>
                                <span class="text-primary fw-bold">
                                    :
                                </span>
                                {{ $dosen->jabatan }}
                            </h5>
                            <h5 class="fs-6 fw-lighter text-start">
                                <span class="fst-italic">Sinta Id</span>
                                <span class="text-primary fw-bold">:
                                </span>
                                <a class="text-decoration-underline" href="{{ $dosen->linksinta }}" target="_black">
                                    {{ $dosen->sintaid }}
                                    <i class="bi bi-arrow-up-right-circle"></i>
                                </a>
                                </a>
                            </h5>
                            <h5 class="fs-6 fw-lighter text-start">
                                <span class="fst-italic">Scopus Id</span>
                                <span class="text-primary fw-bold">:
                                </span>
                                <a class="text-decoration-underline" href="{{ $dosen->link_scapul }}" target="_black">
                                    {{ $dosen->scapulid }}
                                    <i class="bi bi-arrow-up-right-circle"></i>
                                </a>
                                </a>
                            </h5>
                            <h5 class="fs-6 fw-lighter text-start">
                                <a class="text-decoration-underline" href="{{ $dosen->linkgschuler }}" target="_black">
                                    <span class="fst-italic">Google Scholar</span>
                                    <i class="bi bi-arrow-up-right-circle"></i>
                                </a>
                            </h5>
                        </div>
                    </div>
                @endforeach
            </div><!-- End -->
            <!-- Team item -->
    </section>
    <br><br><br>
@endsection
