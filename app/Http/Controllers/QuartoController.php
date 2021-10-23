<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quarto;

class QuartoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $quartos = Quarto::all();
       return view('quarto/quarto',['quartos'=>$quartos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('quarto/quarto_add');
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
       Quarto::create(['numero'=>$request->numero,
            'andar'=>$request->andar,
            'camas'=>$request->camas,
            'tv'=>$request->tv,
            'arcondicionado'=>$request->arcondicionado,
            'descricao'=>$request->descricao,
            'img'=>$request->img,
            'status'=>'ativo'
        ]);

        $quartos = Quarto::all();
        return view('quarto/quarto',['quartos'=>$quartos]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quarto = Quarto::findOrFail($id);
        return view('quarto/quarto_show',['quarto'=>$quarto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quarto = Quarto::findOrFail($id);
        return view('/quarto/quarto_edit',['quarto'=>$quarto]);
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
        $quarto = Quarto::findOrFail($id);
        $quarto->update($request->all());
        return redirect('/quarto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quarto::destroy($id);
        return redirect()->route('quarto');
    }
}