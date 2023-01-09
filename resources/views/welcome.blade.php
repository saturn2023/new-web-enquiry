<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 

 
@section('content')
<body >
<div class="card" >
  <div   style="background-image: url('{{ asset('image/home-service-tile-2.jpg')}}');" class="card-body">
    <h2 class="card-title">TWO MOONS WEB SERVICES REQUEST</h2>
    
    <p class="card-text"> 
  
    We take issues with website seriously as we view hem as your online sales person and for that reason your site needs to operate ats its peak. We must accept that with changes in browser technology aspects of websites may stop working as designed.
As we grow we are looking at ways of creating a more efficient and effective service to ensure you receive the attention you need, and we maintain continuing levels of efficiency.
    </p>
    <p class="card-text">
    For this reason, we have created this Services Request system, to ensure we get your work done and we meet the needs of any other client currently making a request. Please complete the form below so that we can assess the issue and assign it to our schedule to get it done. 
If you are requesting additions or alterations to your website the more information you provide us the better we can scope the work in order to provide an accurate quote.
You will be able to upload files and images to this form for us to refer to. 
Should you have issues with this process you are welcome to send us an email and we can call you to discuss your work.

If your issue involves email send or receive problems please discuss these with your IT provider if you are using Microsoft Office 365 or a Google Account.
We can only assist you if your emails are hosted with your website. 
    </p>
    <button type="button" onclick="location.href = '/enquiries';"   class="btn btn-primary">Click through to following panel</button>
  </div>
</div>
    </div>
    <div class="col-sm">
      
    </div>
  </div>
<div class="container center">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col">
    
</div>
</body>
@endsection
