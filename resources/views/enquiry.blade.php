<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 

@section('content')
<body >
<div class="card" >
  <div   style="background-image: url('{{ asset('image/home-service-tile-2.jpg')}}');background-repeat:no-repeat;background-size: cover;background-position: center;" class="card-body">
    <h2 class="card-title">TWO MOONS WEB SERVICES REQUEST</h2>
    
    <form  method="POST" action="/post" >
    @csrf
    
    <div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="form-group">
    <label class="form-label" for="exampleInputEmail1">Your Name</label>
    <input name="name" type="text" class="@error('name') is-invalid @enderror form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
    </div>
    <div class="col-sm">
    <div class="form-group">
    <label class="form-label" for="exampleInputPassword1">Your Email Address</label>
    <input name="email" type="text" class=" @error('email') is-invalid @enderror form-control" id="exampleInputPassword1" placeholder="Email">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
    </div>
    
  </div>
  <div class="row">
    <div class="col-sm">
    <div class="form-group">
    <label class="form-label"  for="exampleInputPassword1">Your Contact Number</label>
    <input name="contact" type="text"  class="@error('contact') is-invalid @enderror form-control" id="exampleInputPassword1" placeholder="Contact">
    @error('contact')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
</div>
<div class="col-sm">
<div class="form-group">
    <label class="form-label"  for="exampleInputPassword1">Website address</label>
    <input name="website" type="text"  class="@error('website') is-invalid @enderror form-control" id="exampleInputPassword1" placeholder="website address">
    @error('website')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
</div>
</div>
<div class="row">
    <div class="col-sm">
    
    <button type="submit" onclick=""   class="btn btn-primary">Next</button>
</div>
</div>
 
  
 
 

  
</form>
    
  </div>
</div>
    

</body>
@endsection
