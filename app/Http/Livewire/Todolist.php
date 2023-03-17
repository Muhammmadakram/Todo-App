<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Tlist;

class Todolist extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $text;
    public function submit()
    {
       $row = new Tlist;
       $row->name = $this->text;
       $row->save();
       $this->reset(['text']);
    }

    public function delete($id){
        Tlist::find($id)->delete();
     }

// update
public $userid;
public $uname;
public $check = true;

public function edit($id){

 $this->userid = $id;
 $ak =  Tlist::find($id);
 $this->uname = $ak->name;
 $this->check = false;
}


    public $search;
    public function render()
    {
        $user = Tlist::where('name','like','%'.$this->search.'%')->paginate(6);
        return view('livewire.todolist',['item'=>$user]);
    }
}
