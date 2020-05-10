<?php

namespace App\Http\Livewire;

use App\Translator;
use Livewire\Component;

class TranslatorCreate extends Component
{
    public $nik;
    public $nama;
    public $ijazah;
    public $bidang_keahlian;

    public function addDataTranslator()
    {
        $this->validate([
            'nik' => 'required|unique:translators,nik|min:16|max:20',
            'nama' => 'required|max:100',
            'ijazah' => 'required|max:4',
            'bidang_keahlian' => 'required|max:100'
        ]);

        $transtlator = Translator::create([
            'nik' => $this->nik,
            'nama' => $this->nama,
            'ijazah' => $this->ijazah,
            'bidang_keahlian' => $this->bidang_keahlian
        ]);
        $this->resetInput();
        $this->emit('translatorAdd', $transtlator);

    }

    private function resetInput()
    {
        $this->nik = [];
        $this->nama = [];
        $this->ijazah = [];
        $this->bidang_keahlian = [];
    }

    public function render()
    {
        return view('livewire.translator-create');
    }
}
