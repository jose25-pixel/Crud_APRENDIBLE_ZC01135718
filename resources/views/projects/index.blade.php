@extends('layout')
@section('title','Portafolio')
@section('content')
<div class="container">
 <div class="d-flex justify-content-between align-items-center mb-3">
<h1 class="display-4  text-center mb-0">Portafolio</h1>

@auth
<a class="btn btn-success" href=" {{route('projects.create')}} " title=""> Crear Proyecto</a>
@endauth
 </div>

 <p class="lead text-secondary"> Proyectos realizados por jose zabaleta </p>

<ul class="list-group">
 	@if($projects)
	 	@foreach ( $projects as $project)
	       <li class="list-group-item border-0 mb-3 shadow-sm"> <a  class=" text-secondary d-flex justify-content-between align-items-center" href=" {{route('projects.show', $project)}} "> <span class="font-weight-bold">  {{$project->title}} </span> <span class=" font-weight-bold"> {{$project->created_at->format('d/m/Y') }}</span>
	       	<span class=" font-weight-bold">  {{$project->description}}</span>
	       	 <span class="text-black-50">  {{$project->created_at }}   </span></a> </li>
	 	@endforeach
	 	{{$projects->links()}}
 	@else
 	<li class="list-group-item border-0 mb-3 shadow-sm">no hay proyecto par mostrar</li>
    @endif
 </ul>
</div>

@endsection