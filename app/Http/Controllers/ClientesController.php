<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClienteRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;


class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    public function create(){
        return view('create');
    }

    public function store(CreateClienteRequest $request){
        $cliente = new Cliente();
        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        return redirect()->route('clientes');
    }

    public function edit($id){
        $cliente = Cliente::find($id);
        return view('edit', compact('cliente'));
    }

    public function update(CreateClienteRequest $request, $id){
        $cliente = Cliente::find($id);
        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        return redirect()->route('clientes');
    }

    public function destroy($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('clientes');
    }
}
