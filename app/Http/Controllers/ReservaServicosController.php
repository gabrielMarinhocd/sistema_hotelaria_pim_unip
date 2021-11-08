<?php

namespace App\Http\Controllers;
use App\Models\Reserva_servico;

use Illuminate\Http\Request;

class ReservaServicosController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

       $reserva_servicos = Reserva_servico::all();
        // $item_reserva_servico = User::findOrFail($reserva_servicos->id);
       return view('reserva_servico/reserva_servico',['reserva_servicos'=>$reserva_servicos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('reserva_servico/reserva_servico_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $reserva_servicos = Reserva_servico::create([
                    'id_reserva'=>$request->id_reserva,
                    'id_servico'=> $request->id_servico,
                ]);



        //    $reserva_servicos = reserva_servico::all();
        //     return view('reserva_servico/reserva_servico',['reserva_servico'=>$reserva_servico]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva_servico = Reserva_servico::findOrFail($id);
        // $user = User::findOrFail($reserva_servico->id_user);
         return view('reserva_servico/reserva_servico_show',['reserva_servico'=>$reserva_servico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva_servico = Reserva_servico::findOrFail($id);
        // $user = User::findOrFail($reserva_servico->id_user);
         return view('/reserva_servico/reserva_servico_edit',['reserva_servico'=>$reserva_servico]);
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
    //    $reserva_servico = reserva_servico::findOrFail($id);
    //    $reserva_servico->update($request->all());

    //    $user = User::findOrFail($reserva_servico->id_user);
    //    $user->update([
    //         'name'=>$request->nome,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         $request->perfil => true,
    //         ]
    //     );

    //     return redirect('/reserva_servico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reserva_servico::destroy($id);
        return redirect()->route('reserva_servico');
    }

}
