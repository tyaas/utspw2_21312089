@extends('layout.master')

@section('judul')
    Tambah film
@endsection

@section('content')
@csrf

<form method="POST" action="{{url('film')}}">
    @csrf
    @method('post')
<div class="form-group">
    <label >Judul</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value="{{Session::get ('judul')}}" name='judul'>
    </div>
</div>
        <div class="form-group">
            <label >Ringkasan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{Session::get ('ringkasan')}}" name='ringkasan'>
            </div>
        </div>
        <div class="form-group">
            <label >Tahun</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{Session::get ('tahun')}}" name='tahun'>
            </div>
        </div>
        <div class="form-group">
            <label >Poster</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{Session::get ('poster')}}" name='poster'>
            </div>
        </div>
        {{-- <div class="form-group">
            <label >Genre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{Session::get ('genre_id')}}" name='genre_id'>
            </div>
        </div> --}}
        <div class="form-group">
            <label for="">Genre</label>
            <select name="form-control" name="genre">
                <option value="">Pilih Genre</option>
                @forelse ($genre as $key =>)
                <option value="{{$item["id"]}}">{{$item['nama']}}</option>
                @empty
                @endforelse
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        @endsection