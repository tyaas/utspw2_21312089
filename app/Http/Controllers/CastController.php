<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cast = Cast::all(); // Ambil semua data cast

        return view('cast.index', compact('cast'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cast = new Cast;
        

        $request-> validate([
            'nama'=>'required',
            'umur'=>'required|numeric',
            'bio'=>'required',
        ],[
            'nama.required'=>'Nama Wajib Di isi',
            'umur.required'=>'umur Wajib Di isi',
            'umur.numeric'=>'umur Wajib Berupa Angka',
            'bio.required'=>'bio Wajib Di isi',
        ]);

        $cast-> nama = $request->nama;
        $cast-> umur = $request->umur;
        $cast-> bio = $request->bio;
        
        $cast->save();
        return redirect()->to('cast')->with('success', 'Data Berhasil Ditambahkan');
        // return redirect('/cast');
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
    //     $cast = Cast::find($id);

    // if (!$cast) {
    //     return redirect()->back()->with('error', 'Data not found.');
    // }
    $cast = Cast::where('id',$id)->first();

    return view('cast.edit', compact('cast'));
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
    
    $cast = Cast::find($id);
    $cast->nama = $request->input('nama');
    $cast->umur = $request->input('umur');
    $cast->bio = $request->input('bio');
    $cast->save();

    
        return redirect()->route('cast.index')->with('success', 'Data Berhasil Di Update');

    // return redirect()->route('cast.index', $id)->with('success', 'Data successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        
        // Temukan data berdasarkan ID
    $cast = cast::find($id);

    if (!$cast) {
        return redirect()->to('cast')->with('error', 'Data tidak ditemukan.');
    }

    // Hapus data
    $cast->delete();

    // Redirect dengan pesan sukses
    return redirect()->to('cast')->with('success', 'Data berhasil dihapus.');

        

    }
}
