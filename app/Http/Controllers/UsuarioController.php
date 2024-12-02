<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Usuario::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nombre'=>'string|required',
            'telefono'=>'string|required',
            'correo'=>'string|required',
            'contrasena'=>'string|required',
        ]);

        $user = Usuario::create($validate);

        return response()->json($user, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return response()->json($usuario, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $validate = $request->validate([
            'nombre'=>'string|required',
            'telefono'=>'string|required',
            'correo'=>'string|required',
            'contrasena'=>'string|required',
        ]);

        $usuario->update($validate);

        return response()->json($usuario);
    }

    /**
     * Remove t he specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return response()->json('Usuario Eliminado.');
    }
}
