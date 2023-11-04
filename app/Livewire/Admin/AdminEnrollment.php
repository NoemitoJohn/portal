<?php

namespace App\Livewire\Admin;

use App\Models\Student;
use App\Models\Subject;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\On;

class AdminEnrollment extends Component
{
    private $id;
    public $year_level = '3rd';
    public $first_name;
    public $last_name;
    public $ext_name;
    public $isOpen = false;


    public function mount(){

        $id = Route::current()->parameter('id');
        $student = Student::where('id', (int)$id)->first();
        $this->first_name = $student->f_name;
        $this->last_name = $student->l_name;
        $this->ext_name = $student->ex_name;


        // dd($subjects);
    }

    public function add($id){
        dd($id);
    }

    public function render()
    {
        return view('livewire.admin.admin-enrollment');
    }

    #[On('subject-modal-close')]
    public function toogle(){
        $this->isOpen = !$this->isOpen;

    }
}
