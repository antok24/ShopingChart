<?php

namespace App\Http\Livewire\Buku;

use App\Buku;
use Livewire\Component;

class BukuUpdate extends Component
{
    public $nama_buku;
    public $penerbit;
    public $tahun_terbit;
    public $bukuId;

    protected $listeners = [
        'getBuku' => 'showBuku'
    ];

    public function updatebuku()
    {
        $this->validate([
            'nama_buku' => 'required|max:100',
            'penerbit' => 'required|max:100',
            'tahun_terbit' => 'required|max:5'
        ]);

        if($this->bukuId){
            $buku = Buku::find($this->bukuId);
            $buku->update([
                'nama_buku' => $this->nama_buku,
                'penerbit' => $this->penerbit,
                'tahun_terbit' => $this->tahun_terbit,
            ]);

            $this->resetInput();
            $this->emit('BukuUpdate', $buku);
        }
    }

    public function render()
    {
        return view('livewire.buku.buku-update');
    }

    public function showBuku($buku)
    {
        $this->nama_buku = $buku['nama_buku'];
        $this->penerbit = $buku['penerbit'];
        $this->tahun_terbit = $buku['tahun_terbit'];
        $this->bukuId = $buku['id'];
    }

    private function resetInput()
    {
        $this->nama_buku = [];
        $this->penerbit = [];
        $this->tahun_terbit = [];
    }
}
