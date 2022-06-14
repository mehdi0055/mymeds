<?php

namespace App\Http\Livewire\User\Permissions;

use Livewire\Component;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Role_permission;
use Livewire\WithPagination;

class UserPermissionsComponent extends Component
{

    public $idRole;
    use WithPagination;
    public $search;
    public $permission = [];
    public $Role;

    public function mount($idRole)
    {


        $this->idRole = $idRole;


        $this->Role = Role::find($idRole);
        $role_permission = Role_permission::where('role_id', $this->idRole)->get();
        if ($role_permission) {
            foreach ($role_permission as $item) {
                $this->permission[] = $item->permission_id;
            }
        }
    }

    public function changePermission()
    {

        Role_permission::where('role_id', $this->idRole)->delete();

        $permission = $this->permission;
        if ($this->permission != "") {
            foreach ($permission as $id) {
                Role_permission::create([
                    'role_id' => $this->idRole,
                    'permission_id' => $id
                ]);
            }
        }
        session()->flash('success_message', 'Permession has been Added at role successfully');
    }

    public function render()
    {
        $all_permissions = Permission::all();
        return view('livewire.user.permissions.user-permissions-component', compact('all_permissions'))->layout('layouts.secondary');
    }
}
