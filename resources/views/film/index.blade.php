@extends('layout.master')

@section('judul')
    Daftar film
@endsection


@push('script')
    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
    <script>
        $(function(){
            $('#example1').DataTable();
        });
    </script>
@endpush

@push('style')
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
@endpush


    

@section('content')
<a class="btn btn-secondary mb-3" href="{{url('film/create')}}">Tambah Data</a>
<table class="table" id="example1">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Ringkasan</th>
            <th scope="col">Tahun</th>
            <th scope="col">Poster</th>
            <th scope="col">Gen</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($film as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->ringkasan}}</td>
            <td>{{$item->tahun}}</td>
            <td>{{$item->poster}}</td>
            <td>{{$item->Genre->nama}}</td>
            <td>
                <a href="/film/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <form class="d-inline" action="{{ route('film.destroy', ['film' => $item->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Deleted</button>
                </form>
                
            </td>
            
        </tr>
        @empty
        <h2>Data tidak ada</h2>
        @endforelse
    </tbody>
    
</table>
@endsection