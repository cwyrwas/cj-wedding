@props(['route', 'parent', 'page'])
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    <a 
    class=
    "transition ease-in-out
    hover:underline hover:text-cj-orange" 
    href="{{$route}}">
    {{$parent}}
    </a> 
    | <span class="font-light">{{$page}}</span>
</h2>