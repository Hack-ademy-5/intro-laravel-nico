<x-base>
    <x-slot name="title">
        About Us
    </x-slot>
<div class="row">
    <div class="col-12">
        <h1>Hello, soy about!</h1>
    </div>
</div>
<div class="row">
    @foreach($personas as $persona)
    <div class="col-12 col-md-6">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$persona}}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    @endforeach
</div>
</x-base>