<?php

namespace App\Livewire;

use Livewire\Component;

class StudentEnrollment extends Component
{

    public function mount(){
        sleep(5);
    }

    public function render()
    {
        return view('livewire.student-enrollment');
    }
}
