<?php

namespace App\Http\Livewire\User\Personnels;

use Livewire\Component;
use App\Models\Personnel;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class UserPersonnelsComponent extends Component
{
    public $search;

    use WithPagination;
    public function render()
    {
        $search = '%' . $this->search . '%';
        $personnels = Personnel::where('cabinet_id', Auth::user()->doctor->cabinet->id)->where('lname', 'LIKE', $search)->orWhere('fname', $search)
            ->orderBy('id', 'ASC')->paginate(3);
        return view('livewire.user.personnels.user-personnels-component', ['personnels' => $personnels])->layout('layouts.secondary');
    }
}
