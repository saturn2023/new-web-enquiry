<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 

@section('content')
<body >
<div class="card" >
  <div   style="background-image: url('{{ asset('image/home-service-tile-2.jpg')}}');background-repeat:no-repeat;background-size: cover;background-position: center;" class="card-body">
    <h2 class="card-title">TWO MOONS WEB SERVICES REQUEST</h2>
    
    
    <div class="container">
    <form action="/enquires-submit" method="POST" enctype="multipart/form-data">
    @csrf
      <div class = "row">
      <div  style="max-width:30%" class = "col-sm">
   
   </div>
      <div class = "col-sm">
    <div class="form-group">
    <label class="form-label" for="exampleFormControlSelect1">Issue Type</label>
    <select  name="issue-type" class="  form-control" id="issue-select">
    <option>Please Select an option </option>
      <option value="1" id="website-issue">Are you having an issue with your website? </option>
      <option value="2" id="additional-issue">Are you requesting additional work to be done on your website? </option>
      
    </select>
    
    </div>
  </div>
  <div class = "col-sm">
   
   </div>
  
</div>
<div style="display:none" id="issue-1">
<div class = "row">
<div style="max-width:30%" class = "col">
   
   </div>
   <div class = "col">
   <p class="form-label">
Please describe the issue your website is currently experiencing. Where possible can you please obtain a screen shot showing the issue and upload it into the box below. This will help us greatly. Most Pc’s/laptops come with a screen capture tool or snip tool. You can use this to capture the image and save it to a folder and then upload it below.
</p>
   </div>
   <div style="max-width:20%" class = "col-sm">
</div>
</div>
<div class = "row">
<div style="max-width:30%" class = "col">
   
   </div>
   <div class = "col">
<div class="form-group">
    
    <textarea name = "issue-textarea" class=" @error('issue-textarea') is-invalid @enderror form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    @error('issue-textarea')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
</div>
<div style="max-width:20%" class = "col-sm">
</div>
    
</div>
<div class = "row">
<div style="max-width:30%" class = "col">
   
   </div>
   <div class = "col">

<div class="form-group">
    <label class="form-label" for="exampleFormControlFile1">Please upload the screenshot of the issue</label>
    <input name="photo" type="file" class=" @error('photo') is-invalid @enderror form-control-file" id="exampleFormControlFile1">
    @error('photo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
    
  </div>
</div>
<div style="max-width:20%" class = "col-sm">
</div>
    
</div>


  
<div style="display:none!important" id="issue-2">
<div class = "row">
<div style="max-width:30%" class = "col">
   
   </div>
   <div class = "col">
   <p class="form-label">
   Please describe the work you wish to have done. 
If you are requesting major changes/additions to your website we recommend calling us to book an appointment so that we can correctly scope the work and quote accordingly.
</p>
<p class="form-label">
For minor changes and modifications please refer below.
It is best to identify which page of your website you want the additions or modifications made.
For each web page please provide the text and instructions on a separate A4 word doc  correctly titled. Please also load the images correctly named so that we can easily locate the image when referring to the instructions for these additions/modifications on each page.
Please provide a brief overview of what you are requesting and upload your files below 
Once we have scoped the work we will contact you to provide a timeframe for completion and a quote depending on the work request.

</p>
   </div>
   <div style="max-width:20%" class = "col-sm">
</div>
</div>
<div class = "row">
<div style="max-width:30%" class = "col">
   
   </div>
   <div class = "col">
<div class="form-group">
    
    <textarea  name= "additional_work" class=" @error('additional_work') is-invalid @enderror form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    
    @error('additional_work')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


  </div>
</div>

<div style="max-width:20%" class = "col-sm">
</div>
</div>
<div class = "row">
<div style="max-width:30%" class = "col">
   
   </div>
   <div class = "col">

<div class="form-group">
    <label class="form-label" for="exampleFormControlFile1">Please upload the screenshot of the issue</label>
    <input name="photo2" type="file" class=" @error('photo2') is-invalid @enderror form-control-file" id="exampleFormControlFile1">
    @error('photo2')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
    
  </div>
</div>
<div style="max-width:20%" class = "col-sm">
</div>
    
</div>
 

  

    
  </div>

  <div style="display:none!important" id="rate-show">
  <div class = "row">
<div style="max-width:30%" class = "col">
   
   </div>
   <div class = "col">
<div class="form-group">
    
    <p class="form-label">
    What impact on your business is this issue having as we need to prioritise each request.
Please rate from 1 – 10 with 10 being critical. 
We will advise you  when this work will be expected to be completed.

</p>
    
<label class="  @error('rate') is-invalid @enderror checkbox-inline">
      <input  name= "rate[]" type="checkbox" value="1"><span class=" @error('rate') is-invalid @enderror form-label"> 1 </span>
     
    </label>
    <label class="checkbox-inline">
      <input  name= "rate[]" type="checkbox" value="2"> <span class="form-label">2</span>
    </label>
    <label class="checkbox-inline">
      <input   name= "rate[]" type="checkbox" value="3"> <span class="form-label">3</span>
    </label>
    <label class="checkbox-inline">
      <input  name= "rate[]" type="checkbox" value="4"> <span class="form-label">4</span>
    </label>
    <label class="checkbox-inline">
      <input   name= "rate[]" type="checkbox" value="5"> <span class="form-label">5</span>
    </label>
    <label class="checkbox-inline">
      <input   name= "rate[]" type="checkbox" value="6"> <span class="form-label">6</span>
    </label>
    <label class="checkbox-inline">
      <input   name= "rate[]" type="checkbox" value="7"> <span class="form-label">7</span>
    </label>
    <label class="checkbox-inline">
      <input   name= "rate[]" type="checkbox" value="8"> <span class="form-label">8</span>
    </label>
    <label class="checkbox-inline">
      <input  name= "rate[]"  type="checkbox" value="9"><span class="form-label">9</span>
    </label>
    <label class="checkbox-inline">
      <input  name= "rate[]" class="form-label" type="checkbox" value="10"><span class="form-label">10</span>
    </label>
    @error('rate')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
</div>
<div style="max-width:20%" class = "col-sm">
</div>
</div>
<div class="row">

<div style="max-width:30%" class = "col-sm">
</div>
<div class = "col">
<button type="submit"  class="btn btn-primary">Submit</button>
</div>
<div style="max-width:20%" class = "col-sm">
</div>
</div>
</div>


</div>





</div>

</form>
</body>

@endsection
