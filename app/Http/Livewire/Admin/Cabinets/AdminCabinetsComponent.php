<?php

namespace App\Http\Livewire\Admin\Cabinets;

use App\Models\TypeCabinet;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCabinetsComponent extends Component
{

    use WithPagination;

    public $search;


    public function changeStatus($cabinet_id)
    {
        $cabinet = TypeCabinet::find($cabinet_id);
        $cabinet->update(
            ['status' => $cabinet->status == 0 ? 1 : 0,]
        );
    }
    

    public function render()
    {
        $all_cabinets = TypeCabinet::paginate(3);
        $active_cabinets = TypeCabinet::where('status',0)->where("name","LIKE","%{$this->search}%")->paginate(3);
        $desactive_cabinets = TypeCabinet::where('status',1)->paginate(3);
        return view('livewire.admin.cabinets.admin-cabinets-component',compact('active_cabinets','desactive_cabinets','all_cabinets'))->layout('layouts.primary');
    }
}
