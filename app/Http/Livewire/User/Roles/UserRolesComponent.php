<?php

namespace App\Http\Livewire\User\Roles;

use Livewire\Component;
use App\Models\Role;
use Livewire\WithPagination;

class UserRolesComponent extends Component
{

    use WithPagination;
    public $search;
    public $uid;

    public function confirmDeleteRole($id)
    {
        $this->uid = $id;
    }


    public function delete()
    {
        $role = Role::find($this->uid);
        $role->delete = 1;
        $role->save();
        $this->emit('roleDeleted');
        session()->flash('danger_message', 'Role has been deleted successfully');
    }


    public function render()
    {
        $all_roles = Role::where('delete',0)->where("name", "like", "%{$this->search}%")->orwhere('id', $this->search)->paginate(3);
        $active_role = Role::where('delete',0)->where('isActive', 0)->paginate(3);
        $desactive_role = Role::where('delete',0)->where('isActive', 1)->paginate(3);
        return view('livewire.user.roles.user-roles-component', compact('all_roles', 'active_role', 'desactive_role'))->layout('layouts.secondary');
    }
}
