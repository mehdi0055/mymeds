<?php

namespace App\Http\Livewire\User;

use App\Models\Personnel;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class UserDashboardComponent extends Component
{

    public $search;

    use WithPagination;
    public function render()
    {

        $search = '%' . $this->search . '%';
        $personnels = Personnel::where('cabinet_id',Auth::user()->doctor->cabinet->id)->where('lname', 'LIKE', $search)->orWhere('fname', $search)
            ->orderBy('id', 'ASC')->paginate(3);
        return view('livewire.user.user-dashboard-component',['personnels'=>$personnels])->layout('layouts.secondary');
    }
}
