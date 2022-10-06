@extends('layouts.admin')
@section('title')
{{ __('Tag/Create') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                  Create Tag
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.tags.store')}}" method="post">
                      @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" autofocus required>
                          </div>
                       
                          <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-dark">
                                <i class="bi bi-check-circle"></i>
                            </button>
                          </div>
                    </form>
                </div>
              </div>
        </div>
      
    </div>
   
    
</div> 

@endsection
