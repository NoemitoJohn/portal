<?php

namespace App\Livewire\Admin;

use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminNewStudent extends Component
{

    public $first_name;
    public $last_name;
    public $middle_name;
    public $ext_name;
    public $religion;
    public $gender;
    public $birth_date;
    public $civil_status;
    public $provice;
    public $city;
    public $barangay;
    public $street;

    public function register(){

        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'civil_status' => 'required',
            'provice' => 'required',
            'city' => 'required',
            'barangay' => 'required',
        ]);



        // dd(date('Y-m-d',strtotime($this->birth_date)));

        Student::create([
            'id_number' => '20212321',
            'password' => Hash::make('12345678'),
            'f_name' => $this->first_name,
            'l_name' => $this->last_name,
            'm_name' => $this->middle_name,
            'ex_name' => $this->ext_name,
            'gender' => $this->gender,
            'birthday' => $this->birth_date,
            'civil_status' => $this->civil_status,
            'religion' => $this->religion,
            'provice' => $this->provice,
            'city' => $this->city,
            'barangay' => $this->barangay,
        ]);

        session()->flash('success', 'Student Created');

        $this->reset();
    }


    public function render()
    {
        return view('livewire.admin.admin-new-student');
    }
}
