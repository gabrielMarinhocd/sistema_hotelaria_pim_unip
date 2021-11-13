<?php

namespace App\Http\Controllers;
use App\Models\Reserva;
use Illuminate\Support\Carbon;
use App\Models\Item_reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

       $reservas = Reserva::all();
        // $item_reserva = User::findOrFail($reservas->id);
       return view('reserva/reserva',['reservas'=>$reservas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('reserva/reserva_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $reservas = Reserva::create([
                    'data'=>now(),
                    'valor'=> $request->valor,
                    'registro_saida' => $request->registro_saida,
                    'registro_entrada'=> $request->registro_entrada,
                    'hospede_id'=> $request->hospede_id,
                    'status'=> 'ativo',
                ]);

                //  dd($reservas);

             $item_reserva =  Item_reserva::create([
                    'entrada'=>now(),
                    'saida'=> $request->saida,
                    'forma_pagamento' => $request->forma_pagamento,
                    'reserva_id'=> $reservas->id,
                    'quarto_id'=> $request->quarto_id,
                    'status'=> 'ativo',
                ]);




           $reservas = Reserva::all();
            return view('reserva/reserva',['reservas'=>$reservas], ['item_reserva'=>$item_reserva]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = Reserva::findOrFail($id);
        // $user = User::findOrFail($reserva->user);
         return view('reserva/reserva_show',['reserva'=>$reserva],['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        // $user = User::findOrFail($reserva->user);
         return view('/reserva/reserva_edit',['reserva'=>$reserva],['user'=>$user]);
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
    //    $reserva = Reserva::findOrFail($id);
    //    $reserva->update($request->all());

    //    $user = User::findOrFail($reserva->user);
    //    $user->update([
    //         'name'=>$request->nome,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         $request->perfil => true,
    //         ]
    //     );

    //     return redirect('/reserva');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reserva::destroy($id);
        return redirect()->route('reserva');
    }
}
