<?php

namespace App\Http\Livewire\Pegawai;

use App\Pegawai;
use Livewire\Component;

class PegawaiCreate extends Component
{
    public $nip;
    public $nama_pegawai;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $email;

    public function simpanpegawai()
    {
        $this->validate([
            'nip' => 'required|unique:mpegawai,nip|max:20',
            'nama_pegawai' => 'required|max:100',
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required|max:10',
            'email' => 'required|unique:mpegawai,email|email'
        ]);

        $pegawai = Pegawai::create([
            'nip' => $this->nip,
            'nama_pegawai' => $this->nama_pegawai,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'email' => $this->email
        ]);
        
        $this->Resetinput();
        $this->emit('PegawaiAdd', $pegawai);
    }

    private function Resetinput()
    {
        $this->nip = [];
        $this->nama_pegawai = [];
        $this->tempat_lahir = [];
        $this->tanggal_lahir = [];
        $this->email = [];
    }
    
    public function render()
    {
        return view('livewire.pegawai.pegawai-create');
    }
}
