@extends('adminlte.master')

@section('content')

    <form action="/jawaban/{{$id}}" method="POST">
        @csrf
        <!--
        <div class="form-group row  pt-3 pl-2">
            <label for="judul" class="col-sm-2 col-form-label">Judul Jawaban</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="judul" name="judul" >
            </div>
        </div>
        !-->
        <div class="form-group row  pt-3 pl-2">
            <label for="isi" class="col-sm-2 col-form-label">Jawaban</label>
            <div class="col-sm-7">
                <textarea class="form-control" id="isi" rows="3" name="isi"></textarea>
            </div>
        </div>
        <div class="pl-2">
            <button type="submit" class="btn btn-primary">Post</button>
        </div>
    </form>

@endsection