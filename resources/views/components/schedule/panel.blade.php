@props(['title', 'time', 'image', 'alt'])
<div 
{{$attributes}}
x-cloak
x-transition:enter="transition transition-transform ease-out duration-300"
x-transition:enter-start="transform opacity-0 translate-x-full"
x-transition:enter-end="transform opacity-100 translate-x-0"
x-transition:leave="transition transition-transform ease-out duration-150"
x-transition:leave-start="transform opacity-75 translate-x-0"
x-transition:leave-end="transform translate-x-full opacity-25"
class="flex flex-col items-center justify-center w-full px-24 py-40"
style="display: none;"
>
    <div class=
    "w-full max-w-6xl px-6 py-4 space-y-4 transition-transform bg-white rounded md:w-full">
        <h1 class="mx-auto mb-4 text-2xl font-normal text-center font-garamond text-cj-blue md:w-10/12 md:text-4xl lg:text-7xl">
        {{$title}}
        </h1>
        <p class="w-4/12 px-6 py-2 mx-auto text-lg text-center border border-cj-blue">{{$time}}</p>
        <img src="{{$image}}" alt="{{$alt}}" class="rounded-lg">
        <hr>
        <p class="font-light">{{$slot}}</p>
    </div>
</div>