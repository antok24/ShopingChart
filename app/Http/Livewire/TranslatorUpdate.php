<?php

namespace App\Http\Livewire;

use App\Translator;
use Livewire\Component;

class TranslatorUpdate extends Component
{
    public $nik;
    public $nama;
    public $ijazah;
    public $bidang_keahlian;
    public $translatorId;

    protected $listeners = [
        'getTranslator' => 'showTranslator'
    ];

    public function UpdateDataTranslator()
    {
        $this->validate([
            'nik' => 'required|min:16|max:20',
            'nama' => 'required|max:100',
            'ijazah' => 'required|max:4',
            'bidang_keahlian' => 'required|max:100'
        ]);

        if ($this->translatorId){
            $translators = Translator::find($this->translatorId);
            $translators->update([
                'nik' => $this->nik,
                'nama' => $this->nama,
                'ijazah' => $this->ijazah,
                'bidang_keahlian' => $this->bidang_keahlian
            ]);

            $this->resetInput();
            $this->emit('translatorUpdate', $translators);

        }
    }

    public function render()
    {
        return view('livewire.translator-update');
    }
    
    public function showTranslator($translators)
    {
        $this->nik = $translators['nik'];
        $this->nama = $translators['nama'];
        $this->ijazah = $translators['ijazah'];
        $this->bidang_keahlian = $translators['bidang_keahlian'];
        $this->translatorId = $translators['id'];
    }

    private function resetInput()
    {
        $this->nik = [];
        $this->nama = [];
        $this->ijazah = [];
        $this->bidang_keahlian = [];
    }
}
