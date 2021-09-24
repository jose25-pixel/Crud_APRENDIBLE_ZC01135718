@extends('layout')
@section('title','Crear proyecto')
@section('content')
<h1>Editar Proyectos</h1>

@include('partials.validation-errors')

<form action="{{route('projects.update', $project)}}" method="POST" accept-charset="utf-8">

		<input type="hidden" name="_method" value="PATCH">
	 {{-- @method('PATCH')--}}
@include('projects._form',['btnText'=>'Actualizar'])

</form>


@endsection