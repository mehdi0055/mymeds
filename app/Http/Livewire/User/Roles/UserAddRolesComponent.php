<?php

namespace App\Http\Livewire\User\Roles;

use Livewire\Component;
use App\Models\Role;
use Livewire\WithPagination;

class UserAddRolesComponent extends Component
{

    use WithPagination;
    public $search;

    public $name;
    public $description;
    public $isActive;


    public function store()
    {
        $data = $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'isActive'=> 'required',
        ]);

        Role::create($data);
        session()->flash('success_message','Role has been created successfully');

    }



    public function render()
    {
        $all_roles = Role::where("name","like","%{$this->search}%")->orwhere('id',$this->search)->paginate(3);
        $active_role = Role::where('isActive',0)->paginate(3);
        $desactive_role = Role::where('isActive',1)->paginate(3);
        return view('livewire.user.roles.user-add-roles-component',compact('all_roles','active_role','desactive_role'))->layout('layouts.secondary');
    }
}
