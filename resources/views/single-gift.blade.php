<x-layout>
    <x-slot name="content">
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
    </x-slot>
</x-layout>