<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = Film::all(); // Ambil semua data film

        return view('film.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        return view('film.create', compact('genre'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film = new Film;
        

        $request-> validate([
            'judul'=>'required',
            'ringkasan'=>'required',
            'tahun'=>'required|numeric',
            'poster'=>'required',
            'genre_id'=>'required',
        ],[
            'judul.required'=>'Judul Wajib Di isi',
            'ringkasan.required'=>'Ringkasan Wajib Di isi',
            'tahun.required'=>'tahun Wajib Di isi',
            'tahun.numeric'=>'tahun Wajib Berupa Angka',
            'poster.required'=>'poster Wajib Di isi',
            'genre_id.required'=>'genre Wajib Di isi',
        ]);

        $film-> judul = $request->judul;
        $film-> ringkasan = $request->ringkasan;
        $film-> tahun = $request->tahun;
        $film-> poster = $request->poster;
        $film-> genre_id = $request->genre_id;
        
        $film->save();
        return redirect()->to('film')->with('success', 'Data Berhasil Ditambahkan');
        
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
        $film = Film::where('id',$id)->first();

    return view('film.edit', compact('film'));
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
        $film = Film::find($id);
    $film->judul = $request->input('judul');
    $film->ringkasan = $request->input('ringkasan');
    $film->poster = $request->input('poster');
    $film->genre_id = $request->input('genre_id');
    $film->save();

    
        return redirect()->route('film.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::find($id);

    if (!$film) {
        return redirect()->to('film')->with('error', 'Data tidak ditemukan.');
    }

    // Hapus data
    $film->delete();

    // Redirect dengan pesan sukses
    return redirect()->to('film')->with('success', 'Data berhasil dihapus.');
    }
}
