<?php

namespace App\Http\Livewire\Pegawai;

use App\Pegawai;
use Livewire\Component;

class PegawaiIndex extends Component
{
    public $showform = false;

    protected $listeners = [
        'PegawaiAdd' => 'handleSimpanpegawai',
        'PegawaiUpdate' => 'handleUpdatepegawai'
    ];

    public function render()
    {
        $pegawai = Pegawai::paginate(3);

        return view('livewire.pegawai.pegawai-index',[
            'pegawai' => $pegawai,
        ]);
    }

    public function getPegawai($nip)
    {
        $this->showform = true;
        $pegawai = Pegawai::find($nip);

        $this->emit('getPegawai', $pegawai);
    }

    public function delete($nip)
    {
        if($nip){
            $data = Pegawai::find($nip);
            $data->delete();
            session()->flash('message', 'data pegawai berhasil dihapus!');
        }
    }

    public function handleSimpanpegawai($pegawai)
    {
        session()->flash('message','Data Pegawai, nama '.$pegawai['nama_pegawai'].' berhasil disimpan');
    }

    public function handleUpdatepegawai($pegawai)
    {
        session()->flash('message','Data Pegawai, nama '.$pegawai['nama_pegawai'].' berhasil diupdate');
    }
}
