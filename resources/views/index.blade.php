@extends('layout.main')

@section('title', 'Data Siswa')

@section('content')
    <div class="container mt-5">
    <h1>LARAVEL CRUD</h1>
    <hr>
        <form class="form-inline" method="GET" action='/index'>
            <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search">
            <input type="submit" class="btn btn-xs btn-primary" value="Search">
        </form>
		<div class="row mt-3">
			<div class="col-md-12">
				<table id="tabelmember" class="table table-striped table-bordered" style="width:100%">
				<thead align="center">
					<tr>
						<th>No</th>
						<th>Nama Siswa</th>
						<th>NIS</th>
						<th>Kelas</th>
						<th>Jurusan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
                    <?php $i = 1; ?>
                        @foreach($siswas as $d)
                        <tr class="text-center">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->nis}}</td>
                            <td>{{$d->kelas}}</td>
                            <td>{{$d->jurusan}}</td>
                            <td>
                                <a href="/edit/{{ $d->id }}" class="btn btn-xs btn-primary">Edit</a> |
                                <a href="/destroy/{{ $d->id }}" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
				</table>
                <a class="btn btn-primary float-right mt-2" href="/create" role="button">Tambah Data</a>
			</div>
		</div>
	</div>
@endsection