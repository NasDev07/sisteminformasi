<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('backend.dosen.index', [
            'dosen' => $dosen,
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
        return view('backend.dosen.create', [
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
        $dosen = Dosen::create($request->all());
        if($request->hasFile('foto')) {
            $request->file('foto')->move('images/dosen/', $request->file('foto')->getClientOriginalName());
            $dosen->foto = $request->file('foto')->getClientOriginalName();
            $dosen->save();
        }

        // $this->validate($request,[
        //     'foto'    => 'required',
        //     'judul'  => 'required',
        //     'descripsi'  => 'required',
        // ]);

        // Dosen::create([
        //     'foto'    => $request->foto,
        //     'judul'  => $request->judul,
        //     'descripsi'  => $request->descripsi,
        // ]);

        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('backend.dosen.edit', ['dosen' => $dosen,
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
        $dosen = Dosen::create($request->all());
        if($request->hasFile('foto')) {
            $request->file('foto')->move('images/dosen/', $request->file('foto')->getClientOriginalName());
            $dosen->foto = $request->file('foto')->getClientOriginalName();
            $dosen->save();
        }
        // $this->validate($request,[
        //     'foto'    => 'required',
        //     'judul'  => 'required',
        //     'descripsi'  => 'required',         
        // ]);      

        $dosen = Dosen::find($id);
        $dosen->update($request->all());

        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect()->back();
    }
    
}

