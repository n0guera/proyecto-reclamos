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

    public $formKey;

    protected $rules = [
        'descripcion' => 'required|string|min:10',
        'ubicacion' => 'required|string|max:255',
        'categoria_id' => 'required|exists:categorias,id'
    ];

    public function mount()
    {
        $this->categorias = Categoria::all();

        $this->formKey = uniqid();
    }

    public function submit()
    {

        $this->validate();

        Reclamo::create([
            'descripcion' => $this->descripcion,
            'ubicacion' => $this->ubicacion,
            'categoria_id' => $this->categoria_id,
            'user_id' => Auth::id(),
            'estado' => 'pendiente',
        ]);

        // Resetear formulario
        $this->reset(['descripcion', 'ubicacion', 'categoria_id']);

        $this->formKey = uniqid();

        // Emitir evento de éxito
        session()->flash('success', '¡Reclamo creado exitosamente!');

    }

    public function render()
    {
        return view('livewire.crear-reclamo');
    }
}