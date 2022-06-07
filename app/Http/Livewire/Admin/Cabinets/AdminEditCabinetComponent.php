<?php

namespace App\Http\Livewire\Admin\Cabinets;

use App\Models\TypeCabinet;
use Livewire\Component;
use Illuminate\Support\Str;


class AdminEditCabinetComponent extends Component
{
    public $id_cabinet;
    public $name;
    public $slug;
    public $status;

    public function mount($id_cabinet)
    {
        $this->id_cabinet = $id_cabinet;
        $cabinet = TypeCabinet::find($id_cabinet);
        $this->name = $cabinet->name;
        $this->slug = $cabinet->slug;
        $this->status = $cabinet->status;
    }


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => "required|unique:type_cabinets,name,{$this->id_cabinet}",
            'slug' => "required|unique:type_cabinets,slug,{$this->id_cabinet}",
            'status'=> 'required|between:0,1',
        ]);
    }


    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    public function edit()
    {
        $data = $this->validate([
            'name' => "required|unique:type_cabinets,name,{$this->id_cabinet}",
            'slug' => "required|unique:type_cabinets,slug,{$this->id_cabinet}",
            'status'=> 'required|between:0,1',
        ]);

        $cabinet = TypeCabinet::find($this->id_cabinet);

        $cabinet->update(
            [
                'name' => $this->name,
                'slug' => $this->slug,
                'status' => $this->status,
            ]
        );

        // dd($cabinet);

        session()->flash('success_message','Type cabinet has been updated successfully');
    }

    public function render()
    {
        $all_cabinets = TypeCabinet::orderBy('status','asc')->paginate(4);
        $active_cabinets = TypeCabinet::where('status',0)->get();
        $desactive_cabinets = TypeCabinet::where('status',1)->get();
        return view('livewire.admin.cabinets.admin-edit-cabinet-component',compact('all_cabinets','active_cabinets','desactive_cabinets'))->layout('layouts.primary');
    }
}
