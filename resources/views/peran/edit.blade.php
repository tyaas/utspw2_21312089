@extends('layout.master')

@section('judul')
    Edit peran
@endsection

@section('content')
<form action="{{ route('peran.update', $peran->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" value="{{ $peran->judul }}" name="judul">
    </div>
    <div class="form-group">
        <label for="ringkasan">Ringkasan</label>
        <input type="text" class="form-control" value="{{ $peran->ringkasan }}" name="ringkasan">
    </div>
    <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="text" class="form-control" value="{{ $peran->tahun }}" name="tahun">
    </div>
    <div class="form-group">
        <label for="poster">Poster</label>
        <input type="text" class="form-control" value="{{ $peran->poster }}" name="poster">
    </div>
    <div class="form-group">
        <label for="genre_id">Generasi</label>
        <input type="text" class="form-control" value="{{ $peran->gen_id }}" name="genre_id">
    </div>
    <button type="submit" class="btn btn-primary">Update Data</button>
</form>
@endsection
