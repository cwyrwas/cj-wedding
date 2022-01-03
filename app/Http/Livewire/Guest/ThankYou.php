<?php

namespace App\Http\Livewire\Guest;

use App\Models\Guest;
use Livewire\Component;

class ThankYou extends Component
{
    public $guest;

    protected $listeners = ['guestRegistered' => 'guestRegistered'];

    public function guestRegistered() 
    {
        $this->render();
    }

    public function render()
    {   
        return view('livewire.guest.thank-you');
    }

    public function mount(Guest $guest)
    {
        $this->guest = $guest;
    }
}
