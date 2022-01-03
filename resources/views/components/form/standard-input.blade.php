@props(['id', 'placeholder', 'type'])
<label class="block mb-2 text-sm font-bold text-gray-700" for="{{ $id }}">
    {{ $slot }}
</label>
<input 
class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
id="{{ $id }}" 
type="text"
name="{{ $id }}" 
placeholder="{{ $placeholder }}"
{{$attributes}}>