<div class="testing">
    <div class="px-10 py-8 mb-6 text-center border border-1">
        <h4 class="text-4xl font-garamond">Thank you {{ $guest->name }}!</h4>
        <p class="text-xl font-garamond">Your RSVP is complete.</p>
    </div>
    <aside class="mb-4 text-center">
        <p class="text-3xl">We will see you at the wedding!</p>
        <p class="text2xl"><a class="underline text-cj-blue hover:font-semibold" href="{{route('calendar')}}">Click here to add the date to your calendar!</a></p>
    </aside>
    <div class="flex flex-col justify-center">
        <img class="w-4/12 mx-auto" src="images/initials_logo.png" alt="Christian & Jada">
    </div>
    <div class="text-lg text-center">
        <p>If you are considering bringing a gift, please review our <a href="/registry" class="underline text-cj-blue">wedding registry</a>.</p> 
        <p>We thank you for your generosity and look forward to spending our special day with you.</p>
        <p>If you have any questions, please don't hesitate to contact us!</p>
        <p>Sincerely,</p>
        <p>Christian & Jada</p>
    </div>
</div>
