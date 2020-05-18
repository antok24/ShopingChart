<?php

namespace App\Http\Livewire\Barang;

use App\Barang;
use Livewire\Component;

class BarangUpdate extends Component
{
    public $kode_barang;
    public $nama_barang;
    public $tahun_perolehan;

    public $listeners = [
        'getBarang' => 'showBarang'
    ];

    public function updatebarang()
    {
        $this->validate([
            'kode_barang' => 'required|max:16',
            'nama_barang' => 'required|max:100',
            'tahun_perolehan' => 'required|max:5',
        ]);

        if($this->kode_barang){
            $barang = Barang::find($this->kode_barang);
            $barang->update([
                'nama_barang' => $this->nama_barang,
                'tahun_perolehan' => $this->tahun_perolehan
            ]);

            $this->resetInput();
            
            session()->flash('message', 'Data Barang berhasil dirubah');
            return redirect()->to('/barang');

        }
    }

    public function render()
    {
        return view('livewire.barang.barang-update');
    }

    public function showBarang($barang)
    {
        $this->kode_barang = $barang['kode_barang'];
        $this->nama_barang = $barang['nama_barang'];
        $this->tahun_perolehan = $barang['tahun_perolehan'];
    }

    private function resetInput()
    {
        $this->kode_barang = [];
        $this->nama_barang = [];
        $this->tahun_perolehan = [];
    }
}
