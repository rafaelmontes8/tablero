<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    //
    public function view($id)
    {
        $notas=Nota::where('idTab',$id)->get();
        
    	return view('notas.ver',compact('notas'));
    }
}
