@extends('layout')
@section('title','Crear proyecto')
@section('content')

<div class="container">

<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">


		@include('partials.validation-errors')

		<form   class="bg-primary shadow rounded py-3 px-4" action="{{route('projects.store')}}" method="POST" accept-charset="utf-8">
            <h1 class="display-4 text-center">  Nuevo Proyecto</h1>
            <hr>
		@include('projects._form',['btnText'=>'Guardar'])

		</form>
</div>
</div>
</div>
@endsection