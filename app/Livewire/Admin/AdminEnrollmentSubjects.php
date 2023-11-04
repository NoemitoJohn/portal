<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\On;

class AdminEnrollmentSubjects extends Component
{
    protected $id;

    public $subjects = [
        [
            'id' => 1,
            'section' => 'AT-1A',
            'code' => 'AT-101',
            'name' => 'Intro to Automotive',
            'unit' => 3,
            'students' => '21/32',
            'day' => 'MW',
            'time' => '7:30-9:30am',
            'room' => '19B',
        ],
        [
            'id' => 2,
            'section' => 'AT-2B',
            'code' => 'AT-103',
            'name' => 'Intro to Electronics',
            'unit' => 3,
            'students' => '10/32',
            'day' => 'TTH',
            'time' => '10:30-12:30pm',
            'room' => 'LAB',
        ],
    ];

    public function mount(){

    }

    public function remove($_id){
        $this->subjects  = array_filter($this->subjects, function($element) use($_id) {
            return $element['id'] !== $_id;
        });
    }


    #[On('add_subject')]
    public function add($sub){
        array_push($this->subjects, $sub);

    }

    public function render()
    {
        return view('livewire.admin.admin-enrollment-subjects');
    }
}
