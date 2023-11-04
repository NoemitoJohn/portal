<?php

namespace App\Livewire;

use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Throwable;

class StudentHome extends Component
{

    public $email;
    public $password;


    public function login(){
        $validate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


           if(
               Auth::guard('admin')->attempt([
                       'email' => $this->email,
                       'password' => $this->password,
                   ])){
                    request()->session()->regenerate();

                    dd(Auth::guard('admin')->user());
           }


            // dd($e->getMessage()); // Output the error message






    }

    public function logout(){
        Auth::guard('admin')->logout();
    }
    public function render()
    {
        return view('livewire.student-home');
    }
}
