<?php

namespace App\Http\Livewire\Guest;

use App\Models\Guest;
use Livewire\Component;

class GuestFound extends Component
{   

    public $guest;
    public $family; 
    public $attendingFamilyMembers = [];
    public $diet;
    public $allergies;
    public $plusOne;
    public $guestRegistered = false;


    protected $listeners = [
        'guestFound' => 'guestFound',
        'registerFamily' => 'registerFamily',
        'guestRegistered' => 'guestRegistered'
    ];

    protected $rules = [
        'plusOne' => 'nullable|string|max:255|min:2',
        'diet' => 'nullable|string|max:255|min:2',
        'allergies' => 'nullable|string|max:255|min:2',
        'attendingFamilyMembers' => 'nullable|array',
    ];

    // If the guestFound event is emitted, then we render this component.
    public function guestFound()
    {
        $this->render();
    }

    public function render()
    {
        return view('livewire.guest.guest-found');
    }

    public function mount(Guest $guest)
    {
        $this->guest = $guest;
    }

    public function registerFamily()
    {
        $this->family = Guest::where('address', '=', $this->guest->address)
                        ->where('is_attending', '=', false)
                        ->get();
    }   

    public function submitGuest()
    {
        $this->validate();

        Guest::where('id', $this->guest->id)
            ->update([
                'plus_one_name' => $this->plusOne,
                'dietary_requirements' => $this->diet,
                'allergies' => $this->allergies,
                'is_attending' => true,
            ]);

        $this->emitGuestRegistered();
    }
    
    public function emitGuestRegistered()
    {
        $this->emit('guestRegistered');
    }

    public function guestRegistered() {
        $this->guestRegistered = true;
    }

    private function submitFamily()
    {
        if ($this->attendingFamilyMembers) {
            foreach ($this->attendingFamilyMembers as $member) {
                Guest::where('id', $member)
                    ->update([
                        'is_attending' => true
                    ]);
            }
        } else {
            return false;
        }
    }
}
