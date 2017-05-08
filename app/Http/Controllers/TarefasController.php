<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\listaDeTarefas;

class TarefasController extends Controller
{
    //
    public function index(){
    	return Response()->json(listaDeTarefas::orderBy('id','desc')->get(), 200);
    }

    public function store(Request $request){
    	$tarefa = new listaDeTarefas();

    	$tarefa->texto = $request->input('texto');
    	$tarefa->autor = $request->input('autor');
    	$tarefa->status = $request->input('status');

    	if ($tarefa->save()) {
    		return response('1', 201);
    	}else{
    		return response('0', 304);
    	}
    }

    public function update($id = null, Request $request){
    	$tarefa = listaDeTarefas::find($id);

    	$tarefa->status = $request->input('status');

    	if ($tarefa->save()) {
    		return response('1', 201);
    	}else{
    		return response('0', 304);    		
    	}
    }

    public function destroy($id){
    	$tarefa = listaDeTarefas::find($id);

    	if ($tarefa->delete()) {
    		return response('1', 201);
    	}else{
    		return response('0', 304);    		
    	}

    }
}
