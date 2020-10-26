@extends('layout.main')

@section('title', 'Edit data')

@section('content')
<div class="row mt-5">
    <div class="container">
    <h1>Edit Data</h1>
    <hr>
    @foreach ($siswas as $d)
        <form action="/edit/{{ $d->id }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" name="nis" value="{{$d->nis}}" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Siswa</label>
                <input type="text" class="form-control" name="nama" value="{{$d->nama}}" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" name="kelas" value="{{$d->kelas}}" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" value="{{$d->jurusan}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endforeach
    </div>
</div>
@endsection