<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use App\Models\Semesterdua;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index() {
        $semester = Semester::all();
        return view('frontend.kurikulum.semester1', 
        compact('semester'),
        [
            'title' => 'Kurikulum'
        ]);
    }

    public function dua () {
        $dua = Semesterdua::all();
        return view('frontend.kurikulum.semester2',
        compact('dua'),
        [
            'title' => 'Kurikulum'
        ]);
    }

    public function tiga() {
        return view('frontend.kurikulum.semester3',
        [
            'title' => 'Kurikulum'
        ]);
    }

    public function empat() {
        return view('frontend.kurikulum.semester4',
        [
            'title' => 'Kurikulum'
        ]);
    }

    public function lima() {
        return view('frontend.kurikulum.semester5',
        [
            'title' => 'Kurikulum'
        ]);
    }

    public function enam() {
        return view('frontend.kurikulum.semester6',
        [
            'title' => 'Kurikulum'
        ]);
    }

    public function tujuh() {
        return view('frontend.kurikulum.semester7',
        [
            'title' => 'Kurikulum'
        ]);
    }

    public function delapan() {
        return view('frontend.kurikulum.semester8',
        [
            'title' => 'Kurikulum'
        ]);
    }

}
