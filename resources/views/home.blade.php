@extends('layout')
@section('content')

<div class="container ">
    <div class="row ">
        <div class="col-12 col-sm-10 col-lg-6">
          <img class="img-fluid mb-4" src="/img/home.png" alt="">

            </div>
        <div class="col-12 col-sm-10 col-lg-6 text-center  ">
            <h1 class="display-4 text-primary" >Desarrolo Web</h1>
            <p class="lead text-secondary"> Bienvenidos al sitio web de desarrolo web y programacion en php utilizando el framework laravel. </p>
            <a class="btn btn-lg btn-block btn-primary" href=" {{route('contact')}}" title=""> Contáctame</a>
             <a  class="btn btn-lg btn-block btn-outline-primary" href=" {{route('projects.index')}}" title=""> Portafolio</a>

                         <div>
                          @auth
              <h2 >{{ auth()->user()->name}}</h2>
            @endauth
                         </div>


</div>
</div>
</div>



 {{-- --}}
@endsection
