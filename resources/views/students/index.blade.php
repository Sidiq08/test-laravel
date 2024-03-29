@extends('template/main')

@section('judul', 'Daftar Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Daftar Students
            </h1>
  <table class="table table-dark">
    <a href="/students/create" class="btn btn-primary my-3">Tambah Data Student</a>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nama</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$student->nama}}</td>
      <td>

	    	<a href="{{url('students/' . $student->id)}}" class="badge badge-info float-right ml-1">detail</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection