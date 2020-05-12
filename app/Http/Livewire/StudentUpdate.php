<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;

class StudentUpdate extends Component
{
    public $nama;
    public $email;
    public $studentId;

    protected $listeners = [
        'getStudent' => 'showStudent'
    ];

    public function updateStudent()
    {
        $this->validate([
            'nama' => 'required|min:6',
            'email' => 'required|email'
        ]);

        if ($this->studentId){
            $student = Student::find($this->studentId);
            $student->update([
                'nama' => $this->nama,
                'email' => $this->email
            ]);

            $this->resetInput();
            session()->flash('message', 'Data Student berhasil dirubah.');
            return redirect()->to('/students');
        }

    }

    public function render()
    {
        return view('livewire.student-update');
    }

    private function resetInput()
    {
        $this->nama = [];
        $this->email = [];
    }

    public function showStudent($student)
    {
        $this->nama = $student['nama'];
        $this->email = $student['email'];
        $this->studentId = $student['id'];
    }
}
