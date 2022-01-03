@props(['url', 'text'])
<a 
{{ $attributes->merge(['class' => 'px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-cj-blue focus:outline-none focus:shadow-outline']) }}
href="{{$url}}">
    {{$text}}
</a>
