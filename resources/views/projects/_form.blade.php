	@csrf
	 <div class="form-group">
           	<label>
	Titulo del proyecto  </label>
<input class="form-control bg-light shadow-sm border-0"  type="text" name="title" placeholder=" " value="{{old('title',$project->title)}} ">

 </div>

<div class="form-group">
<label>
	URL del proyecto </label>
<input class="form-control bg-light shadow-sm border-0" type="text" name="ulr" placeholder=" " value="{{old('ulr',$project->ulr)}}">

</div>

<div class="form-group">
<label>
	Descripciion de proyecto  </label>

<textarea class="form-control bg-light shadow-sm border-0" name="description">{{old('description',$project->description)}} </textarea>
</div>

<button class="btn btn-success btn-lg btn-block">{{$btnText}}</button>