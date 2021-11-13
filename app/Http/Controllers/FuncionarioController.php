<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
      return view('funcionario/funcionario_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $user = User::create([
            'name'=>$request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            $request->perfil => true,
            'hospede'=> false,
            'status'=>'ativo',
        ]);

         Funcionario::create([
                 'nome'=>$request->nome,
                 'cpf'=> $request->cpf,
                 'user_id' => $user->id,
             ]);


           $funcionarios = Funcionario::all();
            return view('funcionario/funcionario',['funcionarios'=>$funcionarios]);
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
        $user = User::findOrFail($funcionario->user_id);
         return view('funcionario/funcionario_show',['funcionario'=>$funcionario],['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $user = User::findOrFail($funcionario->user_id);
         return view('/funcionario/funcionario_edit',['funcionario'=>$funcionario],['user'=>$user]);
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
       $funcionario = Funcionario::findOrFail($id);
       $funcionario->update($request->all());

       $user = User::findOrFail($funcionario->user_id);
       $user->update([
            'name'=>$request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            $request->perfil => true,
            ]
        );

        return redirect('/funcionario');
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
