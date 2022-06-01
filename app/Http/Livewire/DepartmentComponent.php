<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DepartmentComponent extends Component
{


    public function render()
    {
        return view('livewire.department-component')->layout('layouts.landing',['title'=>'Department']);
    }
}
