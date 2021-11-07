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
    public function index(Request $request) {

        $dependentes = Dependente::all();
        $hospede = Hospede::findOrFail($request->id);

            return view('dependente/dependente',['dependentes'=>$dependentes],['hospede'=>$hospede]);

            // $grouped = $dependentes->groupBy('id_hospede');
            // $grouped->all();


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
        $hospede = Hospede::findOrFail($dependente->id_hospede);
         return view('dependente/dependente_show',['dependente'=>$dependente],['hospede'=>$hospede]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dependente = Dependente::findOrFail($id);
         return view('/dependente/dependente_edit',['dependente'=>$dependente]);
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
       $dependente = Dependente::findOrFail($id);
       $dependente->update($request->all());
       $hospede = Hospede::findOrFail($id);
       $dependentes = Dependente::all();

       return view('dependente/dependente',['dependentes'=>$dependentes],['hospede'=>$hospede]);
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
