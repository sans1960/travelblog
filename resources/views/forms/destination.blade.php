@extends('layouts.front')
@section('title')
    Contact for {{ $destination->name }}
@endsection

@section('content')
<div class="container-fluid  d-flex justify-content-center align-items-center"  style="background-image: url({{ asset('storage/destination/'.$destination->image)}});height:300px; background-size:cover;background-position:center center;" >
       
    <h1 class="text-white">{{ $destination->name }}</h1>

</div> 
<div class="container">
    <h4 class="text-center mt-4">Inquire about a tailor-made trip for {{ $destination->name }}</h4>
<form action="{{ route('contactos.destination.store')}}" method="post">
  @csrf
    <h3>Your details</h3>
 @include('layouts.formularios.basic')
 <input type="hidden" name="destination" value="{{ $destination->name }}">
 <div class="row mt-5">
      @foreach ($destination->subregion as $subregion)
          <div class="col-md-6 mb-4">
            <h4>{{ $subregion->name}}</h4>
            @foreach ($subregion->country as $country)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="check" value="{{ $country->name}}" name="countries[]">
                <label class="form-check-label" for="check">{{ $country->name}}</label>
              </div>
            @endforeach
          </div>
          
      @endforeach
      
          
      
 </div>
    <div class="row mt-5">
        <div class="col-md-10 mx-auto">
            <h4>More info</h4>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tell us more interested </label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
        </div>

     </div>
@include('layouts.formularios.footer')
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