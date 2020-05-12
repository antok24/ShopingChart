<?php

namespace App\Http\Livewire\Buku;

use App\Buku;
use Livewire\Component;
use Livewire\WithPagination;

class BukuIndex extends Component
{
    use WithPagination;

    public $konfirmasi;

    public $form = false;

    protected $listeners = [
        'BukuAdd' => 'handleSimpan',
        'BukuUpdate' => 'handleUpdate'
    ];
    
    public function render()
    {
        $buku = Buku::paginate(3);

        return view('livewire.buku.buku-index',[
            'buku' => $buku,
        ]);
    }

    public function getBuku($id)
    {
        $this->form = true;
        $buku = Buku::find($id);

        $this->emit('getBuku', $buku);
    }

    public function konfirmasi($id)
    {
        $this->konfirmasi = $id;
    }

    public function deleteBuku($id)
    {
        if($id){
            $data = Buku::find($id);
            $data->delete();

            session()->flash('message','Data buku berhasil dihapus');
            return redirect()->to('/buku');
        }
        
    }

    public function handleSimpan($buku)
    {
        session()->flash('message', 'Data Buku dengan Judul '.$buku['nama_buku'].' berhasil di Simpan');
    }

    public function handleUpdate($buku)
    {
        session()->flash('message', 'Data Buku dengan Judul '.$buku['nama_buku'].' berhasil di update');
    }
}
