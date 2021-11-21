<?php

namespace App\Http\Controllers;
use App\Models\Servicos_reserva;

use Illuminate\Http\Request;

class ServicosReservaController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

       $servicos_reservas = Servicos_reserva::all();
        // $item_servicos_reserva = User::findOrFail($servicos_reservas->id);
       return view('servicos_reserva/servicos_reserva',['servicos_reservas'=>$servicos_reservas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('servicos_reserva/servicos_reserva_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



            $servicos_reservas = Servicos_reserva::create([
                    'reserva_id'=>$request->reserva_id,
                    'servico_id'=> $request->servico_id,
                ]);



        //    $servicos_reservas = servicos_reserva::all();
        //     return view('servicos_reserva/servicos_reserva',['servicos_reserva'=>$servicos_reserva]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicos_reserva = Servicos_reserva::findOrFail($id);
        // $user = User::findOrFail($servicos_reserva->id_user);
         return view('servicos_reserva/servicos_reserva_show',['servicos_reserva'=>$servicos_reserva]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicos_reserva = Servicos_reserva::findOrFail($id);
        // $user = User::findOrFail($servicos_reserva->id_user);
         return view('/servicos_reserva/servicos_reserva_edit',['servicos_reserva'=>$servicos_reserva]);
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
    //    $servicos_reserva = servicos_reserva::findOrFail($id);
    //    $servicos_reserva->update($request->all());

    //    $user = User::findOrFail($servicos_reserva->id_user);
    //    $user->update([
    //         'name'=>$request->nome,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         $request->perfil => true,
    //         ]
    //     );

    //     return redirect('/servicos_reserva');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servicos_reserva::destroy($id);
        return redirect()->route('servicos_reserva');
    }
}