<?php

namespace App\Http\Controllers;
use App\Models\Perfil;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $perfils = Perfil::all();
       return view('perfil/perfil',['perfils'=>$perfils]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('perfil/perfil_add');
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
       //perfil::create($request->all());
        Perfil::create(['nome'=>$request->nome,
        'descricao'=> $request->descricao,
        'status'=>'ativo']);

        return view('perfil/perfil_add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perfil = Perfil::findOrFail($id);
        return view('perfil/perfil_show',['perfil'=>$perfil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfil =Perfil::findOrFail($id);
        return view('/perfil/perfil_edit',['perfil'=>$perfil]);
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
        $perfil =Perfil::findOrFail($id);
        $perfil->update($request->all());
        return redirect('/perfil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Perfil::destroy($id);
        return redirect()->route('perfil');
    }
}