<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
class Counterupdate extends Component
{



    public $uid;
    public $name;
    public $email;
    public $phone;
    public $check = true;
    public function render()
    {
        return view('livewire.counterupdate');
    }

    public function updated($field)
    {
      $this->validateOnly($field,[
          'name'=>'required',
           'email'=>'required | email',
            'phone'=>'required | min:3 | max:10',
             ]);
          }

     public function updatecounter()
     {
        $this->validate([
            'name'=>'required',
               'email'=>'required | email',
               'phone'=>'required | min:3 | max:10',
                ]);

               $count = Student::find($this->uid);
               $count->Name = $this->name;
               $count->Email = $this->email;
               $count->Phone = $this->phone;
               $count->save();
               $this->check = false;
               session()->flash('update', 'Data Updated successfully');
     }
}
