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
        >
        <section class="container mx-auto p-6 font-sans">
          <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
              <div class="w-full overflow-x-auto">
                  <table class="w-full">
                      <thead>
                          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Is Attending</th>
                            <th class="px-4 py-3">Invitation Date</th>
                            <th class="px-4 py-3">Has Plus One</th>
                            <th class="px-4 py-3">Is Vegetarian</th>
                            <th class="px-4 py-3">Gift Given</th>
                          </tr>
                      </thead>
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
                                {{$guest->gift->gift_type}}
                            @else
                                No
                            @endif
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
          </section>
        </div>
    </x-slot>
</x-layout>