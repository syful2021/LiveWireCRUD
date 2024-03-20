<?php

namespace App\Livewire\Crud;

use Livewire\Component;
use App\Models\Student;
use Livewire\Attributes\Layout;
#[Layout('livewire.layouts.base')]

class AddStudentComponent extends Component
{
    public $student_id, $name, $email, $phone;
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'student_id' => 'required|unique:students',
            'name'       => 'required',
            'email'      => 'required|email|unique:students',
            'phone'      => 'required|numeric|unique:students',
        ]);
    }
    public function storeStudent()
    {
        $this->validate([
            'student_id' => 'required|unique:students',
            'name'       => 'required', 
            'email'      => 'required|email|unique:students',
            'phone'      => 'required|numeric|unique:students',
        ]);
        $data['student_id'] = $this->student_id;
        $data['name'] = $this->name;
        $data['email'] = $this->email;
        $data['phone'] = $this->phone;
        Student::create($data);
                          // flash for one time msg
        session()->flash('message', "Student added successfully!");
        $this->student_id = '';
        $this->name       = '';
        $this->email      = '';
        $this->phone      = '';
    }
    public function render()
    {
        return view('livewire.crud.add-student-component');
    }
}
