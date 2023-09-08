@extends('layout.master')

@section('judul')
    Tambah peran
@endsection

@section('content')
@csrf

<form method="POST" action="{{url('peran')}}">
    @csrf
    @method('post')

    <div class="form-group">
        <label for="">cast</label>
        <select class="form-control" name="cast">
            <option value="">Pilih cast</option>
            @forelse ($cast as $item)
            <option value="{{$item["id"]}}">{{$item['nama']}}</option>
            @empty
            @endforelse
        </select>
    </div>
    
    <div class="form-group">
        <label for="">film</label>
        <select class="form-control" name="film">
            <option value="">Pilih film</option>
            @forelse ($film as $item)
            <option value="{{$item["id"]}}">{{$item['judul']}}</option>
            @empty
            @endforelse
        </select>
    </div>
    

        <div class="form-group">
            <label >Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{Session::get ('nama_id')}}" name='nama_id'>
            </div>
        </div>
        {{-- <div class="form-group">
            <label >Genre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{Session::get ('genre_id')}}" name='genre_id'>
            </div>
        </div> --}}
        
        
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        @endsection