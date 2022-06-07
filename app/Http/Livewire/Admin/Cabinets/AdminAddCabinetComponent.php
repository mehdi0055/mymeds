<?php

namespace App\Http\Livewire\Admin\Cabinets;

use App\Models\TypeCabinet;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class AdminAddCabinetComponent extends Component
{

    use WithPagination;

    public $name;
    public $slug;
    public $status;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required|unique:type_cabinets',
            'slug' => 'required|unique:type_cabinets',
            'status'=> 'required|between:0,1',
        ]);
    }

    public function clear()
    {
        $this->name = "";
        $this->slug ="";
        $this->status = "";
    }

    

    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }
    public function store()
    {
        $data = $this->validate([
            'name' => 'required|unique:type_cabinets',
            'slug' => 'required|unique:type_cabinets',
            'status'=> 'required|between:0,1',
        ]);

        TypeCabinet::create($data);
        session()->flash('success_message','Type Cabinet has been created successfully');
        $this->clear();
    }

    public function render()
    {
        $all_cabinets = TypeCabinet::orderBy('status','asc')->paginate(4);
        $active_cabinets = TypeCabinet::where('status',0)->get();
        $desactive_cabinets = TypeCabinet::where('status',1)->get();
        return view('livewire.admin.cabinets.admin-add-cabinet-component',compact('all_cabinets','active_cabinets','desactive_cabinets'))->layout('layouts.primary');
    }
}
