<?php

namespace App\Http\Livewire;

use App\Translator;
use Livewire\Component;
use Livewire\WithPagination;

class TranslatorIndex extends Component
{
    use WithPagination;
    public $statusUpdate = false;

    protected $listeners = [
        'translatorAdd' => 'handleStore',
        'translatorUpdate' => 'handleUpdate'
    ];

    public function render()
    {
        $translators = Translator::paginate(3);

        return view('livewire.translator-index',[
            'translators' => $translators
        ]);
    }

    public function getTranslator($id)
    {
        $this->statusUpdate = true;
        $translators = Translator::find($id);

        $this->emit('getTranslator', $translators);
    }

    public function delete($id)
    {
        if ($id){
            $data = Translator::find($id);
            $data->delete();
            session()->flash('message', 'Data berhasil di hapus !');
        }
    }

    public function handleStore()
    {
        session()->flash('message', 'data berhasil di input');
    }

    public function handleUpdate()
    {
        session()->flash('message', 'Data berhasil di update');
    }
}
