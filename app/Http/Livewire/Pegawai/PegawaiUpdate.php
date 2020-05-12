<?php

namespace App\Http\Livewire\Pegawai;

use App\Pegawai;
use Livewire\Component;

class PegawaiUpdate extends Component
{
    public $nip;
    public $nama_pegawai;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $email;

    protected $listeners = [
        'getPegawai' => 'showPegawai'
    ];

    public function updatepegawai()
    {
        $this->validate([
            'nama_pegawai' => 'required|max:100',
            'tempat_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required|max:10',
            'email' => 'required|email'
        ]);

        if($this->nip){
            $pegawai = Pegawai::find($this->nip);
            $pegawai->update([
                'nama_pegawai' => $this->nama_pegawai,
                'tempat_lahir' => $this->tempat_lahir,
                'tanggal_lahir' => $this->tanggal_lahir,
                'email' => $this->email
            ]);
            
            $this->Resetinput();
            session()->flash('message', 'Post successfully updated.');
            return redirect()->to('/pegawai');
        }
    }

    public function render()
    {
        return view('livewire.pegawai.pegawai-update');
    }

    public function showPegawai($pegawai)
    {
        $this->nip = $pegawai['nip'];
        $this->nama_pegawai = $pegawai['nama_pegawai'];
        $this->tempat_lahir = $pegawai['tempat_lahir'];
        $this->tanggal_lahir = $pegawai['tanggal_lahir'];
        $this->email = $pegawai['email'];
    }

    private function Resetinput()
    {
        $this->nip = [];
        $this->nama_pegawai = [];
        $this->tempat_lahir = [];
        $this->tanggal_lahir = [];
        $this->email = [];
    }
}
