<?php

namespace App\Http\Livewire\User\Settings;

use App\Models\Cabinet;
use App\Models\TypeCabinet;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class UserSettingsComponent extends Component
{

    use WithFileUploads;

    public $cabinet;
    public $address;
    public $phone_cabinet;
    public $name_cabinet;
    public $email_cabinet;
    public $theme_cabinet;
    public $type_id;
    public $profile;

    public function mount()
    {
        $this->cabinet = Auth::user()->doctor->cabinet->first();
        $this->address = $this->cabinet->address_cabinet;
        $this->email_cabinet = $this->cabinet->email_cabinet;
        $this->phone_cabinet = $this->cabinet->phone_cabinet;
        $this->name_cabinet = $this->cabinet->name_cabinet;
        $this->type_id = $this->cabinet->type_id;
        $this->theme_cabinet = $this->cabinet->theme_cabinet;
    }

    public function editCabinet()
    {
        $cabinet = Cabinet::find($this->cabinet->id);
        $cabinet->email_cabinet = $this->email_cabinet;
        $cabinet->phone_cabinet = $this->phone_cabinet;
        $cabinet->address_cabinet = $this->address;
        $cabinet->name_cabinet = $this->name_cabinet;
        $cabinet->type_id = $this->type_id;
        $cabinet->theme_cabinet = $this->theme_cabinet;
        $cabinet->updated_at = Carbon::now();
        if ($this->profile) {
            $imagename = Carbon::now()->timestamp . '.' . $this->profile->extension();
            $this->profile->storeAs('primary/assets/images/cabinets/', $imagename);
        } else {
            $imagename = "cabinet1.png";
        }
        $cabinet->logo_cabinet = $imagename;
        $cabinet->save();

        // dd($this->theme_cabinet);
        //$theme_jdid = $this->theme_cabinet;
        // session()
        //session(['theme-new'=>$this->theme_cabinet]);
        session()->flash('message_success', 'Cabinet has been successfully Update');
        // $this->render();
    }



    public function render()
    {
        $types = TypeCabinet::where('status', 0)->get();
        return view('livewire.user.settings.user-settings-component', compact('types'))->layout('layouts.secondary');
    }
}
