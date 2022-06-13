<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\ContactUsAdmin;
use Livewire\Component;
use Livewire\WithPagination;

class AdminContactComponent extends Component
{



    use WithPagination;
    

    public $search;
    public $start;
    public $read;
    public $archive;
    public $trash;
    public $delete;
    public $permanent;
    public $pages;

    public function addStartMessage($id)
    {
        $contact = ContactUsAdmin::find($id);
        $contact->update(['start' => $contact->start ? false : true,]);
    }

    public function AddArchiveMessage($id)
    {
        $contact = ContactUsAdmin::find($id);
        $contact->update( [ 'archive' => $contact->archive ? false : true, ] );
    }


    public function sendMessageTrash($id)
    {
        $contact = ContactUsAdmin::find($id);
        $contact->update(
            ['trash' => $contact->trash ? false : true],
        );
    }

    public function refreshPage()
    {
        return redirect(request()->header('Referer'));
    }
    


    public function mount($folder = 'inbox')
    {
        $this->search ="";
        $this->pages = $folder;
    }

    public function folderActive($active)
    {
        $this->pages = $active;
    }

    public function render()
    {
        
        $contact_not_read = ContactUsAdmin::where('read',0)->where('trash',0)->where('archive',0)->get();


        $contact_trash = ContactUsAdmin::where('trash',1)->get();
        $contact_start = ContactUsAdmin::where('start',1)->where('trash',0)->get();
        $contact_archived = ContactUsAdmin::where('archive',1)->get();

        if($this->pages === "archive")
        {
            $contacts = ContactUsAdmin::where('delete',0)->where('archive',1)->where('trash',0)
            ->where(function($contact_query){
                $contact_query->where("message","LIKE","%{$this->search}%")
                ->orWhere("subjectContact", "LIKE", "%{$this->search}%")
                ->orwhere("emailContact","LIKE","%{$this->search}%");
            })->paginate(10);

        }elseif($this->pages === "starred")
        {
            $contacts = ContactUsAdmin::where('delete',0)->where('trash',0)->where('start',1)
            ->where(function($contact_query){
                $contact_query->where("message","LIKE","%{$this->search}%")
                ->orWhere("subjectContact", "LIKE", "%{$this->search}%")
                ->orwhere("emailContact","LIKE","%{$this->search}%");
            })->paginate(10);
        }elseif($this->pages === "trash")
        {
            $contacts = ContactUsAdmin::where('delete',0)->where('archive',0)->where('trash',1)
            ->where(function($contact_query){
                $contact_query->where("message","LIKE","%{$this->search}%")
                ->orWhere("subjectContact", "LIKE", "%{$this->search}%")
                ->orwhere("emailContact","LIKE","%{$this->search}%");
            })->paginate(10);
        }else{
            $contacts = ContactUsAdmin::where('delete',0)->where('archive',0)->where('trash',0)
            ->where(function($contact_query){
                $contact_query->where("message","LIKE","%{$this->search}%")
                ->orWhere("subjectContact", "LIKE", "%{$this->search}%")
                ->orwhere("emailContact","LIKE","%{$this->search}%");
            })->paginate(10);
        }
        

        return view('livewire.admin.contacts.admin-contact-component',compact('contacts','contact_not_read','contact_trash','contact_start','contact_archived'))->layout('layouts.primary');
    }
}
