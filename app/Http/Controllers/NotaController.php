<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablero;
use App\Models\Nota;
use Carbon\Carbon;

class NotaController extends Controller
{
    //
    public function view(Request $req)
    {
        
        $notas=Nota::where('idTab',$req->input('id'))->get();
        
    	return view('notas.ver',compact('notas'));
    }

    public function addview()
    {
        $Table = Tablero::pluck('nombre','idTab');
        return view('notas.add',compact('Table')) ;
    }

    public function add(Request $request)
    {

        $request->merge([
            'fecha'   => Carbon::parse($request->date)->format('Y-m-d'),
            'completado' => 1
        ]);
        // dd($request->all());
        $request->validate(['texto' => 'string|max:150|filled']);
        $input = $request->all();
        //dd($input);
        Nota::create($input);
        return redirect('/') ;

    }

    public function editview(Request $request)
    {   
        $Table = Tablero::pluck('nombre','idTab');
        $Note = Nota::where('idNot',$request->id)->first();
        return view('notas.editar',compact('Table','Note')) ;
    }

    public function edit(Request $req)
    {
        // buscamos la nota
    	$idn = $req->id ;
        $note = Nota::find($idn);
        $note->texto = $req->texto;
        $note->idTab = $req->idTab;
    	$note->save() ;
    	
    	// redirigimos a la pantalla principal de tableros
        return redirect('/') ;
    }
}
