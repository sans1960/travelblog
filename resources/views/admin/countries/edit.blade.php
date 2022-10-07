@extends('layouts.admin')
@section('title')
{{ __('Countries/Create') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                  Create Country
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.countries.update',$country)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name"  name="name" value="{{ $country->name}}" required>
                          </div>
                          <div class="row mb-3">
                             <div class="col">
                                <select class="form-select "  name="destination_id" id="dest">
                                    <option selected>Choose Destination</option>
                                     @foreach ($destinations as $destination)
                                        <option value="{{ $destination->id}}">{{ $destination->name}}</option>
                                    @endforeach
                                    
                                  </select>
                             </div>
                             <div class="col">
                                <select name="subregion_id" id="subre" class="form-select ">

                                </select>
                             </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-md-4 mx-auto">
                                <img  id="preview-image-before-upload" class="img-fluid d-block mx-auto" src="{{ asset('storage/countries/'.$country->image)}}" alt="">
                            </div>
                        </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image" name="image">
                          </div>
                          <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-dark">
                              <i class="bi bi-upload"></i>
                            </button>
                          </div>
                    </form>
                </div>
              </div>
        </div>
      
    </div>
   
    
</div> 

@endsection
@section('js')
<script>
    $(document).ready(function (e) {
       $('#image').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#preview-image-before-upload').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
       });
    });
 </script> 
 <script>
   $(document).ready(function(){
        $('#dest').on('change',function(){
            var destId = this.value;
            $('#subre').html('');
            $.ajax({
                url:'{{ route('getsubregions') }}?destination_id='+destId,
                type:'get',
                success:function (res){
                    $('#subre').html('<option value="">Select subregion</option>');
                    $.each(res,function(key,value){
                        $('#subre').append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

    });

 </script>
@endsection