<?php

namespace App\Http\Livewire\Barang;

use App\Barang;
use Livewire\Component;

class BarangCreate extends Component
{
    public $kode_barang;
    public $nama_barang;
    public $tahun_perolehan;

    public function render()
    {
        return view('livewire.barang.barang-create');
    }

    public function simpanbarang()
    {
        $this->validate([
            'kode_barang' => 'required|unique:mbarang,kode_barang|max:16',
            'nama_barang' => 'required|max:100',
            'tahun_perolehan' => 'required|max:5',
        ]);

        $barang = Barang::create([
            'kode_barang' => $this->kode_barang,
            'nama_barang' => $this->nama_barang,
            'tahun_perolehan' => $this->tahun_perolehan
        ]);
        $this->resetInput();
        $this->emit('simpanBarang', $barang);
    }

    private function resetInput()
    {
        $this->kode_barang = [];
        $this->nama_barang = [];
        $this->tahun_perolehan = [];
    }
}
