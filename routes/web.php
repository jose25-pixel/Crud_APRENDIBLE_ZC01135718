<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


*/
/*video 7´practica*/
/*Route::get('/', function (){
    $nombre = "Zabaleta";
    return view('home')->with('nombre',$nombre);
})->name('home');*/


/*Route::get('/', function () {
    $nombre = "zabaleta";
    return view('home')->with(['nombre'=>$nombre]);
})->name('home');*/

/*Route::get('/', function () {
    $nombre = "zabaleta";
    return view('home',['nombre'=>$nombre]);
})->name('home');*/

/*Route::get('/', function () {
    $nombre = "zabaleta";
    return view('home', compact('nombre'));
})->name('home');*/
/*Route::view('/', 'home');*/
/*Route::view('/', 'home', ['nombre'=>'Zabaleta']->name('home');uso politicas de pribacidad terminos y condiciones

 practica del video 9
 esta
Bienvenido@ <?php echo " <script> alert('hola')</script>"; ?>
Bienvenido@ <?php echo  $nombre ?? "invitado"; ?>
Bienvenido@    {{"<script> alert('hola')</script>"}}
*/
/*Route::resourse('projects','PortafolioController2')->only(['index','show']);*/

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::resource('portafolio','ProjectController')->names('projects')->parameters(['portafolio'=>'project']);

//->middleware('auth')

/*Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');
Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');*/

Route::get('/contact', 'PortafolioController1')->name('contact');
Route::post('/contact', 'msscontroller@store')->name('messages.store');
//Route::view('/portafolio', 'portafolio',compact('portafoliooo'))->name('portafolio');
/*Route::view('/contact', 'contact')->name('contact');*/

/*fin de la practica  del video 7*/


/*se puede cambiar la ruta */
/*Route::get('/contatos', function () {
    return 'Secion de contactos';
})->name('contactos');*/

/*
Route::get('/',function(){/*
echo "<a href='/contatos'> Contatos1 </a>";
echo "<a href='/contatos'> Contatos2 </a>";
echo "<a href='/contatos'> Contatos3 </a>";
echo "<a href='/contatos'> Contatos4 </a>";*/

/*echo "<a href='".Route('contactos')."'> Contatos1 </a>";
echo "<a href='".Route('contactos')."'> Contatos2 </a>";
echo "<a href='".Route('contactos')."'> Contatos3 </a>";
echo "<a href='".Route('contactos')."'> Contatos4 </a>";

});*/
//eliminar la ruta de registrarse
//Auth::routes( ['register'=> false] );
Auth::routes();

// eliminar ruta del login creado Route::get('/home', 'HomeController@index')->name('home');
