<?php

namespace App\Http\Livewire\User\Personnels;

use Livewire\Component;
use App\Models\Personnel;
use Livewire\WithPagination;

class UserPersonnelsComponent extends Component
{
    public $search;

    use WithPagination;
    public function render()
    {
        $search = '%' . $this->search . '%';
        $personnels = Personnel::where('lname', 'LIKE', $search)->orWhere('fname', $search)
            ->orderBy('id', 'ASC')->paginate(3);
        return view('livewire.user.personnels.user-personnels-component', ['personnels' => $personnels])->layout('layouts.secondary');
    }
}
