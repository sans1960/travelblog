@extends('layouts.admin')

@section('title')
{{ __('Pages-edit') }}
    
@endsection 
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                   Edit Page
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.pages.update',$page)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name"  name="name" value="{{ $page->name}}" required>
                          </div>
                        <div class="row mb-3">
                              <div class="col">
                                <select class="form-select" aria-label="Default select example" name="tag_id" required>
                                    <option selected>Choose Tag</option>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id}}">{{ $tag->name}}</option>
                                    @endforeach
                                   
                                  </select>
                              </div>
                              <div class="col">
                                
                                 <input id="" class="form-control" type="date" name="date" value="{{ $page->date}}"/>
                              </div>
                        </div>
                        
                          <div class="row mb-3">
                            <div class="col-md-4 mx-auto">
                                <img  id="preview-image-before-upload" class="img-fluid d-block mx-auto" src="{{ asset('storage/page/'.$page->image)}}" alt="">
                            </div>
                        </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image" name="image">
                          </div>
                          <div class="mb-3">
                            <label for="caption" class="form-label">Caption</label>
                            <input type="text" class="form-control" id="caption" value="{{ $page->caption}}" name="caption"  required>
                          </div>
                          <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3" required name="description">
                                {!! $page->description !!}
                            </textarea>
                          </div>
                          <div class="mb-3">
                            <label for="conclusion" class="form-label">Conclusion</label>
                            <textarea class="form-control" id="conclusion" rows="3" required name="conclusion">
                                {!! $page->conclusion !!}
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
      CKEDITOR.replace( 'description' );
          CKEDITOR.replace( 'conclusion' );
    </script> 
@endsection