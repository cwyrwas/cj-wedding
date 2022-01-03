@props(['guest'])
<table class="w-full">
    <thead>
        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
            <x-table.heading-cell>
                Name
            </x-table.heading-cell>
            <x-table.heading-cell>
                Is Attending
            </x-table.heading-cell>
            <x-table.heading-cell>
                Invitation Date
            </x-table.heading-cell>
            <x-table.heading-cell>
                Has Plus One 
            </x-table.heading-cell>
            <x-table.heading-cell>
                Is Vegetarian
            </x-table.heading-cell>
            <x-table.heading-cell>
                Gift Given
            </x-table.heading-cell>
        </tr>
    </thead>
    <tbody>
        <tbody class="bg-white">
            <tr class="text-gray-700">
            <td class="px-4 py-3 border">
                <div class="flex items-center text-sm">
                <div>
                    <p class="font-semibold text-black">{{$guest->name}}</p>
                    <p class="text-xs text-gray-600">{{$guest->email}}</p>
                </div>
                </div>
            </td>
            <td class="px-4 py-3 text-xs border">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                    @if ( $guest->is_attending )
                        Yes
                    @else
                        No
                    @endif
                </span>
            </td>
            <td class="px-4 py-3 text-sm border">{{ \Carbon\Carbon::parse($guest->invitation_sent_at)->format('j F, Y') }}</td>
            <td class="px-4 py-3 text-sm border">
                @if ( $guest->has_plus_one )
                    Yes
                @else
                    No
                @endif
            </td>
            <td class="px-4 py-3 text-sm border">
                @if ( $guest->is_vegetarian )
                    Yes
                @else
                    No
                @endif
            </td>
            <td class="px-4 py-3 text-sm border">
                @if ( $guest->gift )
                    <a href="/guests/{{$guest->id}}/gifts/{{$guest->gift->id}}" class="text-cj-blue underline">{{$guest->gift->gift_type}}</a>
                @else
                    No
                @endif
            </td>
        </tr>
      </tbody>
    </tbody>