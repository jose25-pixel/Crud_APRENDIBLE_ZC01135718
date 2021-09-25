	@csrf
	 <div class="form-group text-center">
           	<label class=""  >
	Titulo del proyecto  </label>
<input class="form-control bg-light shadow-sm border-0"  type="text" name="title" placeholder=" " value="{{old('title',$project->title)}} ">

 </div>

<div class="form-group text-center">
<label  >
	URL del proyecto </label>
<input class="form-control  bg-light shadow-sm border-0" type="text" name="ulr" placeholder=" " value="{{old('ulr',$project->ulr)}}">

</div>

<div class=" text-center form-group">
<labe class="">
	Descripción de proyecto  </label>

<textarea class="form-control bg-light shadow-sm border-0" name="description">{{old('description',$project->description)}} </textarea>
</div>

<button class="btn btn-success btn-lg btn-block">{{$btnText}}</button>
 <a  class="btn btn-dark text-white btn-block" href="{{ route('projects.index') }} " title=""> Cancelar</a>