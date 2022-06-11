<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserDashboardComponent extends Component
{

    public $searchTerm;

    use WithPagination;
    public function render()
    {

        $searchTerm = '%'.$this->searchTerm. '%';
        $users = User::where('name','LIKE',$searchTerm)->where('delete',0)
        ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.user.user-dashboard-component',['users'=>$users])->layout('layouts.secondary');
    }
}
