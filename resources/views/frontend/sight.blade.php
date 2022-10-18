@extends('layouts.front')
@section('title')
   {{$sight->title}} 
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <figure class="figure">
                        <img src="{{ asset('storage/sights/'.$sight->image)}}" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption text-center">{{ $sight->caption}}</figcaption>
                      </figure>
                    <div class="card-header">
                      <h1 class="text-center">{{$sight->title}}</h1>
                    </div>
                    <div class="card-body">
                     <div class="d-flex justify-content-around  p-2">
                        <p class="me-5">{{ $sight->country->name}}</p>
                        
                        <p class="ms-5">{{ $sight->category->name}}</p>
                     
                     </div>
                     <div class="" style="text-align: justify;">
                       {!! $sight->extract!!}
                      
                     </div>
                     <div class="" style="text-align: justify;">
                        {!! $sight->body!!}
                      </div>
                    </div>
                  </div>

            </div>
        </div>
        
  

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="p-5" >
                  <h1>Aqui va el mapa</h1>
                 </div>
            </div>
        </div>
        <div class="row d-flex  p-4 ">
            <h2>Share this Page with:

            </h2>
               <div class="col-md-2 mx-auto ">
                <a href="{{ route('contactsight',$sight)}}" class="btn btn-dark d-block p-2 mx-auto">Plan a trip here</a>
               </div>
               
        </div>
        <div class="row mt-5">
          @if ($sights)
              <h3 class="text-center">Relataded sights</h3>
              <div class="col-md-6 mx-auto owl-carousel owl-theme mt-5">
                @foreach ($sights as $sight)
                <a href="{{ route('sight',$sight)}}" class="nav-link">
                    <div class="card">
                      <img src="{{ asset('storage/sights/'.$sight->image)}}" class="card-img-top" alt=".{{ $sight->caption}}">
                     <div class="card-body">
                       <h6 class="card-title">{{ $sight->date}}</h6>
                       <h5 class="card-title">{{ $sight->title}}</h5>
                         <div>
                          {!! Str::limit($sight->extract, 110, '...') !!}
                         </div>
                         <p>Read more</p>
                       </div>
                  </div>
                  </a>
                     
                @endforeach

            </div>
          @endif
        </div>
    </div>

@endsection
@section('js')




<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})
</script>

@endsection