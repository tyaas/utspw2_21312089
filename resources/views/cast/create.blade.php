@extends('layout.master')

@section('judul')
    Tambah Cast
@endsection

@section('content')
@csrf

<form method="POST" action="{{url('cast')}}">
    @csrf
    @method('post')
<div class="form-group">
    <label >Nama</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value="{{Session::get ('nama')}}" name='nama'>
    </div>
</div>
        <div class="form-group">
            <label >Umur</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{Session::get ('umur')}}" name='umur'>
            </div>
        </div>
        <div class="form-group">
            <label >Bio</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{Session::get ('bio')}}" name='bio'>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        @endsection