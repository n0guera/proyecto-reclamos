<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamo;
use Illuminate\Support\Facades\Auth;

class ReclamoController extends Controller
{
    public function create()
    {
        $categorias = \App\Models\Categoria::all();
        return view('reclamos.create', compact('categorias'));
    }

//     public function store(Request $request)
// {
//     $request->validate([
//         'descripcion' => 'required|string',
//         'ubicacion' => 'required|string',
//         'categoria_id' => 'required|exists:categorias,id',
//     ]);


//     Reclamo::create([
//         'descripcion' => $request->descripcion,
//         'ubicacion' => $request->ubicacion,
//         'categoria_id' => $request->categoria_id,
//         'usuario_id' => Auth::id(),
//         'estado' => 'pendiente',
//     ]);

//     return redirect()->route('dashboard')->with('success', 'Reclamo enviado correctamente.');
// }
}
