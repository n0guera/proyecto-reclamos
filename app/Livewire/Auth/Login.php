<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout; // Importa el atributo

#[Layout('layouts.guest')]
class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;
    public $isLoading = false;

    protected $rules = [
        'email' => 'required|email|max:255',
        'password' => 'required|min:8',
    ];

    public function login()
    {
        $this->validate();
        $this->isLoading = true;

        try {
            if (!Auth::attempt([
                'email' => $this->email,
                'password' => $this->password
            ], $this->remember)) {
                throw ValidationException::withMessages([
                    'email' => __('auth.failed'),
                ]);
            }

            return redirect()->intended('/mi-cuenta');
        } finally {
            $this->isLoading = false;
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}