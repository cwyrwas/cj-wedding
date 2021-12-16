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
            <div class="bg-white w-8/12 rounded-lg mt-10 p-5 shadow text-center font-garamond">
                <div class="border border-1 px-10 py-8 mb-6">
                    <h4 class="text-4xl">Thank you {{ $guest->name }}!</h4>
                </div>
                 <aside class="text-3xl mb-4">We will see you at the wedding!</aside>
                 <div class="flex flex-col justify-center">
                    <img class="mx-auto w-4/12" src="images/initials_logo.png" alt="Christian & Jada">
                </div>
                <div class="text-lg">
                    <p>If you are considering bringing a gift, please review our <a href="/registry" class="text-cj-blue underline">wedding registry</a>.</p> 
                    <p>We thank you for your generosity and look forward to spending our special day with you.</p>
                    <p>If you have any questions, please don't hesitate to contact us!</p>
                </div>

                
            </div>
        </div>
    </x-slot>
</x-layout>