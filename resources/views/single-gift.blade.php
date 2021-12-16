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
            <div class="
            font-garamond
            mx-auto 
            py-12
            flex 
            flex-1 
            flex-col
            justify-center 
            content-center
            mt-8 
            px-6 
            text-center
            h-48 
            min-h-full
            bg-white 
            rounded-md 
            shadow">
                <h1 class="text-4xl">{{ $gift->gift_type }}</h1>
                <p class="text-2xl pt-4 text-gray-700">Guest name: {{ $gift->guest->name }}.</p>
            </div>
        </div>
              
    </x-slot>
</x-layout>