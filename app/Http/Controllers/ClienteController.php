<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientes = Cliente::all();
        return view('clientes',compact('clientes'));
    }


    public function create()
    {
        //
        return view('create');
    }


    public function store(Request $request){
        $request->validate([
            'nombres' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes',
            'direccion' => 'required|string|max:255',
            'fono' => 'required|string|max:15',
        ], [
            'nombres.required' => 'El campo nombres es obligatorio.',
            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'El campo email debe ser una dirección válida.',
            'email.unique' => 'El Email ingresado ya está registrado.',
            'direccion.required' => 'El campo dirección es obligatorio.',
            'fono.required' => 'El campo teléfono es obligatorio.',
        ]);
        

        $cliente = new Cliente();
        $cliente ->nombres = $request->nombres;
        $cliente ->email = $request->email;
        $cliente ->direccion = $request->direccion;
        $cliente ->fono = $request->fono;
        $cliente->save();
        
        return redirect()->route('web.clientes')->with('success', 'Cliente creado con éxito');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $cliente = Cliente::find($id);
        return view('show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        
        $cliente = Cliente::find($id);
        return view('edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $cliente = Cliente::find($id);
        $request->validate([
            'nombres' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes,email,'.$id,
            'direccion' => 'required|string|max:255',
            'fono' => 'required|string|max:15',
        ], [
            'nombres.required' => 'Para actualizar, el campo nombres es obligatorio.',
            'email.required' => 'Para actualizar, el campo email es obligatorio.',
            'email.email' => 'Para actualizar, el campo email debe ser una dirección válida.',
            'email.unique' => 'Email ingresado ya está registrado.',
            'direccion.required' => 'Para actualizar, el campo dirección es obligatorio.',
            'fono.required' => 'Para actualizar, el campo teléfono es obligatorio.',
        ]);
        
        $cliente ->nombres = $request->nombres;
        $cliente ->email = $request->email;
        $cliente ->direccion = $request->direccion;
        $cliente ->fono = $request->fono;
        $cliente->save();
        
        return redirect()->route('web.clientes')->with('success', 'Datos del cliente actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        Cliente::destroy($id);
        return redirect()->route('web.clientes')->with('success', 'Cliente eliminado con éxito');
    }
}
