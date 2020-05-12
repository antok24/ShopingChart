<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentIndex extends Component
{
    use Withpagination;

    public $statusUpdate = false;
    public $konfirmasi;

    protected $listeners = [
        'studentAdd' => 'handleStored',
        'StudentUpdate' => 'handleUpdate'
    ];

    public function render()
    {
        $students = Student::paginate(3);

        return view('livewire.student-index',[
            'students' => $students,
        ]);
    }

    public function getStudent($id)
    {
        $this->statusUpdate = true;
        $student = Student::find($id);

        $this->emit('getStudent', $student);
    }

    public function konfirmasi($id)
    {
        $this->konfirmasi = $id;
    }

    public function delete($id)
    {
        if($id){
            $data = Student::find($id);
            $data->delete();

            session()->flash('message', 'Data berhasil di hapus');
            return redirect()->to('students');
        }
    }

    public function handleStored($student)
    {
        session()->flash('message', 'Data Student '.$student['nama'].' berhasil diinput');
    }

    public function handleUpdate($student)
    {
        session()->flash('message', 'Data Student '.$student['nama'].' berhasil di update');
    }
}
