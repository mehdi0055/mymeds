<?php

namespace App\Http\Livewire\Admin\Cabinets;

use App\Models\TypeCabinet;
use Livewire\Component;

class AdminEditCabinetComponent extends Component
{
    public $slug_cabinet;
    public $name;
    public $slug;
    public $status;

    public function mount($slug_cabinet)
    {
        $this->slug_cabinet = $slug_cabinet;
        $cabinet = TypeCabinet::where('slug',$slug_cabinet)->first();
        $this->name = $cabinet->name;
        $this->slug = $cabinet->slug;
    }



    public function edit()
    {
        $data = $this->validate([
            'name' => 'required|unique:type_cabinets',
            'slug' => 'required|unique:type_cabinets',
            'status'=> 'required|between:0,1',
        ]);

        
    }

    public function render()
    {
        return view('livewire.admin.cabinets.admin-edit-cabinet-component');
    }
}
