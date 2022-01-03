<main>
    <div class="flex items-center justify-center w-full px-24 py-40 bg-center bg-no-repeat bg-cover bg-flower-bg">
        <h1 class="text-5xl font-normal text-center text-white md:w-10/12 md:text-4xl lg:text-7xl">Christian & Jada are getting <span class="italic">married</span> in {{ $dateDiff }}!</h1>
    </div>
    <section id="body">
        <div class="md:grid md:auto-rows-fr md:grid-flow-row md:grid-cols-2 md:place-items-center">
            <div class="flex flex-col items-center justify-center flex-1 w-full h-full px-6 py-24 space-y-3 text-center text-white bg-cj-blue">
                <h1 class="text-4xl font-bold">On October 29th, Christian and Jada will be getting married.</h1>
                <aside>
                    <p class="text-xl font-light text-cj-peach">The ceremony (and reception!) will be held at <span class="font-light">Whispering Hollow Estate</span> in Alum Bank, PA.</p>
                </aside>

            </div>
            <div class="flex flex-col items-center justify-center flex-1 w-full h-full px-6 py-24 space-y-3 text-center bg-white">
                <h1 class="text-4xl text-cj-blue">We can't wait to celebrate the start of our lives with you.</h1>
                <aside class="w-full">
                    <x-button-link class="justify-center w-6/12 text-2xl font-bold text-cj-blue hover:text-white bg-cj-peach" url="{{route('rsvp')}}">RSVP</x-button-link>
                </aside>
            </div>
        </div>
    </section>
    <section id="memories" class="px-6">
        <div class="flex flex-col justify-center flex-1 w-full space-y-6">
            <div>
                <h1 class="px-6 mx-auto mt-6 text-3xl font-light text-center">
                    After six beautiful years together, we will be starting the next chapter of our love story. 
                </h1>
            </div>
            <div class="w-5/12 mx-auto">
                <img src="images/beach.jpg" alt="">
            </div>
        </div>
        <memory-slider :dots="false" :infinite="false" :autoplay-speed="5000">...</memory-slider>
    </section> 
</main>

