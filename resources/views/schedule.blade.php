<x-layout>
    <x-slot name="content">
        <main class="w-full overflow-x-hidden">
            <div x-data="{
                ceremonyOpen: true,
                cocktailOpen: false,
                introductionsOpen: false,
                danceOpen: false,
                dinnerOpen: false,
                receptionOpen: false,
            }"
             class="grid grid-cols-1 bg-fixed bg-center bg-no-repeat bg-cover lg:grid-cols-2 bg-table-bg">
                <section id="schedule">
                    <div class="flex flex-col items-center justify-center w-full px-24 py-40">
                        <div class="w-full max-w-5xl px-6 py-4 bg-black/40 rounded-xl">
                            <h1 class="mx-auto mb-4 text-3xl font-normal text-center text-cj-peach md:w-10/12 md:text-4xl lg:text-7xl">Event Schedule</h1>
                            <ul class="space-y-6 text-xl font-bold text-center list-none md:text-2xl lg:text-3xl">
                                <div @click="ceremonyOpen = ! ceremonyOpen; cocktailOpen = false; introductionsOpen = false"; danceOpen = false; dinnerOpen = false; receptionOpen = false;>
                                    <x-schedule.accordion-item time="4:00PM" title="Ceremony">The ceremony description goes here.</x-schedule.accordion-item>
                                </div>

                                <div @click="cocktailOpen = ! cocktailOpen; ceremonyOpen = false; introductionsOpen = false; danceOpen = false; dinnerOpen = false; receptionOpen = false;">
                                    <x-schedule.accordion-item time="4:45PM" title="Cocktail Hour">Cocktail hour description goes here.</x-schedule.accordion-item>
                                </div>

                                <div @click="introductionsOpen = ! introductionsOpen; ceremonyOpen = false; cocktailOpen = false; danceOpen = false; dinnerOpen = false; receptionOpen = false;">
                                    <x-schedule.accordion-item time="5:45PM" title="Introductions">Introduction description goes here.</x-schedule.accordion-item>
                                </div>
                                <div @click ="danceOpen = ! danceOpen; ceremonyOpen = false; cocktailOpen = false; introductionsOpen = false; dinnerOpen = false; receptionOpen = false;">
                                    <x-schedule.accordion-item time="5:50PM" title="First Dance">First dance description goes here.</x-schedule.accordion-item>
                                </div>
                                <div @click ="dinnerOpen = ! dinnerOpen; ceremonyOpen = false; cocktailOpen = false; introductionsOpen = false; danceOpen = false; receptionOpen = false;">
                                    <x-schedule.accordion-item time="6:00PM" title="Dinner">Dinner description goes here.</x-schedule.accordion-item>
                                </div>
                                <div @click="receptionOpen = ! receptionOpen; ceremonyOpen = false; cocktailOpen = false; introductionsOpen = false; danceOpen = false; dinnerOpen = false;">
                                    <x-schedule.accordion-item time="7:00PM" title="Reception">Reception description goes here.</x-schedule.accordion-item>
                                </div>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="ceremony" x-show="ceremonyOpen">
                    <x-schedule.panel x-show="ceremonyOpen" title="Ceremony" time="4:00PM" image="images/chapel.jpg" alt="Wedding Chapel">  
                        The wedding ceremony will be held at <time>4:00PM</time>. If the weather permits, it will be held outside at the chapel on the property. Alternatively, we will be married inside at the reception hall.
                    </x-schedule.panel>  
                </section>
                <section id="cocktailHour" x-show="cocktailOpen">
                    <x-schedule.panel x-show="cocktailOpen" title="Cocktail Hour" time="4:45PM" image="images/drinks.jpg" alt="Drinks">  
                        After the ceremony, please join us in the reception hall for drinks, cookies, and charcuterie to celebrate the Wyrwas wedding.
                    </x-schedule.panel>  
                </section>
                <section id="introductions" x-show="introductionsOpen">
                    <x-schedule.panel x-show="introductionsOpen" title="Introductions" time="5:45PM" image="images/party.jpg" alt="Introductions">  
                        The wedding party will be seated at the reception hall. We will introduce you to our guests and the bride and groom.
                    </x-schedule.panel>
                </section>
                <section id="dance" x-show="danceOpen">
                    <x-schedule.panel x-show="danceOpen" title="First Dance" time="5:50PM" image="images/dance.jpg" alt="First Dance">  
                        We will celebrate our first dance as a married couple.
                    </x-schedule.panel>
                </section>
                <section id="dance" x-show="dinnerOpen">
                    <x-schedule.panel x-show="dinnerOpen" title="Dinner" time="6:00PM" image="images/dinner.jpg" alt="Dinner">  
                        Our dinner will be catered by Flair of Country. Chicken, beef, and pork will be served in addition to appetizers and salad. Vegetarian options are available!
                    </x-schedule.panel>
                </section>
                <section id="dance" x-show="receptionOpen">
                    <x-schedule.panel x-show="receptionOpen" title="Reception" time="7:00PM - 10:00PM" image="images/reception.jpg" alt="Reception">  
                        Join us for an evening of dancing and celebration! Our reception will feature an open bar, snacks, and music.
                    </x-schedule.panel>
                </section>
            </div>
            
            <script>
                function handleClick(e) {
                    // Now you can access the event object (e) directly
                    alert('hi');
                }
            </script>

        </main>
    </x-slot>
</x-layout>
