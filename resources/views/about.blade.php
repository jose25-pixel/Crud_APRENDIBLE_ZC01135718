@extends('layout')
@section('content')


<div class="container ">
    <div class="row ">
        <div class="col-12 col-sm-10 col-lg-6">
          <img class="img-fluid mb-4" src="/img/contacto.png" alt="">

            </div>
        <div class="col-12 col-sm-10 col-lg-6  text-center ">
            <h1 class="display-4 text-primary" > Quien soy</h1>

            <p class="lead text-secondary"><span> Mi nombre es Jose Cruz Zabaleta </span> </p>
            <p class="lead text-secondary"> Trabajo en refrigeracion linea blanca hogar, ademas  estudio Lic. en Ciencias de la Computacion, tengo conocimiento en desarrolo web utilizando el lenguaje de programacon php </p>
            <a class="btn btn-lg btn-block btn-primary" href=" {{route('contact')}}" title=""> Contáctame</a>
             <a  class="btn btn-lg btn-block btn-outline-primary" href=" {{route('projects.index')}}" title=""> Portafolio</a>
</div>
</div>
</div>




@endsection