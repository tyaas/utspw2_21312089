@extends('layout.master')

@section('judul')
    Edit Cast
@endsection

@section('content')
<form action="{{ route('cast.update', $cast->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" value="{{ $cast->nama }}" name="nama">
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="text" class="form-control" value="{{ $cast->umur }}" name="umur">
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <input type="text" class="form-control" value="{{ $cast->bio }}" name="bio">
    </div>
    <button type="submit" class="btn btn-primary">Update Data</button>
</form>
@endsection
