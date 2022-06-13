<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\ContactUsAdmin;
use Livewire\Component;

class AdminShowMessageComponent extends Component
{

    public $contact_id;

    public function mount($contact_id)
    {
        $contact = ContactUsAdmin::find($contact_id);
        $this->contact_id = $contact->id;
        $contact->update(['read'=>1]);
    }



    public function render()
    {
        $contact_not_read = ContactUsAdmin::where('read',0)->where('delete',0)->where('archive',0)->get();
        $contact_trash = ContactUsAdmin::where('trash',1)->get();
        $contact_start = ContactUsAdmin::where('start',1)->where('trash',0)->get();
        $contact_archived = ContactUsAdmin::where('archive',1)->get();


        $contact = ContactUsAdmin::find($this->contact_id);
        return view('livewire.admin.contacts.admin-show-message-component',compact('contact','contact_not_read','contact_trash','contact_start','contact_archived'))->layout('layouts.primary');
    }
}
