@extends('template/main')

@section('judul', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Daftar Mahasiswa
            </h1>
            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nama</th>
      <th scope="col">email</th>
      <th scope="col">jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($mahasiswa as $mhs)
    <tr>
      <th scope="row">1</th>
      <td>{{$mhs->nama}}</td>
      <td>{{$mhs->email}}</td>
      <td>{{$mhs->jurusan}}</td>
      <td>
        <a href="" class="badge badge-danger float-right ml-1">X</a>
				<a href="" class="badge badge-success float-right ml-1">ubah</a>
				<a href="" class="badge badge-primary float-right ml-1">detail</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection