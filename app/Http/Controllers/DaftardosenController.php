<?php

namespace App\Http\Controllers;

use App\Models\Daftardosen;
use App\Models\Dosen;
use App\Models\Kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftardosenController extends Controller
{

    public function index() {

        $mahasiswa = Daftardosen::all();
        $mahasiswa = Daftardosen::orderBy('id','DESC')->take(6)->get(); // limit 3
        return view('home',[
            'mahasiswa' => $mahasiswa,
            'title' => 'SI',
            'data' => $mahasiswa,
        ]);

    }

    public function edit($id){   
        $mahasiswa = Daftardosen::find($id);
        return view('frontend.detailberita', [
            'mahasiswa' => $mahasiswa, 
            'title' => 'Berita'
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Daftardosen::create($request->all());
        if($request->hasFile('foto')) {
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        // $this->validate($request,[
        //     'foto'    => 'required',
        //     'judul'  => 'required',
        //     'descripsi'  => 'required',         
        // ]);      

        $mahasiswa = Daftardosen::find($id);
        $mahasiswa->update($request->all());

        return redirect('/frontend/detailberita/'.$id);
    }

    

    //
    public function daftardosen() 
    {
        $dosen = Dosen::all();
        return view('frontend.daftardosen', [
            "dosen" => $dosen,
            "title" => "Daftart Dosen",
        ]);
    }

    public function notfont()
    {
        return view('frontend.notfont', [
            "title" => "Not | Font",
        ]);
    }

    public function berita() {
        $mahasiswa = Daftardosen::all();
        $mahasiswa = Daftardosen::orderBy('id','DESC')->get();
        return view('frontend.berita', [
            'mahasiswa' => $mahasiswa,
            'title' => 'Berita',
            'data' => $mahasiswa,
        ]);
    }

    public function saibarmenu() {
        $mahasiswa = Daftardosen::all();
        $mahasiswa = Daftardosen::orderBy('id','DESC')->take(3)->get(); // limit 3
        return view('frontend.saibarmenu', [
            'mahasiswa' => $mahasiswa,
            "title" => "Sider Bar Menu",
            'data' => $mahasiswa,
        ]);
    }

    public function contact(){
        return view('frontend.contact', [
            "title" => "Contact",
        ]);
    }

    public function strukturorgan() {
        return view('frontend.strukturorgan', [
            "title" => "Struktur Organisasi",
        ]);
    }

    public function kurikulum() {
        $mahasiswa = Daftardosen::all();
        $mahasiswa = Daftardosen::orderBy('id','DESC')->take(2)->get(); // limit 3
        return view('frontend.kurikulum',[
            'mahasiswa' => $mahasiswa,
            'title' => 'kurikulum',
            'data' => $mahasiswa,
        ]);
    }

    public function galery() {
        return view('frontend.galery',[            
            'title' => 'galery',            
        ]);
    }

    public function kelakademik() {
        return view('frontend.kelakademik',[
            'title' => 'kelakademik',
        ]);
    }
    
    public function akreditas() {
        return view('frontend.akreditas',[
            'title' => 'akreditas',
        ]);
    }

}

