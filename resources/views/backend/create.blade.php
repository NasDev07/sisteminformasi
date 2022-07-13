
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
            <form action="{{ url('/mahasiswa/store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">                                       

                    <div class="form-group mt-2">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto" placeholder="masukkan foto wajib">
                    </div>

                    <div class="form-group mt-2">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" placeholder="judul wajib">
                    </div>                    

                    <div class="form-group mt-2">
                        <label for="paragrafdepan">paragrafdepan</label>
                        <input type="text" name="paragrafdepan" class="form-control" id="paragrafdepan" placeholder="masukan paragraf depan wajib">
                    </div>
                    
                    <div class="form-group mt-2">
                        <label for="tanggal">Tanggal berita</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="masukan tanggal">
                    </div>

                    <div class="mb-3 mt-2">
                        <label for="paragrafsatu">paragraf 1</label>
                        <textarea class="form-control" name="paragrafsatu" id="paragrafsatu" rows="3" placeholder="masukkan paragraf"></textarea>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="paragrafdua">paragraf 2</label>
                        <textarea class="form-control" name="paragrafdua" id="paragrafdua" rows="3" placeholder="masukkan paragraf"></textarea>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="paragraftiga">paragraf 3</label>
                        <textarea class="form-control" name="paragraftiga" id="paragraftiga" rows="3" placeholder="masukkan paragraf"></textarea>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="paragrafempat">paragraf 4</label>
                        <textarea class="form-control" name="paragrafempat" id="paragrafempat" rows="3" placeholder="masukkan paragraf"></textarea>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="paragraflima">paragraf 5</label>
                        <textarea class="form-control" name="paragraflima" id="paragraflima" rows="3" placeholder="masukkan paragraf"></textarea>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="paragrafenam">paragraf 6</label>
                        <textarea class="form-control" name="paragrafenam" id="paragrafenam" rows="3" placeholder="masukkan paragraf"></textarea>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="paragraftujuh">paragraf 7</label>
                        <textarea class="form-control" name="paragraftujuh" id="paragraftujuh" rows="3" placeholder="masukkan paragraf"></textarea>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="paragrafdelapan">paragraf 8</label>
                        <textarea class="form-control" name="paragrafdelapan" id="paragrafdelapan" rows="3" placeholder="masukkan paragraf"></textarea>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="paragrafdelapan">paragraf 9</label>
                        <textarea class="form-control" name="paragrafdelapan" id="paragrafdelapan" rows="3" placeholder="masukkan paragraf"></textarea>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="paragrafsepuluh">paragraf 10</label>
                        <textarea class="form-control" name="paragrafsepuluh" id="paragrafsepuluh" rows="3" placeholder="masukkan paragraf"></textarea>
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
