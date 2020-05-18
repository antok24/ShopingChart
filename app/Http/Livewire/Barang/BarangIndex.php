<?php

namespace App\Http\Livewire\Barang;

use App\Barang;
use Livewire\Component;
use Livewire\WithPagination;

class BarangIndex extends Component
{
    use WithPagination;

    public $showform = false;
    public $konfirmasi;

    public $listeners = [
        'simpanBarang' => 'handlesimpanbarang',
        'updatebarang' => 'handleupdatebarang'
    ];

    public function render()
    {
        $barang = Barang::paginate(3);

        return view('livewire.barang.barang-index',[
            'barang' => $barang
        ]);
    }

    public function getBarang($kode_barang)
    {
        $this->showform = true;
        $barang = Barang::find($kode_barang);

        $this->emit('getBarang', $barang);

    }

    public function konfirmasi($kode_barang)
    {
        $this->konfirmasi = $kode_barang;
    }

    public function deletebarang($kode_barang)
    {
        if($kode_barang){
            $data = Barang::find($kode_barang);
            $data->delete();

            session()->flash('message', ''.$data['nama_barang'].' berhasil di hapus !');
            return redirect()->to('/barang');

        }

    }

    public function handlesimpanbarang($barang)
    {
        session()->flash('message','Data barang dengan nama '.$barang['nama_barang'].' berhasil disimpan');
    }

    public function handleupdatebarang($barang)
    {
        session()->flash('message','Data barang dengan nama '.$barang['nama_barang'].' berhasil diupdate');
    }
}
