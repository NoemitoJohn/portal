<?php

namespace App\Livewire\Admin;

use App\Models\Subject;
use Livewire\Component;

class AdminSubjectsModal extends Component
{
    protected $sub;
    public $subjects = [
        [
            'id' => 3,
            'section' => 'AT-2B',
            'code' => 'AT 112',
            'name' => 'MECHANICAL WORKSHOP PRACTICE 1',
            'unit' => 3,
            'students' => '21/32',
            'day' => 'MW',
            'time' => '7:30-9:30am',
            'room' => '19B',
        ],
        [
            'id' => 4,
            'section' => 'AT-3A',
            'code' => 'AT 109',
            'name' => 'DIGITAL ELECTRONICS',
            'unit' => 3,
            'students' => '10/32',
            'day' => 'TTH',
            'time' => '10:30-12:30pm',
            'room' => 'LAB',
        ],
    ];

    public function mount()
    {
        // $this->subjects = Subject::all();
    }

    public function close()
    {

        $this->dispatch('subject-modal-close')->to(AdminEnrollment::class);

    }

    public function add($id){

        foreach ($this->subjects as $subject) {
            if($subject['id'] == $id) {
                $this->sub = $subject;
            }
        }

        // dd($this->sub);
        $this->dispatch('add_subject', sub: $this->sub )->to(AdminEnrollmentSubjects::class);
        $this->close();
    }

    public function render()
    {
        return view('livewire.admin.admin-subjects-modal');
    }
}
