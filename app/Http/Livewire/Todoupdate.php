<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tlist;
class Todoupdate extends Component
{
    public function render()
    {
        return view('livewire.todoupdate');
    }

    public $uid;
    public $name;
    public $check = true;

    public function todoedit()
    {
              $tod = Tlist::find($this->uid);
              $tod->name = $this->name;
              $tod->save();
              $this->check = false;
    }
}
