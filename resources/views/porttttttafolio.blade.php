@extends('layout')
@section('title','Portafolio')
@section('content')
<h1>Portafolio</h1>




<ul>


 	@if($projects)
	 	@foreach ( $projects as $project)
	       <li> <a href=" {{route('portafolio.show', $project)}} "> {{$project->title}} <br> <small> {{$project->description}}  <br>{{$project->created_at }} </small> </a> </li>
	 	@endforeach
	 	{{$projects->links()}}
 	@else
 	<li>no hay proyecto par mostrar</li>
    @endif
 </ul>


@endsection