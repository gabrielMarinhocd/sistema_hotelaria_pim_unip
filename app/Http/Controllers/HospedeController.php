<?php

namespace App\Http\Controllers;
use App\Models\Hospede;

use Illuminate\Http\Request;

class HospedeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

       $hospedes = Hospede::all();
       return view('hospede/hospede',['hospedes'=>$hospedes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('hospede/hospede_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
       Hospede::create([
            'nome'=>$request->nome,
            'cpf'=> $request->cpf,
            'email'=> $request->email,
            'senha'=> $request->senha,
            'celular'=> $request->celular,
            'endereco'=> $request->endereco,
            'cep'=> $request->cep,
            'telefone'=> $request->telefone,
            'status'=>'ativo',
         ]);


        $hospedes = Hospede::all();
        return view('hospede/hospede',['hospedes'=>$hospedes]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hospede = Hospede::findOrFail($id);
         return view('hospede/hospede_show',['hospede'=>$hospede]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospede = Hospede::findOrFail($id);
        return view('/hospede/hospede_edit',['hospede'=>$hospede]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $hospede = Hospede::findOrFail($id);
        // $hospede->update($request->all());
        // return redirect('/hospede');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hospede::destroy($id);
        return redirect()->route('hospede');
    }
}
