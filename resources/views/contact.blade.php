@extends('base')
@section('title','Contact Us')
@push('css')
<style>
    h1 {
      color:green
    }
</style>
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Contact Us</h1>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
        <h2>Contacanos y te contestaremos pronto</h2>
        <form action="{{route('contact.received')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fullname" value="{{old('fullname')}}">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('fullname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="" cols="30" rows="10">{{old('message')}}</textarea>
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
          </form>
    </div>
</div>
@endsection