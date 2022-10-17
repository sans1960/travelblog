@extends('layouts.front')
@section('title')
    Contact for {{ $page->name }}
@endsection

@section('content')
<div class="container-fluid  d-flex justify-content-center align-items-center"  style="background-image: url({{ asset('storage/page/'.$page->image)}});height:300px; background-size:cover;background-position:center center;" >
       
   

</div> 
<div class="container">
    <h4 class="text-center mt-4">Get more info about {{ $page->name}}</h4>
<form action="{{ route('contactos.page.store')}}" method="post">
  @csrf
  <div class="row mt-5">
    <div class="col-md-12 mx-auto">
        <h4>Your interests</h4>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Tell us more interested </label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
    </div>

 </div>
 
 <input type="hidden" name="page" value="{{ $page->name}}">
 <input type="hidden" name="tag" value="{{ $page->tag->name}}">
 <div class="row mt-5">
    <div class="col-md-6">
        
           
        <select class="form-select form-select-lg mt-3 mb-3" name="trait" aria-label="Default select example">
            <option selected>Choose your title</option>
            <option value="Dr">Dr</option>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Ms">Ms</option>
            <option value="Mss">Mss</option>
          </select>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingname" placeholder="Name*" name="name" required>
            <label for="floatingname">Name*</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingsurname" placeholder="Surname*" name="surname" required>
            <label for="floatingsurname">Surname*</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingemail" placeholder="Email*" name="email" required>
            <label for="floatingemail">Email*</label>
          </div>


</div>
<div class="col-md-6">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingname" placeholder="Phone" name="phone" >
        <label for="floatingphone">Phone</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingcity" placeholder="City" name="city" >
        <label for="floatingcity">City</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingstate" placeholder="State" name="state" >
        <label for="floatingstate">State</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingzipcode" placeholder="Zipcode" name="zipcode">
        <label for="floatingstate">Zipcode</label>
      </div>
</div>
</div>
      
          
      
 </div>

@include('layouts.formularios.footer')
</form>
</div> 
@endsection
@section('js')

@endsection