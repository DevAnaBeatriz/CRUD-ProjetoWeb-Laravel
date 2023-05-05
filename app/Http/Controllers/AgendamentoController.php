<?php

namespace App\Http\Controllers;

use App\Models\Models\ModelAgendamento;
use App\Http\Request\AgendamentoRequest;
use App\Models\User;

class AgendamentoController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function queries()
    {
            $agendamento=ModelAgendamento::all();
           return view('consulta', compact('agendamento'));
    }


    
    public function index()
    {          
           return view('index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        return view('index', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\App\Http\Requests\AgendamentoRequest $request)
    {
        $cad=ModelAgendamento::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'origem' => $request->origem,
            'data_contato' => $request->data_contato,
            'observacao' => $request->observacao,
          ]);
          if($cad){
            return redirect('/consulta'); } 
            
          /** return "Cadastrado com sucesso!"; */

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $agendamento=ModelAgendamento::find($id);
           return view('show', compact('agendamento'));
             
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agendamento=ModelAgendamento::find($id);
           return view('edit', compact('agendamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\AgendamentoRequest $request, string $id)
    {        
       ModelAgendamento::where(['id'=>$id])->update([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'origem' => $request->origem,
            'data_contato' => $request->data_contato,
            'observacao' => $request->observacao,
          ]);
            return redirect('/consulta'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {      
     if( $agendamento = ModelAgendamento::findOrFail($id)){
      $agendamento->delete();}
      return redirect('/consulta');
    }
    public function delete($id){
      $agendamento=ModelAgendamento::find($id);
      return view('delete', compact('agendamento'));
  }

}
