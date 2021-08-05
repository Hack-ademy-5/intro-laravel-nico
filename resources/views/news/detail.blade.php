@extends('base')
@section('title','Noticias')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
        <img src="{{$noticia['img']}}" alt="" class="img-fluid">
        <h1>{{$noticia['title']}}</h1>
        <p>
            {{$noticia['description']}}
        </p>
    </div>
</div>
@endsection