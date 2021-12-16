<x-layout>
    <x-slot name="content">
        @include('header')
        <div 
        class=
        "relative 
        flex
        flex-col
        items-top 
        mx-auto 
        justify-center 
        sm:items-center 
        py-4
        bg-cj-cream
        max-w-7xl
        sm:pt-0"
        >   <div class="mx-auto">
                <h2 class="text-center text-4xl font-garamond">To RSVP, please start by entering your name or email address.</h2>
                <form action="" method="post">
                    @csrf
                    <div class="mx-auto flex justify-center flex-grow items-baseline">
                        <input 
                        type="text" 
                        name="name" 
                        class="mt-4 rounded border-cj-blue px-4 py-2 border-2 " 
                        placeholder="Name"
                        >
                        <input 
                        type="text" 
                        name="email" 
                        class="mt-4 rounded border-cj-blue px-4 py-2 border-2"
                        placeholder="Email Address" 
                        value="{{ request('email') }}"
                        >                    
                        <button type="submit" 
                        class=
                        "ml-2
                        bg-cj-blue 
                        text-white 
                        rounded 
                        px-4 
                        py-2 
                        transition 
                        duration-150 
                        hover:bg-cj-orange"
                        >
                        Submit
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>