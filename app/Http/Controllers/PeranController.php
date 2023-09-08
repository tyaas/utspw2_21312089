<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peran;
use App\Models\Film;
use App\Models\Cast;


class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peran = Peran::all(); // Ambil semua data peran

        return view('peran.index', compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cast = Cast::all();
        $film = Film::all();
        return view('peran.create', compact('film', 'cast'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peran = new Peran;
        

        $request-> validate([
            'film_id'=>'required|numeric',
            'cast_id'=>'required|numeric',
            'nama'=>'required|numeric',
        ],[
            'film_id.required'=>'Judul Wajib Di isi',
            'cast_id.required'=>'Ringkasan Wajib Di isi',
            'nama.required'=>'tahun Wajib Di isi',
        ]);

        $peran-> film_id = $request->film;
        $peran-> cast_id = $request->cast;
        $peran-> nama = $request->nama;
       
        
        $peran->save();
        return redirect()->to('peran')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
