<?php
session_start();

if (isset($_SESSION['login'])) {
    header('Location: ../login');
    exit();
}

?>

@extends('layouts.main')

@section('container')
    <div class="content">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Tambah Berita</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('/dosen/store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">                                       

                    <div class="form-group mt-2">
                        <label for="foto">Foto</label><h5>Foto wajid ada</h5>
                        <input type="file" name="foto" class="form-control" id="foto" placeholder="masukkan foto wajib">
                        <h6>Jika Tidak Ada Foto Download foto Avatar
                            <a href="https://www.theparentingplace.net/wp-content/uploads/2021/02/BlankImage.jpg" target="_black">klik si dini</a>
                        </h6>
                    </div>

                    <div class="form-group mt-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
                    </div>                    

                    <div class="form-group mt-2">
                        <label for="nidn">NIP / NIDN</label>
                        <input type="text" name="nidn" class="form-control" id="nidn" placeholder="masukan Nip/ nidn">
                    </div>
                    
                    <div class="form-group mt-2">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="masukan jabatan">
                    </div>

                    <div class="mb-3 mt-2">
                        <label for="linksinta">Link Sinta</label>
                        <input class="form-control" name="linksinta" id="linksinta" rows="3" placeholder="masukkan link sinta"></input>
                    </div>

                    <div class="mb-3 mt-2">
                        <label for="sintaid">Masuk Nomor Sinta Id</label>
                        <input class="form-control" name="sintaid" id="sintaid" rows="3" placeholder="masukkan sinta Id"></input>
                    </div>

                    <div class="mb-3 mt-2">
                        <label for="scapulid">Masuk Nomor Scapul Id</label>
                        <input class="form-control" name="scapulid" id="scapulid" rows="3" placeholder="masukkan scapul Id"></input>
                    </div>

                    <div class="mb-3 mt-2">
                        <label for="link_scapul">Link Scapul</label>
                        <input class="form-control" name="link_scapul" id="link_scapul" rows="3" placeholder="masukkan link scapul"></input>
                    </div>

                    <div class="mb-3 mt-2">
                        <label for="linkgschuler">Masuk Link Google Scholer</label>
                        <input class="form-control" name="linkgschuler" id="linkgschuler" rows="3" placeholder="masukkan Link googles Scholer"></input>
                    </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection
