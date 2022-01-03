<x-app-layout>
    <x-slot name="header">
        <x-dashboard.header-title route="{{route('guests.index')}}" parent="Guest Management" page="View All" />
    </x-slot>
    <x-dashboard-body>
        <section class="container p-6 mx-auto font-sans">
            {{ count($guests) }} Guests found
            <x-add-guest-button path="guests.create" />
            <div class="w-full overflow-x-auto">
                @if ( count($guests) )
                    <x-guest-search />
                    <x-table.guests :guests="$guests" />
                @else
                    <h1 class="text-3xl">No Guests Found. <br> Please try again.</h1>
                @endif
            </div>
        </section>
    </x-dashboard-body>
</x-app-layout>