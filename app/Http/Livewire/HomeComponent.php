<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RdvAdmin;
use App\Models\ContactUsAdmin;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMails;
use App\Mail\ContactMail;

class HomeComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $time;
    public $date;
    public $nameContact;
    public $emailContact;
    public $phoneContact;
    public $message;
    public $subjectContact;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'time' => 'required',
            'date' => 'required',

            'nameContact' => 'required|min:2',
            'emailContact' => 'required|email',
            'phoneContact' => 'required|digits:10',
            'message' => 'required|max:254',
            'subjectContact' => 'required'
        ]);
    }


    public function resetInput()
    {
        $this->name = "";
        $this->email = "";
        $this->phone = "";
        $this->time = "";
        $this->date = "";
        $this->nameContact = "";
        $this->emailContact = "";
        $this->phoneContact = "";
        $this->message = "";
        $this->subjectContact = "";
    }


    public function takeAppointement()
    {
        $datavalidate = $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'time' => 'required',
            'date' => 'required',
        ]);
        RdvAdmin::create($datavalidate);
        $rdvAdminId = RdvAdmin::latest()->first()->id;
        $subject = "Confirmation de votre rendez vous";
        $detailsClient = [
            'id' => $rdvAdminId,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'time' => $this->time,
            'date' => $this->date,
            'subject' => $subject,
            
        ];
        //Mail::to($detailsClient['email'])->send(new AdminMails($detailsClient));

        $subject = "Nouveau rendez vous a été crée";
        $detailsAdmin = [
            'id' => $rdvAdminId,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'time' => $this->time,
            'date' => $this->date,
            'subject' => $subject,
        ];
        //Mail::to('midox0044@gmail.com')->send(new AdminMails($detailsAdmin));

        $message = __('language.takeAppointement');
        session()->flash('success', $message);
        $this->resetInput();
        $this->emit('success');
    }

    public function takeContactUs()
    {

        $datavalidate = $this->validate([
            'nameContact' => 'required|min:2',
            'emailContact' => 'required|email',
            'phoneContact' => 'required|digits:10',
            'message' => 'required',
            'subjectContact' => 'required'
        ]);

        
        ContactUsAdmin::create($datavalidate);

        
        $subject = "Confirmation de l'envoie d'un nouvelle contacte d'aide";
        $detailsContact = [
            'nameContact' => $this->nameContact,
            'emailContact' => $this->emailContact,
            'phoneContact' => $this->phoneContact,
            'message' => $this->message,
            'subject' => $subject,
        ];
        //Mail::to($detailsContact['emailContact'])->send(new ContactMail($detailsContact));
        $message = "Votre contacte envoyer avec succée";
        session()->flash('addContact', $message);
        $this->resetInput();
    }

    public function render()
    {
        $title = __('language.home');
        return view('livewire.home-component')->layout('layouts.landing', compact('title'));
    }
}
