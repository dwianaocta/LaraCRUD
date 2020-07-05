@extends('adminlte.master')

@section('content')

<div class="card card-widget">

    @foreach ($pertanyaan as $key => $tanya)
    <div class="card-header">
        <h3>{{$tanya->judul}}</h3>
    </div>
    <div class="card-body">
        <p>{{$tanya->isi}} </p>
        <span class="float-right text-muted">Diposting pada {{$tanya->tanggal_dibuat}}</span><br>
        <span class="float-right text-muted">Diedit pada {{$tanya->tanggal_diperbarui}}</span>
    </div>
    @endforeach
    
    <div class="card-footer card-comments">
        @foreach ($jawaban as $key => $item)
        <div class="card-comment">
            <div class="comment-text">
            <span class="username">
                {{ $key + 1}}
                <span class="text-muted float-right">{{$item->tanggal_dibuat}}</span>
            </span>
            {{$item->isi}}
            </div>
        </div>
        @endforeach
    </div>
    <div class="card-footer">
      <form action="/jawaban/{{$id}}" method="POST">
        @csrf
        <div class="img-push">
          <input type="text" class="form-control form-control-sm" id="isi" name="isi" placeholder="Tekan Enter untuk memberi komentar">
        </div>
      </form>
    </div>
</div>

@endsection