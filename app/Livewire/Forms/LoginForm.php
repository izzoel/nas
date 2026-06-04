<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Form
{
    #[Rule('required|email')]
    public $email = '';

    #[Rule('required')]
    public $password = '';

    public $remember = false;

    public function authenticate()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            return true;
        }

        // Jika gagal, lempar error kembali ke input email
        $this->addError('email', 'Email atau password salah.');
        return false;
    }
}
