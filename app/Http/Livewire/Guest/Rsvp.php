<?php

namespace App\Http\Livewire\Guest;

use App\Models\Guest;
use Livewire\Request;
use Livewire\Component;

class Rsvp extends Component
{   
    public $email;
    public $guest;

    public $show = true;
    
    protected $rules = ['email' => 'required|email|exists:guests,email'];

    protected $listeners = ['guestFound' => 'guestFound'];

    public function render()
    {
        return view('livewire.guest.rsvp');
    }

    public function guestFound()
    {
        $this->show = false;
    }

    public function submit()
    {
        $this->validate();
        $this->findGuest();
    }

    private function findGuest()
    {
        $this->guest = Guest::where('email', 'like', '%' . $this->email . '%')->first();
        $this->emitGuestFound();
    }

    public function renderForm()
    {
        return view('livewire.guest.guest-found');
    }

    public function emitGuestFound()
    {
        $this->emit('guestFound');
    }

    public function emitGuestNotFound()
    {
        $this->emit('guestNotFound');
    }
}
