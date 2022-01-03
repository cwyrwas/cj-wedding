<div class="w-full">
    @if( $show )
        <h2 class="text-4xl text-center font-garamond">To RSVP, please start by entering your name or email address.</h2>
        <form action="" wire:submit.prevent="submit">
            <input 
            type="text" 
            name="email" 
            class="px-4 py-2 mt-4 border-2 rounded border-cj-blue"
            placeholder="Email Address" 
            wire:model.lazy="email"
            >   
            @error('email') 
                <x-invalid-message> {{$message}}</x-invalid-message> 
            @enderror
    
            <button type="submit" 
            class=
            "inline-flex items-baseline px-4 py-2 ml-2 text-white transition duration-150 rounded bg-cj-blue hover:bg-cj-orange"
            >
            <x-loading-spinner wire:loading class="mr-2" />
            <span>Submit</span>
            </button>
              
        </form>
    @else
        @if(!$guestRegistered)
            @livewire('guest.guest-found', ['guest' => $guest])
        @else
            @livewire('guest.thank-you', ['guest' => $guest])
        @endif
    @endif
    

</div>
