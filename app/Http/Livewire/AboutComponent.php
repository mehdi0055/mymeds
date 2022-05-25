<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $title = __('language.about');
        return view('livewire.about-component')->layout('layouts.landing',compact('title'));
    }
}
