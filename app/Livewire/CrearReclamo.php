<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Reclamo;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

class CrearReclamo extends Component
{
    public $descripcion;
    public $ubicacion;
    public $categoria_id;
    public $categorias = [];

    protected $rules = [
        'descripcion' => 'required|string|min:10',
        'ubicacion' => 'required|string|max:255',
        'categoria_id' => 'required|exists:categorias,id'
    ];

    public function mount()
    {
        $this->categorias = Categoria::all();
    }

    public function submit()
    {
        $this->validate();

        Reclamo::create([
            'descripcion' => $this->descripcion,
            'ubicacion' => $this->ubicacion,
            'categoria_id' => $this->categoria_id,
            'usuario_id' => Auth::id(),
            'estado' => 'pendiente',
            'fecha_creacion' => now()
        ]);

        // Resetear formulario
        $this->reset(['descripcion', 'ubicacion', 'categoria_id']);
        
        // Emitir evento de éxito
        $this->dispatch('alert', [
            'type' => 'success',
            'message' => 'Reclamo creado exitosamente!'
        ]);
    }

    public function render()
    {
        return view('livewire.crear-reclamo');
    }
}