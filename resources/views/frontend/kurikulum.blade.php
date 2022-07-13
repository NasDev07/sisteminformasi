@extends('../layouts/main')

<style>
    #font {
        font-family: 'Bebas Neue', cursive;
    }
</style>

@section('container')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8" id="res">
            <h2 id="font" class="d-flex justify-content-center">
                KURIKULUM KAMPUS MERDEKA, MERDEKA BELAJAR 2020                
            </h2>
            <h2 id="font" class="d-flex justify-content-center">
                PROGRAM STUDI SISTEM INFORMASI 2020
            </h2>
            <br>
            {{-- Semester 1 --}}
            <a href="/semester" class="btn btn-primary btn-sm rounded-pill my-4"><span>SEMESTER I</span></a>

            {{-- Semester 2 --}}
            <a href="/dua" class="btn btn-primary btn-sm rounded-pill my-4"><span>SEMESTER II</span></a>

            {{-- Semester 3 --}}
            <a href="/tiga" class="btn btn-primary btn-sm rounded-pill my-4"><span>SEMESTER III</span></a>

            {{-- Semester 4 --}}
            <a href="/empat" class="btn btn-primary btn-sm rounded-pill my-4"><span>SEMESTER IV</span></a>

            {{-- Semester 5 --}}
            <a href="/lima" class="btn btn-primary btn-sm rounded-pill my-4"><span>SEMESTER V</span></a>

            {{-- Semester 6 --}}
            <a href="/enam" class="btn btn-primary btn-sm rounded-pill my-4"><span>SEMESTER VI</span></a>

            {{-- Semester 7 --}}
            <a href="/tujuh" class="btn btn-primary btn-sm rounded-pill my-4"><span>SEMESTER VII</span></a>
            
            {{-- Semester 8 --}}
            <a href="/delapan" class="btn btn-primary btn-sm rounded-pill my-4"><span>SEMESTER VIII</span></a>
        </div>

        <div class="col-md-3 d-flex justify-content-end">
            <div class="">
                @include('frontend.saibarmenu')
            </div>
        </div>
    </div>
@endsection
