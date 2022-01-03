@props(['name'])
<label for="{{$name}}" class="block text-sm font-medium leading-5 text-gray-700">
    {{$slot}}
<input type="checkbox" {{$attributes}} name="{{$name}}" id="{{$name}}" value="1">
</label>