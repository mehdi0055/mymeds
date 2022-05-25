<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RdvAdmin;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMails;

class HomeComponent extends Component
{

    public $name;
    public $email;
    public $phone;
    public $time;
    public $date;


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required|min:2',
            'email'=>'required|email',
            'phone'=>'required|digits:10',
            'time'=>'required',
            'date'=>'required',
        ]);
    }


    public function resetInput()
    {
        $this->name = "";
        $this->email = "";
        $this->phone = "";
        $this->time = "";
        $this->date = "";
    }


    public function takeAppointement()
    {
        $datavalidate = $this->validate([
            'name'=>'required|min:2',
            'email'=>'required|email',
            'phone'=>'required|digits:10',
            'time'=>'required',
            'date'=>'required',
        ]);

        RdvAdmin::create($datavalidate);

        $subject = "Confirmation de votre rendez vous";
        $detailsClient = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'time' => $this->time,
            'date' => $this->date,
            'subject' => $subject,
        ];
        Mail::to($detailsClient['email'])->send(new AdminMails($detailsClient));

        $subject = "Nouveau rendez vous a été crée";
        $detailsAdmin = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'time' => $this->time,
            'date' => $this->date,
            'subject' => $subject,
        ];
        Mail::to('midox0044@gmail.com')->send(new AdminMails($detailsAdmin));

        $message = __('language.takeAppointement');
        session()->flash('success',$message);
        $this->resetInput();
        $this->emit('success');
    }





    public function render()
    {
        $title = __('language.home');
        return view('livewire.home-component')->layout('layouts.landing',compact('title'));
    }
}
