@extends('layout')
@section('title','Crear proyecto')
@section('content')

<div class="container">

<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto ">


@include('partials.validation-errors')

			<form   class="bg-primary shadow rounded py-3 px-4" action="{{route('projects.update', $project)}}" method="POST" accept-charset="utf-8">
				<h1 class="display-4" >Editar Proyectos</h1>

					<input type="hidden" name="_method" value="PATCH">
				 {{-- @method('PATCH')--}}
			@include('projects._form',['btnText'=>'Actualizar'])

			</form>
</div>
</div>
</div>



@endsection