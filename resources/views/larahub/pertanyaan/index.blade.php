@extends('adminlte.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Update</th>
        <th scope="col"> </th>
        <th scope="col"> </th>
        <th scope="col"> </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $key => $item)
        <tr>
          <th scope="row"> {{ $key + 1}} </th>
          <td> {{$item->judul}} </td>
          <td> {{$item->isi}} </td>
          <td> {{$item->tanggal_dibuat}} </td>
          <td> {{$item->tanggal_diperbarui}} </td>
          <td> <a class="btn btn-primary" href="/jawaban/{{$item->id}}" role="button">Jawab</a> </td>
          <td> <a class="btn btn-warning" href="/pertanyaan/{{$item->id}}/edit" role="button">Edit</a> </td>
          <td> <a class="btn btn-danger" href="/pertanyaan/{{$item->id}}" role="button">Hapus</a> </td>
        </tr>                                
      @endforeach

    </tbody>
  </table>

  <div class="pl-2">
    <a class="btn btn-primary" href="/pertanyaan/create" role="button">Buat Pertanyaan</a>
  </div>
@endsection