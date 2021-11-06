<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

      $funcionarios = Funcionario::all();
       return view('funcionario/funcionario',['funcionarios'=>$funcionarios]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Auth/register');
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
    //    Funcionario::create([
    //         'nome'=>$request->nome,
    //         'cpf'=> $request->cpf,
    //         'email'=> $request->email,
    //         'senha'=> $request->senha,
    //         'celular'=> $request->celular,
    //         'endereco'=> $request->endereco,
    //         'cep'=> $request->cep,
    //         'telefone'=> $request->telefone,
    //         'status'=>'ativo',
    //      ]);


    //    $funcionarios = Funcionario::all();
    //     return view('funcionario/funcionario',['funcionarios'=>$funcionarios]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $funcionario = Funcionario::findOrFail($id);
         return view('funcionario/funcionario_show',['funcionario'=>$funcionario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //    $funcionario = Funcionario::findOrFail($id);
    //     return view('/funcionario/funcionario_edit',['funcionario'=>$funcionario]);
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
    //    $funcionario = Funcionario::findOrFail($id);
    //    $funcionario->update($request->all());
    //     return redirect('/funcionario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Funcionario::destroy($id);
        return redirect()->route('funcionario');
    }
}
