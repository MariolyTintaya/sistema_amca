<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }
 
    public function create()
    {
        return view('clientes.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'nroDocumento' => 'required',
            'celular' => 'required',
            'nombre' => 'required',
            'ape_paterno' => 'required',
            'ape_materno' => 'required',
            'fecha_nac' => 'required|date',
            'activo' => 'required',
            'tipo_cliente_id_tipo' => 'required',
        ]);
 
        Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }
 
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }
 
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nroDocumento' => 'required',
            'celular' => 'required',
            'nombre' => 'required',
            'ape_paterno' => 'required',
            'ape_materno' => 'required',
            'fecha_nac' => 'required|date',
            'activo' => 'required',
            'tipo_cliente_id_tipo' => 'required',
        ]);
 
        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }
 
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
