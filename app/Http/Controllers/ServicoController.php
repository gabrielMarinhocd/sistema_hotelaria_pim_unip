<?php

namespace App\Http\Controllers;
use App\Models\Servico;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $servicos = Servico::all();
       return view('servico/servico',['servicos'=>$servicos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('servico/servico_add');
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
       //servico::create($request->all());

        // Servico::create(['nome'=>$request->nome,
        // 'descricao'=> $request->descricao,
        // 'status'=>'ativo']);

        // return view('servico/servico_add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servico = Servico::findOrFail($id);
        return view('servico/servico_show',['servico'=>$servico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $servico = Servico::findOrFail($id);
        // return view('/servico/servico_edit',['servico'=>$servico]);
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
        // $servico = Servico::findOrFail($id);
        // $servico->update($request->all());
        // return redirect('/servico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       servico::destroy($id);
        return redirect()->route('servico');
    }
}