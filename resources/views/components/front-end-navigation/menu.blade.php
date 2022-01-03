
<div class="container w-full max-w-screen-2xl">
    <div x-data="{ open: false }" class="flex flex-col p-5 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="flex flex-row items-center justify-between lg:justify-start">
            <a href="/">
                <x-application-logo class="w-2/12"/>
            </a>
            <x-front-end-navigation.mobile-show-icon @click="open = !open" />
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row lg:pl-2">
            <x-front-end-navigation.item url="#" text="Our Story" class="{{ Request::is('/') ? 'font-bold border-b-2 border-cj-blue' : '' }}" />
            <x-front-end-navigation.item url="{{route('rsvp')}}" text="RSVP" class="{{ Request::is('rsvp') ? 'font-bold border-b-2 border-cj-blue' : '' }}" />
            <x-front-end-navigation.item url="#" text="Schedule" class="{{ Request::is('schedule') ? 'font-bold border-b-2 border-cj-blue' : '' }}" />
            <x-front-end-navigation.item url="#" text="Venue" class="{{ Request::is('venue') ? 'font-bold border-b-2 border-cj-blue' : '' }}" />
            <x-front-end-navigation.item url="#" text="Registry" class="{{ Request::is('registry') ? 'font-bold border-b-2 border-cj-blue' : '' }}" />
            <x-front-end-navigation.item url="#" text="Contact" class="{{ Request::is('contact') ? 'font-bold border-b-2 border-cj-blue' : '' }}" />
        </nav>
    </div>
</div>
