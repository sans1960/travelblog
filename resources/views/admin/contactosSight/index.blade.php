@extends('layouts.admin')
@section('title')
{{ __('Contactos') }}
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">{{ __('All Contactos Sight') }}</div>

           

                   
                
            </div>
        </div>
      
    </div>

    
</div> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        
                        <th class="">Fecha</th>
                        <th class="">Sight</th>
                        <th class="">Country</th>
                        <th class="">Email</th>
                      
                        
                       
                        <th colspan="2" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach ($sightcontacts as $sightcontact)
                    <tr>
                     <td>{{ $sightcontact->created_at}}</td>
                     <td>{{ $sightcontact->sight}}</td>
                     <td>{{ $sightcontact->country}}</td>
                     <td>{{ $sightcontact->email}}</td>
                  
                     <td>
                         <a href="{{ route('contactos.sight.show',$sightcontact->id)}}" class="btn btn-success btn-sm">
                             <i class="bi bi-eye"></i>
                             </a>
                     </td>
                   
                     <td>
                         <form action="{{ route('contactos.sight.destroy',$sightcontact->id)}}" method="post">
                             @csrf
                             @method('delete')
                             <button type="submit" class="btn btn-danger btn-sm show_confirm">
                                 <i class="bi bi-trash3"></i>
                             </button>
                         </form>
                     </td>
                    </tr>
                @endforeach  
                    
                
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
             title: `Are you sure you want to delete this record?`,
             text: "If you delete this, it will be gone forever.",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
             form.submit();
           }
         });
     });
</script>  
@endsection