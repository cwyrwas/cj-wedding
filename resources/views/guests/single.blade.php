<x-app-layout>
    <x-slot name="header">
        <x-dashboard.header-title route="{{route('guests.index')}}" parent="Guest Management" page="{{$guest->name}}" />
    </x-slot>

    <x-dashboard-body>
        <section class="container mx-auto p-6 font-sans">
            <div class="w-full overflow-x-auto">
                <x-add-guest-button path="guest.create" />
                <x-table.single-guest :guest="$guest" />
            </div>
        </section>
    </x-dashboard-body>
    <section class="flex flex-col space-y-4 w-8/12">
        @include('guests._add-comment-form')
        @foreach ( $guest->comment as $comment )
            <x-guest-comment :comment="$comment" />            
        @endforeach
    </section>
</x-app-layout>