<?php

namespace App\Http\Controllers;

use App\Models\Daftardosen;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Daftardosen::all();
        return view('backend.index', ['mahasiswa' => $mahasiswa,
            'title' => 'Daftar Dosen'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.create', [
            'title' => 'Tambah Dosen'        
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        // Daftardosen::create([
        //     'foto'    => $request->foto,
        //     'judul'  => $request->judul,
        //     'descripsi'  => $request->descripsi,
        // ]);

        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Daftardosen::find($id);
        return view('backend.home', ['mahasiswa' => $mahasiswa,
            'title' => 'Detail Dosen'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Daftardosen::find($id);
        return view('backend.edit', ['mahasiswa' => $mahasiswa,
            'title' => 'Edit Dosen'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Daftardosen::find($id);
        $mahasiswa->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        if($request->has('search')) {
            $mahasiswa = Daftardosen::where(
                'judul', 'like', '%'.$request->search.'%'
                )->get();
            return view('frontend.berita', ['mahasiswa' => $mahasiswa,
                'title' => 'Hasil Pencarian'
            ]);
        }else {
            $mahasiswa = Daftardosen::all();
        }

        return view('frontend.berita', [
            'mahasiswa' => $mahasiswa,
            'title' => 'Berita',
        ]);
    }
    
}

