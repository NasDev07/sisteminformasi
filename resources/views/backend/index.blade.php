<?php
// session_start();

// if (isset($_SESSION['login'])) {
//     header('Location: ../login');
//     exit();
// }

?>


@extends('admin.dashboard')

@section('content')
    <div class="col-12 my-5">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data Berita</h3>

                <div class="card-tools">
                    <a href="/mahasiswa/create" type="button" class="btn btn-success">Tambah + </a>
                    {{-- <form action="/mahasiswa/search" class="form-inline" method="GET">
                        <input type="search" name="search" class="form-control float-right"
                            placeholder="isi nama pencarian">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form> --}}
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>foto</th>
                            <th>judul</th>
                            <th>paragraf depan</th>
                            <th>tanggal</th>
                            <th>paragraf 1</th>
                            <th>paragraf 2</th>
                            <th>paragraf 3</th>
                            <th>paragraf 4</th>
                            <th>paragraf 5</th>
                            <th>paragraf 6</th>
                            <th>paragraf 7</th>
                            <th>paragraf 8</th>
                            <th>paragraf 9</th>
                            <th>paragraf 10</th>
                            <th>Opsi</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($mahasiswa as $mahasiswa)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>
                                    <img src="{{ asset('images/' . $mahasiswa->foto) }}" width="50px" alt="">
                                </td>
                                <td>{{ $mahasiswa->judul }}</td>
                                <td>{{ $mahasiswa->paragrafdepan }}</td>
                                <td>{{ $mahasiswa->tanggal }}</td>
                                <td>{{ $mahasiswa->paragrafsatu }}</td>
                                <td>{{ $mahasiswa->paragrafdua }}</td> 
                                <td>{{ $mahasiswa->paragraftiga }}</td>
                                <td>{{ $mahasiswa->paragrafempat }}</td>
                                <td>{{ $mahasiswa->paragraflima }}</td>
                                <td>{{ $mahasiswa->paragrafenam }}</td>
                                <td>{{ $mahasiswa->paragraftujuh }}</td>
                                <td>{{ $mahasiswa->paragrafdelapan }}</td>
                                <td>{{ $mahasiswa->paragrafsembilan }}</td>
                                <td>{{ $mahasiswa->paragrafsepuluh }}</td>                                
                                <!-- ->diffForHumans() (ini unutk 01 minute ago , format) -->
                                <td>
                                    <a href="/mahasiswa/{{ $mahasiswa->id }}/delete" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Yakin Dihapus? {{ $mahasiswa->nama }}');">Hapus</a>
                                    {{-- <a href="/mahasiswa/{{ $mahasiswa->id }}/edit" class="btn btn-warning btn-sm">Edit</a> --}}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
