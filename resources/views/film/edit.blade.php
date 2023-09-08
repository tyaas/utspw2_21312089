@extends('layout.master')

@section('judul')
    Edit film
@endsection

@section('content')
<form action="{{ route('film.update', $film->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" value="{{ $film->judul }}" name="judul">
    </div>
    <div class="form-group">
        <label for="ringkasan">Ringkasan</label>
        <input type="text" class="form-control" value="{{ $film->ringkasan }}" name="ringkasan">
    </div>
    <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="text" class="form-control" value="{{ $film->tahun }}" name="tahun">
    </div>
    <div class="form-group">
        <label for="poster">Poster</label>
        <input type="text" class="form-control" value="{{ $film->poster }}" name="poster">
    </div>
    <div class="form-group">
        <label for="genre_id">Generasi</label>
        <input type="text" class="form-control" value="{{ $film->gen_id }}" name="genre_id">
    </div>
    <button type="submit" class="btn btn-primary">Update Data</button>
</form>
@endsection
