@extends('layout')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">


  {{--  @if($errors->any())
	<ul>
		@foreach($errors->all() as $error)
	       <li>  {{$error}}</li>
	   @endforeach
	</ul>
@endif--}}
{{--- Formulario--}}
<form class="bg-primary shadow rounded py-3 px-4" method="post" action="{{route('messages.store')}}" accept-charset="utf-8">
	<h1 class="display-4 text-center"> {{__('Contact')}} </h1>
	<hr>
	@csrf
	<div class="form-group text-center label-floating">
		<label for="name" class="">Nombre</label>
	<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror
	" id="name" type="" name="name" placeholder="Nombre. ." value="{{old('name')}}">
	@error('name')
	   <span class="invalid-feedback" role="alert">
	   	<strong>{{ $message }}</strong>
	   </span>
	@enderror
   {{-- 	{!!$errors->first('name', '<small>:message</small> <br>')!!}--}}
	</div>
	{{---++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
   <div class="form-group text-center">
	   	<label for="email">Email</label>
		<input  class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"id="email" type="" name="email" placeholder="Email..." value=" {{old('email')}} ">
		@error('email')
		   <span class="invalid-feedback" role="alert">
		   	<strong>{{ $message }}</strong>
		   </span>
		@enderror
	{{--   <br>{!!$errors->first('email', '<small>:message</small> <br>')!!}--}}
	</div>
	{{---++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
	<div class="form-group text-center">
		<label for="subject">Asunto</label>
		<input  class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" type="" id="subject" name="subject" placeholder="Asunto...." value="{{old('subject')}}">
			@error('subject')
		   <span class="invalid-feedback" role="alert">
		   	<strong>{{ $message }}</strong>
		   </span>
		@enderror
 {{--	 <br>
		{!!$errors->first('subject', '<small>:message</small> <br>')!!}--}}
	</div>
	{{---++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
	<div class="form-group text-center">
			<label for="content">Contenido</label>
			<textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror" id="content" name="content" placeholder="Mensaje....">{{old('content')}}</textarea>
		 	@error('content')
			   <span class="invalid-feedback" role="alert">
			   	<strong>{{ $message }}</strong>
			   </span>
			@enderror

       {{--	<br>
		{!!$errors->first('content', '<small>:message</small> <br>')!!} --}}
	</div>
	{{---++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++--}}
       <button type="" class="btn btn-success btn-lg btn-block"> Enviar</button>
	</form>

		</div>

	</div>


</div>


@endsection