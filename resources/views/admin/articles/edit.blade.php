@extends('layouts.admin')

@section('title')
{{ __('Article-edit') }}
    
@endsection 
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                   Edit Article
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.articles.update',$article)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $article->name}}" name="name"  required>
                          </div>
                        <div class="row mb-3">
                              <div class="col">
                                <select class="form-select" aria-label="Default select example" name="page_id" required>
                                    <option selected>Choose Page</option>
                                    @foreach ($pages as $page)
                                        <option value="{{ $page->id}}">{{ $page->name}}</option>
                                    @endforeach
                                   
                                  </select>
                              </div>
                              <div class="col">
                                 <input id="order" class="form-control" type="number" name="order" value="{{ $article->order}}"/>
                              </div>
                        </div>
                        
                          <div class="row mb-3">
                            <div class="col-md-4 mx-auto">
                                <img  id="preview-image-before-upload" class="img-fluid d-block mx-auto" src="{{ asset('storage/articles/'.$article->image)}}" alt="">
                            </div>
                        </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image" name="image">
                          </div>
                          <div class="mb-3">
                            <label for="caption" class="form-label">Caption</label>
                            <input type="text" class="form-control" id="caption" value="{{ $article->caption}}" name="caption"  required>
                          </div>
                          <div class="mb-3">
                            <label for="description" class="form-label">Body</label>
                            <textarea class="form-control" id="body" rows="3" required name="body">
                                {!! $article->body !!}
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
         
    </script> 
@endsection