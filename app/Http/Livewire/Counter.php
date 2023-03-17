<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class Counter extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public function render()
    {
        $user = Student::where('Name','like','%'.$this->search.'%')->paginate(2);
        return view('livewire.counter',['item'=>$user]);
    }

     public $name , $email , $phone;

      public function updated($field)
   {
     $this->validateOnly($field,[
         'name'=>'required',
          'email'=>'required | email',
           'phone'=>'required | min:3 | max:10',
            ]);
         }

     public function submit()
    {
       $this->validate([
         'name'=>'required',
            'email'=>'required | email',
            'phone'=>'required | min:3 | max:10',
             ]);

             $res = new Student;
             $res->Name = $this->name;
             $res->Email = $this->email;
             $res->Phone = $this->phone;
             $res->save();
             session()->flash('message', 'Data Added successfully');
                $this->reset(['name','email','phone']);

     }





         public function delete($id){
            Student::find($id)->delete();
            session()->flash('delete', 'Data Deleted successfully');
         }


         public $userid;
         public $uname;
         public  $uemail;
         public  $uphone;
         public $check = true;

         public function edit($id){
          $this->userid = $id;
          $ak =  Student::find($id);
          $this->uname = $ak->Name;
          $this->uemail = $ak->Email;
          $this->uphone = $ak->Phone;
          $this->check = false;
         }
}
