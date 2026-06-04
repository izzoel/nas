<?php

use App\Livewire\Forms\LoginForm;
use Livewire\Component;

new class extends Component
{
    // Daftarkan Form Object di sini
    public LoginForm $form;

    public function login()
    {
        // Panggil fungsi autentikasi yang ada di dalam Form Object
        if ($this->form->authenticate()) {
            return redirect()->intended('/dashboard');
        }
    }
}; ?>
