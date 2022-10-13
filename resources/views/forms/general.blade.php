@extends('layouts.front')
@section('title')
Start to plan my trip
@endsection
@section('content')
<div class="container-fluid  d-flex justify-content-center align-items-center"  style="background-image: url({{ asset('img/beach.jpg')}});height:300px; background-size:cover;background-position:center center;" >
       
    <h1 class="text-white">Planning your trip</h1>

</div>
<div class="container">
    <h4 class="text-center">Inquire about a tailor-made trip with us</h4>
<form action="{{ route('contactos.general.store')}}" method="post">
  @csrf
    <h3>Your details</h3>
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
                <input type="text" class="form-control" id="floatingname" placeholder="Phone*" name="phone" required>
                <label for="floatingphone">Phone*</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingcity" placeholder="City*" name="city" required>
                <label for="floatingcity">City*</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingstate" placeholder="State*" name="state" required>
                <label for="floatingstate">State*</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingzipcode" placeholder="Zipcode" name="zipcode">
                <label for="floatingstate">Zipcode</label>
              </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Your travel plans</h3>
            <p>Later will define the departure date.</p>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="duration">
                <option selected>Choose Duration</option>
                <option value="About a week">About a week</option>
                <option value="Two or three weeks">Two or three weeks</option>
                <option value="One month or more">One month or more</option>
              </select>
              <select class="form-select form-select-lg mb-3" name="season" aria-label=".form-select-lg example">
                <option selected>Choose Season</option>
                <option value="Spring">Spring</option>
                <option value="Summer">Summer</option>
                <option value="Winter">Winter</option>
                <option value="Autumm">Autumm</option>
              </select>
              <select id="travel" class="form-select form-select-lg mb-3" name="travelers" aria-label=".form-select-lg example">
                <option selected>Choose Travellers</option>
                <option value="Individual">Individual</option>
                <option value="Couple">Couple</option>
                <option value="Family">Family</option>
                <option value="Group">Group</option>
              </select>
              <div class="form-check" id="child">
                <input class="form-check-input" type="radio" name="children" value="Travel with children" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Travel with children
                </label>
              </div>
              <h4>Other specifications</h4>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="romantic" value="Romantic trip">
                <label class="form-check-label" for="inlineCheckbox1">Romantic trip</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mobility" value="Reduced mobility">
                <label class="form-check-label" for="inlineCheckbox2">Reduced mobility</label>
              </div>
        </div>
         <div class="col-md-6">
            <h3> Trip type </h3>
            <div class="form-check mt-5 d-flex justify-content-start align-items-center">
                <input class="form-check-input ms-3 " type="radio" name="type" value="Leisure" id="flexRadioDefault1">
                <label class="form-check-label ms-5" for="flexRadioDefault1">
                   <h5> Mostly leisure</h5>
                   <p>A leisure attractions trip with some cultural and gourmet attractions</p>
                </label>
              </div>
              <div class="form-check d-flex justify-content-start align-items-center">
                <input class="form-check-input ms-3" type="radio" name="type" value="Cultural"  id="flexRadioDefault2" >
                <label class="form-check-label ms-5" for="flexRadioDefault2">
                   <h4> Mostly cultural</h4>
                   <p>A cultural attractions trip with some leisure and gourmet attractions</p>
                </label>
              </div>
              <div class="form-check d-flex justify-content-start align-items-center">
                <input class="form-check-input ms-3" type="radio" name="type" value="Gourmet"  id="flexRadioDefault2" >
                <label class="form-check-label ms-5" for="flexRadioDefault2">
                  <h4>Mostly gourmet</h4> 
                  <p>A gourmet attractions trip with some cultural and leisure attractions</p> 
                </label>
              </div>
              <div class="form-check d-flex justify-content-start align-items-center">
                <input class="form-check-input ms-3" type="radio" name="type" value="Adventure"  id="flexRadioDefault2" >
                <label class="form-check-label ms-5" for="flexRadioDefault2">
                  <h4>Adventure trip</h4> 
                  <p>With some cultural and gourmet attractions</p>
                </label> 
              </div>
         </div>
      
    </div>
    <div class="row mt-5">
        <div class="col-md-10 mx-auto">
            <h4>Tell us about your plans</h4>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Countries, places or things you are interested</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
        </div>

     </div>
     <div class="d-flex justify-content-center align-items-center flex-column">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="legal" required id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                I aprove <span><a href="">RGPD</a></span>
            </label>
          </div>
          <button type="submit" class="btn btn-dark mt-4">Send</button>

     </div>
</form>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function(){ 
 $('#travel').on('change', function() { 
 if ( this.value == 'Family'){ 
     $("#child").show(); 
 } 
 else{ 
     $("#child").hide(); 
 } 
 }); 
}); 
</script>
@endsection