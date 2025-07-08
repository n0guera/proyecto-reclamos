<?php

namespace App\Http\Controllers;
use App\Models\Reclamo;
use App\Models\Categoria;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReclamoController extends Controller
{
    public function create()
    {
        $categorias = Categoria::all();
        return view('reclamos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ubicacion' => 'required|string|max:500',
            'descripcion' => 'required|string',
            'id_categoria' => 'required|exists:categorias,id',
            'foto' => 'nullable|image|max:2048',
        ]);

        $fotoPath = $request->file('foto')?->store('reclamos', 'public');

        Reclamo::create([
            'id_usuarios' => Auth::id(),
            'ubicacion' => $request->ubicacion,
            'descripcion' => $request->descripcion,
            'id_categoria' => $request->id_categoria,
            'id_estado' => 1, // Estado inicial, por ejemplo "Pendiente"
            'foto' => $fotoPath,
        ]);

        return redirect('/')->with('success', 'Reclamo enviado correctamente.');
    }
    public function adminIndex()
    {
        $reclamos = Reclamo::with(['usuario', 'categoria', 'estado'])->latest()->get();
        return view('admin.panel', compact('reclamos'));
    }

    public function misReclamos()
    {
        $reclamos = Reclamo::with(['categoria', 'estado'])
            ->where('id_usuarios', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('reclamos.mis', compact('reclamos'));
    }

    public function destroy(Reclamo $reclamo)
    {
        $reclamo->delete();

        return redirect()->route('admin.reclamos.index')->with('success', 'Reclamo eliminado correctamente.');
    }

}

