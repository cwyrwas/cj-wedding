@props(['type', 'name', 'value'])

<div class="relative mt-4">
    <input 
    type="{{$type}}"
    name="{{$name}}"
    id="{{$name}}"
    class="peer w-full border-b-2 bg-transparent border-gray-300 h-10 placeholder-transparent focus:border-b-cj-blue focus:outline-none" 
    placeholder="{{ucfirst($name)}}"
    value="{{$value}}"
    required>
    <label  
    for={{$name}}"
    class="
    block 
    absolute 
    left-0
    -top-3.5 
    text-gray-600 
    text-sm 
    transition-all
    pointer-text
    pointer-events-none 
    peer-placeholder-shown:text-base 
    peer-placeholder-shown:text-cj-blue 
    peer-placeholder-shown:top-2
    peer-focus:-top-3.5 
    peer-focus:text-sm 
    peer-focus:text-gray-600">
        {{ucfirst($name)}}
    </label>
</div>
@error($name)
<x-invalid-message>{{$message}}</x-invalid-message>
@enderror