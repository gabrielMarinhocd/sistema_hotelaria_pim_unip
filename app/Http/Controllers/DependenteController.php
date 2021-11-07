<?php

namespace App\Http\Controllers;
use App\Models\Dependente;
use App\Models\Hospede;

use Illuminate\Http\Request;

class DependenteController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

      $dependentes = Dependente::all();
       return view('dependente/dependente',['dependentes'=>$dependentes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      return view('dependente/dependente_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $hospede = Hospede::findOrFail($request->id_hospede);

        Dependente::create([
                 'nome'=>$request->nome,
                 'cpf'=> $request->cpf,
                 'idade'=> $request->idade,
                 'id_hospede'=> $hospede->id,
                 'status' => 'ativo',
             ]);

           $dependentes = Dependente::all();
           return view('dependente/dependente',['dependentes'=>$dependentes],['hospede'=>$hospede]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dependente = Dependente::findOrFail($id);
        $user = User::findOrFail($dependente->id_user);
         return view('dependente/dependente_show',['dependente'=>$dependente],['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $dependente = Dependente::findOrFail($id);
        // $user = User::findOrFail($dependente->id_user);
        //  return view('/dependente/dependente_edit',['dependente'=>$dependente],['user'=>$user]);
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
    //    $dependente = Dependente::findOrFail($id);
    //    $dependente->update($request->all());

    //    $user = User::findOrFail($dependente->id_user);
    //    $user->update([
    //         'name'=>$request->nome,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         $request->perfil => true,
    //         ]
    //     );

    //     return redirect('/dependente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dependente::destroy($id);
        return redirect()->route('dependente');
    }
}