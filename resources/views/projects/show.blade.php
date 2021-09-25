@extends('layout')
@section('title','Portafolio |'. $project->title)
@section('content')
<div class="container">

 <div class="bg-info.bg-gradient p-5 shadow rounded text-center">


<h1> {{$project->title}}  </h1>

<p class="text-dark-50"> {{$project->ulr}}</p>
<p  class="text-dark-50">  {{$project->description}}</p>
<p  class="text-dark-50 "> {{$project->created_at->diffForHumans()}}</p>
@auth
<div class="btn-group  btn-group-lg   align-items-center ">

<a  class="btn btn-success btn-lg" href="{{route('projects.edit', $project)}}" title=""> Editar</a>

		<form action="{{route('projects.destroy',$project)}}" method="POST" accept-charset="utf-8">
			@csrf @method('DELETE')
			<button class="btn btn-danger btn-lg" >Eliminar</button>
		</form>

		   </div>
@endauth
 </div>
 </div>
@endsection()