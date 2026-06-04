<?php

use Livewire\Component;

new class extends Component
{
    public string $versi;

    public function mount()
    {
        // Mengambil full pesan commit (misal: "v1.1.0 - Penambahan Flux UI")
        $fullMessage = trim(shell_exec('git log -1 --format=%s')) ?: 'v1.0.0';

        // Memecah string berdasarkan tanda " - "
        $stringParts = explode(' - ', $fullMessage);

        // Ambil bagian pertama (indeks 0). Jika tidak ada tanda "-", dia akan mengambil fullMessage.
        $this->versi = trim($stringParts[0]);
    }
};
