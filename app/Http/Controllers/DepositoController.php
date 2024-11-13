<?php

namespace App\Http\Controllers;

use App\Models\Deposito;
 
class DepositoController extends Controller
{
    public function index()
    {
        $depositos = Deposito::all();
        return view('depositos.index', compact('depositos'));
    }
 
    public function create()
    {
        return view('depositos.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'activo' => 'required',
            'pago_id_pago' => 'required',
            'cliente_id_cliente' => 'required',
        ]);
 
        Deposito::create($request->all());
        return redirect()->route('depositos.index');
    }
 
    public function edit(Deposito $deposito)
    {
        return view('depositos.edit', compact('deposito'));
    }
 
    public function update(Request $request, Deposito $deposito)
    {
        $request->validate([
            'fecha' => 'required|date',
            'activo' => 'required',
            'pago_id_pago' => 'required',
            'cliente_id_cliente' => 'required',
        ]);
 
        $deposito->update($request->all());
        return redirect()->route('depositos.index');
    }
 
    public function destroy(Deposito $deposito)
    {
        $deposito->delete();
        return redirect()->route('depositos.index');
    }
}
tiene menú contextual