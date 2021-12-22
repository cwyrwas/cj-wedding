<?php

namespace App\Http\Livewire\Guest;

use App\Models\Guest;
use Livewire\Component;

class GuestFound extends Component
{   

    public $guest;
    public $family; // This needs changed. It should be a boolean with a default of false determining if the guest is registering family.
    public $attendingFamilyMembers = [];

    protected $listeners = [
        'guestFound' => 'guestFound',
        'registerFamily' => 'registerFamily'
    ];

    // If the guestFound event is emitted, then we render this component.
    public function guestFound()
    {
        $this->render();
    }

    public function registerFamily()
    {
        $this->family = Guest::where('address', '=', $this->guest->address)->get();
    }

    public function render()
    {
        return view('livewire.guest.guest-found');
    }

    public function mount(Guest $guest)
    {
        $this->guest = $guest;
    }
}
