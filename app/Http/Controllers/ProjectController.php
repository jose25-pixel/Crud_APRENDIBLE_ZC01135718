<?php

namespace App\Http\Controllers;
//use DB;

use App\Project;

use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
    $this->middleware('auth')->except('index','show');
    }
    //->only('create','edit');
    public function index()
    {


 //$users = DB::table('projects')->get();
 // return view('projects.index', ['projects' => $projects]);

   return view('projects.index', [
 'projects' => Project::latest()->paginate()

   ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create',[
            'project'=> new Project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {//validacion para el formulario de nuevo proyecto
       /*$fields = request()->validate([
            'title'=>'required',
            'ulr'=>'required',
            'description'=>'required',

         ]);*/
         // return $request->validated();
         Project::create($request->validated());
         //Project::create($fields);

       // Project::create(request()->only('title','ulr','description'));
       // Project::create(request()->all());
             /*project::create([
            'title'=>request('title'),
            'ulr'=>request('ulr'),
            'description'=>request('description'),

        ]);*/
       return redirect()->route('projects.index')->with('status','El proyecto fue creado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //return $id;
       // $project = Project::find($id);
        return view('projects.show', [
        'project' => $project// Project::findOrFail($id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
      return view('projects.edit', [
        'project' => $project// Project::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update( $request->validated());
     //return $project;
        /*$project->update([
           'title'=> request('title'),
           'ulr'=> request('ulr'),
           'description'=> request('description'),

        ]);*/
    return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado con exito');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
          return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con exito');
    }
}
