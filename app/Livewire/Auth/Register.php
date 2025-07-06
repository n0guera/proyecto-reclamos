<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Attributes\Layout; // Importa el atributo

#[Layout('layouts.guest')]
class Register extends Component
{
    public $nombre;
    public $apellido;
    public $dni;
    public $telefono;
    public $domicilio;
    public $email;
    public $password;
    public $password_confirmation;
    public $isLoading = false;

    public function register()
    {
        $this->isLoading = true;

        $user = User::create([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'dni' => $this->dni,
            'telefono' => $this->telefono,
            'domicilio' => $this->domicilio,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);
        $this->isLoading = false;
        
        return redirect()->route('dashboard')->with('success', '¡Registro exitoso!');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}