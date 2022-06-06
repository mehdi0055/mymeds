<?php

namespace App\Http\Livewire\Admin\Cabinets;

use App\Models\TypeCabinet;
use Livewire\Component;

class AdminAddCabinetComponent extends Component
{



    public $name;


    public function updated($fiedls)
    {
        $this->validateOnly($fiedls,[
            'name' => 'required|unique:type_cabinets',
        ]);
    }

    public function clear()
    {
        $this->name = "";
    }

    public function store()
    {
        $data = $this->validate([
            'name' => 'required|unique:type_cabinets'
        ]);

        TypeCabinet::create($data);
        session()->flash('success_message','Type Cabinet has been created successfully');
        
    }

    public function render()
    {
        return view('livewire.admin.cabinets.admin-add-cabinet-component')->layout('layouts.primary');
    }
}
