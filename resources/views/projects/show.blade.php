@extends('layout')
@section('title','Portafolio |'. $project->title)
@section('content')
<div class="container">

 <div class="  bg-primary p-5 shadow rounded">


<h1> {{$project->title}}  </h1>

<p class="text-secondary"> {{$project->ulr}}</p>
<p  class="text-dark">  {{$project->description}}</p>
<p  class="text-dark"> {{$project->created_at}}</p>
@auth
		<a href="{{route('projects.edit', $project)}}" title=""> Editar</a>

		<form action="{{route('projects.destroy',$project)}}" method="POST" accept-charset="utf-8">
			@csrf @method('DELETE')
			<button>Eliminar</button>
		</form>
@endauth
 </div>
 </div>
@endsection()