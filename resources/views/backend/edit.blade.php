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
                <h3 class="card-title">Edit berita</h3>
            </div>
            <form action="/mahasiswa/{{ $mahasiswa->id }}/update" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <br>
                        <input type="file" name="foto" class="form-control" id="foto" placeholder="masukkan foto" value="{{ $mahasiswa->foto }}">
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" placeholder="judul" value="{{ $mahasiswa->judul }}">
                    </div>                    

                    <div class="form-group">
                        <label for="paragrafdepan">paragraf depan</label>
                        <input type="text" name="paragrafdepan" class="form-control" id="paragrafdepan" placeholder="masukan paragrafdepan" value="{{ $mahasiswa->paragrafdepan }}">
                    </div>

                    <div class="form-group">
                        <label for="tanggal">tanggal berita</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="masukan tanggal" value="{{ $mahasiswa->tanggal }}">
                    </div>

                    <div class="form-group">
                        <label for="paragrafsatu">paragraf 1</label>
                        <input type="text" name="paragrafsatu" class="form-control" id="paragrafsatu" placeholder="masukan descripsi" value="{{ $mahasiswa->paragrafsatu }}">
                    </div>
                    <div class="form-group">
                        <label for="paragrafdua">paragraf 2</label>
                        <input type="text" name="paragrafdua" class="form-control" id="paragrafdua" placeholder="masukan descripsi" value="{{ $mahasiswa->paragrafdua }}">
                    </div>
                    <div class="form-group">
                        <label for="paragraftiga">paragraf 3</label>
                        <input type="text" name="paragraftiga" class="form-control" id="paragraftiga" placeholder="masukan descripsi" value="{{ $mahasiswa->paragraftiga }}">
                    </div>
                    <div class="form-group">
                        <label for="paragrafempat">paragraf 4</label>
                        <input type="text" name="paragrafempat" class="form-control" id="paragrafempat" placeholder="masukan descripsi" value="{{ $mahasiswa->paragrafempat }}">
                    </div>
                    <div class="form-group">
                        <label for="paragraflima">paragraf 5</label>
                        <input type="text" name="paragraflima" class="form-control" id="paragraflima" placeholder="masukan descripsi" value="{{ $mahasiswa->paragraflima }}">
                    </div>
                    <div class="form-group">
                        <label for="paragrafenam">paragraf 6</label>
                        <input type="text" name="paragrafenam" class="form-control" id="paragrafenam" placeholder="masukan descripsi" value="{{ $mahasiswa->paragrafenam }}">
                    </div>
                    <div class="form-group">
                        <label for="paragraftujuh">paragraf 7</label>
                        <input type="text" name="paragraftujuh" class="form-control" id="paragraftujuh" placeholder="masukan descripsi" value="{{ $mahasiswa->paragraftujuh }}">
                    </div>
                    <div class="form-group">
                        <label for="paragrafdelapan">paragraf 8</label>
                        <input type="text" name="paragrafdelapan" class="form-control" id="paragrafdelapan" placeholder="masukan descripsi" value="{{ $mahasiswa->paragrafdelapan }}">
                    </div>
                    <div class="form-group">
                        <label for="paragrafsembilan">paragraf 9</label>
                        <input type="text" name="paragrafsembilan" class="form-control" id="paragrafsembilan" placeholder="masukan descripsi" value="{{ $mahasiswa->paragrafsembilan }}">
                    </div>
                    <div class="form-group">
                        <label for="paragrafsepuluh">paragraf 10</label>
                        <input type="text" name="paragrafsepuluh" class="form-control" id="paragrafsepuluh" placeholder="masukan descripsi" value="{{ $mahasiswa->paragrafsepuluh }}">
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
