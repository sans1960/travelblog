@extends('layouts.admin')
@section('title')
{{ __('Tag-Show') }}
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="">Categoria</th>
                       
                       
                        
                    </tr>
                </thead>
                <tbody>
                   <tr>
                    <td>{{ $tag->id}}</td>
                    <td>{{ $tag->name}}</td>
                    
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection