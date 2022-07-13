<?php
session_start();

if (isset($_SESSION['login'])) {
    header('Location: ../login');
    exit();
}

?>

@extends('layouts.main')

@section('container')
    <div class="col-12 mt-3">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data Dosen</h3>

                <div class="card-tools">
                    <a href="/dosen/create" type="button" class="btn btn-success">Tambah + </a>
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
                            <th>Nama</th>
                            <th>NIP/NIDN</th>
                            <th>Jabatan</th>
                            <th>link_sinta id</th>
                            <th>Sinta Id</th>
                            <th>Scapul Id</th>
                            <th>link_scapul id</th>
                            <th>Google Schaler</th>
                            <th>Opsi</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($dosen as $dosen)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>
                                    <img src="{{ asset('images/dosen/' . $dosen->foto) }}" width="50px" alt="">
                                </td>
                                <td>{{ $dosen->nama }}</td>
                                <td>{{ $dosen->nidn }}</td>
                                <td>{{ $dosen->jabatan }}</td>
                                <td>{{ $dosen->linksinta }}</td>
                                <td>{{ $dosen->sintaid }}</td>
                                <td>{{ $dosen->scapulid }}</td> 
                                <td>{{ $dosen->link_scapul }}</td> 
                                <td>{{ $dosen->linkgschuler}}</td>
                                <td>
                                    <a href="/dosen/{{ $dosen->id }}/delete" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Yakin Dihapus? {{ $dosen->nama }}');">Hapus</a>
                                    {{-- <a href="/dosen/{{ $dosen->id }}/edit" class="btn btn-warning btn-sm">Edit</a> --}}
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
