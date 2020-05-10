<?php

namespace App\Http\Livewire\Buku;

use App\Buku;
use Livewire\Component;

class BukuCreate extends Component
{
    public $nama_buku;
    public $penerbit;
    public $tahun_terbit;

    public function simpanbuku()
    {
        $this->validate([
            'nama_buku' => 'required|max:100',
            'penerbit' => 'required|max:100',
            'tahun_terbit' => 'required|max:5'
        ]);

        $buku = Buku::create([
            'nama_buku' => $this->nama_buku,
            'penerbit' => $this->penerbit,
            'tahun_terbit' => $this->tahun_terbit,
        ]);
        $this->resetInput();
        $this->emit('BukuAdd', $buku);

    }

    public function render()
    {
        return view('livewire.buku.buku-create');
    }

    private function resetInput()
    {
        $this->nama_buku = [];
        $this->penerbit = [];
        $this->tahun_terbit = [];
    }
}
