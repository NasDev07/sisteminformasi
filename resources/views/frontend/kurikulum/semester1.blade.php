@extends('../layouts/main')

@section('container')
    <div class="row d-flex justify-content-center">
        <h2 id="font" class="d-flex justify-content-center">
            KURIKULUM KAMPUS MERDEKA, MERDEKA BELAJAR 2020
            PROGRAM STUDI SISTEM INFORMASI 2020
        </h2>
        <h2 id="font" class="d-flex justify-content-center">
        </h2>
        <br><br>
        <div class="col-md-8">
            {{-- Semester 1 --}}
            <a href="/semester" class="btn btn-primary btn-sm rounded-pill"><span>SEMESTER I</span></a>
            <div class="table-responsive">
                <table class="table table-hover mt-2">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">KODE MK</th>
                            <th scope="col">NAMA MATA KULIAH</th>
                            <th scope="col">SKS</th>
                            <th scope="col">PRASYARAT</th>
                            <th scope="col">RPS</th>
                        </tr>
                    </thead>

                    <tbody>
                        {{-- list 1 --}}
                        <tr>
                            <th>1</th>
                            <td>TSI0112</td>
                            <td>MANAJEMEN</td>
                            <td>2</td>
                            <td></td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">RPS</button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <iframe src="./rps/RPSPEMOGRAMANBASISDATA.pdf#toolbar=0" width="100%" height="425px">
                                            </iframe>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        {{-- list 2 --}}
                        <tr>
                            <th>2</th>
                            <td>TSI0213</td>
                            <td>MATEMATIKA INFORMATIKA </td>
                            <td>3</td>
                            <td></td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">RPS</button>

                                {{-- <a href="../semester1rps">RPS</a> --}}
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <iframe src="" width="100%" height="425px">
                                            </iframe>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        {{-- list 3 --}}
                        <tr>
                            <th>3</th>
                            <td>TSI0313</td>
                            <td>PENGANTAR BASIS DATA</td>
                            <td>3</td>
                            <td></td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">RPS</button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <iframe src="" width="100%" height="425px">
                                            </iframe>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        {{-- list 4 --}}
                        <tr>
                            <th>4</th>
                            <td>TSI0413</td>
                            <td>KONSEP SISTEM INFORMASI </td>
                            <td>3</td>
                            <td></td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">RPS</button>

                                {{-- <a href="../semester1rps">RPS</a> --}}
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <iframe src="" width="100%" height="425px">
                                            </iframe>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        {{-- list 5 --}}
                        <tr>
                            <th>5</th>
                            <td>TSI0513</td>
                            <td>ALGORITMA DAN PEMOGRAMAN</td>
                            <td>3</td>
                            <td></td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">RPS</button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <iframe src="" width="100%" height="425px">
                                            </iframe>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        {{-- list 6 --}}
                        <tr>
                            <th>6</th>
                            <td>MKU0112</td>
                            <td>PENDIDIKAN AGAMA</td>
                            <td>2</td>
                            <td></td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">RPS</button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <iframe src="" width="100%" height="425px">
                                            </iframe>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        {{-- list 7 --}}
                        <tr>
                            <th>7</th>
                            <td>MKU0212</td>
                            <td>PANCASILA </td>
                            <td>2</td>
                            <td></td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">RPS</button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <iframe src="" width="100%" height="425px">
                                            </iframe>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        {{-- list 8 --}}
                        <tr>
                            <th>8</th>
                            <td>MKU0312</td>
                            <td>KEWARGANEGARAAN </td>
                            <td>2</td>
                            <td></td>
                            <td>
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">RPS</button>
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <iframe src="" width="100%" height="425px">
                                            </iframe>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        {{-- list Total Sks --}}
                        <tr>
                            <th></th>
                            <td>TOTAL</td>
                            <td></td>
                            <td>20</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-3 d-flex justify-content-start mt-5">
            <div class="">
                <h3 class="fw-bold">Kategori</h3>
                <hr class="text-primary">
                <a href="/tentang">VISI & MISI</a>
                <hr>
                <a href="/notfont">Panduan Akademik</a>
                <hr>
                <a href="/akreditas">Akreditasi</a>
                <hr>
                <a href="/notfont">Penelitian</a>
                <hr>
                <a href="/notfont">Evaluasi Pengumuman Lulusan</a>
                <hr>
                <a href="/kurikulum">Struktur Kurikulum</a>
                <hr>
            </div>
        </div>
    </div>
@endsection
