<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Reclamo;

class MiCuenta extends Component
{
    public $reclamos;

    public function mount()
    {
        $this->cargarReclamos();
    }

    public function cargarReclamos()
    {
        $this->reclamos = Auth::user()
            ->reclamos()
            ->with('categoria')
            ->latest()
            ->get();
    }

    public function eliminar($reclamoId)
    {
        $reclamo = Reclamo::findOrFail($reclamoId);
    
        if ($reclamo->user_id !== Auth::id()) {
            abort(403, 'No autorizado');
        }
    
        $reclamo->delete();
    
        session()->flash('success', 'Reclamo eliminado correctamente.');
    
        // Esto vuelve a montar el componente y permite mostrar el flash
        return redirect()->route('mi-cuenta');
    }

    public function render()
    {
        return view('livewire.mi-cuenta');
    }
}
