@props(['guests'])
<table class="w-full">
    <thead>
        <tr class="font-semibold tracking-wide text-left text-gray-900 uppercase bg-gray-100 border-b border-gray-600 text-md">
            <x-table.heading-cell>
                Name
            </x-table.heading-cell>
            <x-table.heading-cell>
                Email
            </x-table.heading-cell>
            <x-table.heading-cell>
                Invitation Date
            </x-table.heading-cell>
            <x-table.heading-cell>
                Is Attending
            </x-table.heading-cell>
            <x-table.heading-cell>
                Plus One
            </x-table.heading-cell>
            <x-table.heading-cell>
                Is Vegetarian
            </x-table.heading-cell>
            <x-table.heading-cell>
                Address
            </x-table.heading-cell> 
        </tr>   
    </thead>
    <tbody class="bg-white">
        @foreach($guests as $guest)
            <tr>
                <x-table.row-cell>
                    <a href="/admin/guests/{{$guest->id}}" class="underline text-cj-blue">{{ $guest->name }}</a>
                </x-table.row-cell>
                <x-table.row-cell>
                    {{ $guest->email }}
                </x-table.row-cell>
                <x-table.row-cell>
                    {{ \Carbon\Carbon::parse($guest->invitation_sent_at)->format('j F, Y') }}
                </x-table.row-cell>
                <x-table.row-cell>
                    {{ $guest->is_attending ? 'Yes' : 'No' }}
                </x-table.row-cell>
                <x-table.row-cell>
                    {{ $guest->plus_one_name ? $guest->plus_one_name : 'Single guest' }}
                </x-table.row-cell>
                <x-table.row-cell>
                    {{ $guest->is_vegetarian ? 'Yes' : 'No' }}
                </x-table.row-cell>
                <x-table.row-cell>
                    {{ $guest->address }}
                </x-table.row-cell>
            </tr>
        @endforeach
    </tbody>
</table>