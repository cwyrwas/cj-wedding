<x-layout>
    <x-slot name="content">
        <main class="w-full">
            <section id="schedule">
                <div class="flex flex-col items-center justify-center w-full px-24 py-40 bg-fixed bg-center bg-no-repeat bg-cover bg-table-bg">
                    <div class="w-full max-w-3xl px-6 py-4 mx-w-7xl md:w-7/12 bg-black/40 rounded-xl">
                        <h1 class="mx-auto mb-4 text-4xl font-normal text-center text-cj-peach md:w-10/12 md:text-4xl lg:text-7xl">Event Schedule</h1>
                        <ul class="space-y-6 text-xl font-bold text-center list-none md:text-2xl lg:text-3xl">
                            <x-dropdowns.schedule-item time="4:00PM" title="Ceremony">The ceremony description goes here.</x-dropdowns.schedule-item>
                            <x-dropdowns.schedule-item time="4:45PM" title="Cocktail Hour">Cocktail hour description goes here.</x-dropdowns.schedule-item>
                            <x-dropdowns.schedule-item time="5:45PM" title="Introductions">Introduction description goes here.</x-dropdowns.schedule-item>
                            <x-dropdowns.schedule-item time="5:50PM" title="First Dance">First dance description goes here.</x-dropdowns.schedule-item>
                            <x-dropdowns.schedule-item time="6:00PM" title="Dinner">Dinner description goes here.</x-dropdowns.schedule-item>
                            <x-dropdowns.schedule-item time="7:00PM" title="Reception">Reception description goes here.</x-dropdowns.schedule-item>
                            {{-- <li class="text-white transition duration-150 ease-in-out cursor-pointer list-item hover:-translate-x-4"><time>4:45PM</time> - Cocktail Hour<x-icons.arrow class="-rotate-90" ::class="{'rotate-180': open, 'rotate-0': !open}" /></li></li> --}}
                        </ul>
                    </div>
                </div>
            </section>
        </main>
    </x-slot>
</x-layout>


