@props(['time', 'title'])
<div  x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        <li class="text-white transition ease-in-out cursor-pointer list-item hover:-translate-x-4"><time>{{$time}}</time> - {{$title}} <x-icons.arrow class="-rotate-90" ::class="{'rotate-180': open, 'rotate-0': !open}" /></li>                                
    </div>
    <div 
    x-show="open"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
    class="py-4 mt-2 text-lg font-light rounded shadow-lg bg-w-full bg-gray-50"
    style="display: none;"
    @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5">
            {{$slot}}
        </div>
    </div>
</div>