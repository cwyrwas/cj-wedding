<x-layout>
    <x-slot name="content">
        <form action="" method="get">
            <div class="flex flex-wrap flex-1 flex-col justify-center space-y-4">
                <div class="w-full flex justify-center">
                    <input 
                    type="text" 
                    name="search" 
                    class="mt-4 rounded border-cj-blue px-4 py-2 border"
                    placeholder="Search Guests" 
                    value="{{ request('search') }}"
                    >
                </div>
                <div class="w-full flex justify-center">
                    <label for="is_attending">
                        <input 
                        type="checkbox" 
                        name="is_attending"
                        value="1" 
                        id="is_attending" 
                        class="ml-2"
                        @if(request('is_attending')) checked @endif
                        >
                        Has RSVP'd
                    </label>
                    <label for="isVeg">
                        <input 
                        type="checkbox" 
                        name="is_vegetarian" 
                        id="isVeg" 
                        class="ml-2"
                        value="1"
                        @if(request('is_vegetarian')) checked @endif
                        >
                        Is Vegetarian
                    </label>
                    <label for="plusOne">
                        <input 
                        type="checkbox" 
                        name="has_plus_one" 
                        id="plusOne"
                        value="1" 
                        class="ml-2"
                        @if(request('has_plus_one')) checked @endif
                        >
                        Has a Plus One
                    </label>
                </div>
                <div class="mx-auto">
                    <button type="submit" class="ml-2 bg-cj-blue text-white rounded px-4 py-2 transition duration-150 hover:bg-cj-orange">Search</button>
                </div>
            </div>

            
        </form>
        @if ( count($guests) )
            <guest-table :guests='{{$guests}}'></guest-table>
        @else
            <div class="
            flex 
            justify-center 
            items-center 
            min-h-screen 
            text-center 
            text-cj-blue
            font-garamond
            bg-white
            rounded
            min-w-4xl
            w-10/12
            mt-8
            shadow-lg">
                <h1 class="text-3xl">No Guests Found. <br> Please try again.</h1>
            </div>
        @endif
    </x-slot>
</x-layout>