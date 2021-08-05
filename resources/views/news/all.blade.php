@extends('base')
@section('title','Noticias')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Todas las noticias</h1>
    </div>
</div>
<div class="row">
    @foreach ($noticias as $noticia)
    <div class="col-12 col-md-6">
        <div class="card" style="width: 18rem;">
            <img src="{{$noticia["img"]}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$noticia['title']}}</h5>
              <p class="card-text">{{$noticia['description']}}</p>
              <a href="{{route('news.detail',['id'=>$loop->index])}}" class="btn btn-primary">Detalle</a>
            </div>
          </div>
    </div>
    @endforeach
</div>
@endsection