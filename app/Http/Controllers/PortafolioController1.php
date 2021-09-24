<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController1 extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
                  $contactos=[
    [ 'title' =>'Contactos #1'],
    [ 'title' =>'Contactos #2'],
    [ 'title' =>'Contactos #3'],
    [ 'title' =>'Contactos #4'],
];
 return view('/contact', compact('contactos'));
    }
}
