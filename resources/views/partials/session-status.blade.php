@if(session('status'))

<div class="alert alert-primary alert-dismissible fade show text-center" role="alert " >
       {{session('status')}}

      <button type="button" class="close" data-dismiss='alert' aria-label='close'> <span aria-hidden='true'>&times; </span>  </button>

</div>


      @endif