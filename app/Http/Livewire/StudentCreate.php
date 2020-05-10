<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;

class StudentCreate extends Component
{
    public $nama;
    public $email;

    public function addStudent()
    {
        $this->validate([
            'nama' => 'required|min:6',
            'email' => 'required|unique:students,email|email'
        ]);

        $student = Student::create([
            'nama' => $this->nama,
            'email' => $this->email
        ]);
        $this->resetInput();
        $this->emit('studentAdd', $student);
    }

    private function resetInput()
    {
        $this->nama = null;
        $this->email = null;
    }
    
    public function render()
    {
        return view('livewire.student-create');
    }
}
