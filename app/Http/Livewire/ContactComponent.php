<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        $title = __('language.contact');
        return view('livewire.contact-component')->layout('layouts.landing',compact('title'));
    }
}
