@extends('layouts.admin')

@section('title')
{{ __('Destinations-create') }}
    
@endsection 
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                   Edit Destination
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.destinations.update',$destination)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $destination->name}}" name="name"  required>
                          </div>
                          <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" value="{{ $destination->title}}" name="title"  required>
                          </div>
                          <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" value="{{ $destination->subtitle}}" name="subtitle"  required>
                          </div>
                          <div class="row mb-3">
                            <div class="col-md-4 mx-auto">
                                <img  id="preview-image-before-upload" class="img-fluid d-block mx-auto" src="{{ asset('storage/destination/'.$destination->image)}}" alt="">
                            </div>
                        </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image" name="image">
                          </div>
                          <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control" id="body" rows="3" required name="body">
                                {!! $destination->body !!}
                            </textarea>
                          </div>
                          <div class="mb-3">
                            <label for="sidebody" class="form-label">Sidebody</label>
                            <textarea class="form-control" id="sidebody" rows="3" required name="sidebody">
                                {!! $destination->sidebody !!}
                            </textarea>
                          </div>
                            
                        <div class="row mb-3">
                            <div class="col-md-4 mx-auto">
                            <button type="submit" class="btn btn-primary d-block mx-auto"> 
                                <i class="bi bi-upload"></i>
                            </button>
                        </div>
                        </div>
                    </form>
                        
                </div>
            </div>
            
        </div>
       
    </div>
    
</div
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
      CKEDITOR.replace( 'body' );
          CKEDITOR.replace( 'sidebody' );
    </script> 
@endsection