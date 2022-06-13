<?php

namespace App\Http\Livewire\User\Permissions;

use Livewire\Component;
use App\Models\Permission;
use App\Models\Role;
use Livewire\WithPagination;

class UserPermissionsComponent extends Component
{

    public $idRole;
    use WithPagination;
    public $search;
    public $name;



    public function mount($idRole)
    {
        $role = Role::find($idRole);
        $this->name = $role->name;
        $this->idRole = $idRole;
    }

    public function render()
    {
        $all_permissions = Permission::where("name", "like", "%{$this->search}%")->orwhere('id', $this->search)->paginate(3);
        return view('livewire.user.permissions.user-permissions-component',compact('all_permissions'))->layout('layouts.secondary');
    }
}
