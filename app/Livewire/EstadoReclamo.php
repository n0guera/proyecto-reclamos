<?php

namespace App\Livewire;

use App\Models\Estado;
use App\Models\Reclamo;
use Livewire\Component;

class EstadoReclamo extends Component
{
    public $reclamo;
    public $estado_id;

    public function mount(Reclamo $reclamo)
    {
        $this->reclamo = $reclamo;
        $this->estado_id = $reclamo->id_estado;
    }

    public function cambiarEstado()
    {
        $this->reclamo->update([
            'id_estado' => $this->estado_id
        ]);

        $this->reclamo->refresh(); // Actualiza el modelo en memoria
    }

    public function render()
    {
        return view('livewire.estado-reclamo', [
            'estados' => Estado::all()
        ]);
    }
}
