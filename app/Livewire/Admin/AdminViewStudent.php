<?php

namespace App\Livewire\Admin;

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class AdminViewStudent extends Component
{
    public $students;

    public function mount(){

        $this->students = Student::all();
    }

    public function render()
    {
        return view('livewire.admin.admin-view-student');
    }
}
