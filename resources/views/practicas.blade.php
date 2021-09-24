 <!-- para imprimir link de navegacion y formato json-->
		<pre>
			{{ dump(request()->url())}}
			{{ dump(request()->path())}}
		</pre>

		<pre>
			{{ dump(request()->routeIs('home'))}}

		</pre>

<!-- esto es una forma de llamar al controlador-->

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class msscontroller extends Controller
{
    public function store(Request $request){
         return $request->get('name');
    }
}


<!-- forma de mostar los errores-->
@if($errors->any())
	<ul>
		@foreach($errors->all() as $error)
	       <li>  {{$error}}</li>
	   @endforeach
	</ul>
@endif

<!-- ------------------
-->






<!--  jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj-->

 "files":["app/helpers.php"]//nuevo archivo agregado cabia ala vercion de el vi

<ul>
	    <!-- forma de usar el foreach en laravel-->
 	@isset($portafoliooo)
	 	@foreach ($portafoliooo as $pportafolioIten)
	        	<li>{{$pportafolioIten['title']}}</li>
	 	@endforeach
 	@else
 	<li>no hay proyecto par mostrar</li>
    @endisset
 </ul>

     <!-- forma de usar el foreach-->

  <ul>
  <?php foreach ($portafoliooo as $pportafolioIten) {
  	echo " <li>".$pportafolioIten['title']."</li>";
  	// code...
  } ?>
<?php foreach ($portafoliooo as $pportafolioIten): ?>
	 <li>   {{$pportafolioIten['title']}} </li>
<?php endforeach ?>

 </ul>
    <!-- forma de usar el foreach sin isset-->
 <ul>
 	@if($portafoliooo)
	 	@foreach ($portafoliooo as $pportafolioIten)
	        	<li>{{$pportafolioIten['title']}}</li>
	 	@endforeach
 	@else
 	<li>no hay proyecto par mostrar</li>
    @endif
 </ul>

 <!-- imprimiendo la variable loop-->
  <ul>
	 	@forelse ($portafoliooo as $pportafolioIten)
	        	<li>{{$pportafolioIten['title']}}<small>
	        		{{var_dump($loop-> last ?'Es el ultimo':'')}}
	        	</small></li>
	        		@empty
 	<li>no hay proyecto par mostrar</li>
	 	@endforelse
 </ul>


  <!-- controlador de invoke-->

    public function __invoke(Request $request)
    {
        $portafoliooo=[
    [ 'title' =>'Proyecto #1'],
    [ 'title' =>'Proyecto #2'],
    [ 'title' =>'Proyecto #3'],
    [ 'title' =>'Proyecto #4'],
];

    }
     return view('portafolio', compact('portafoliooo'))



  <!-- control + p para buscar archivos-->
  <!-- imprimiendo la variable loop mostrando el primero y ultimo-->
 <ul>
 		@for()
	@endfor
	@while()
	@endwhile
	@switch()
	@endswitch

	 	@forelse ($portafoliooo as $pportafolioIten)
	        	<li>{{$pportafolioIten['title']}}<small>
	        		{{var_dump($loop-> first ?'Es el Primero':'')}}
	        	</small></li>
	        		@empty

 	<li>no hay proyecto par mostrar</li>
	 	@endforelse


 </ul>