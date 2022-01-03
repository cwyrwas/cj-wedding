@props(['name', 'id', 'value', 'label'])
<input
        class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-cj-blue checked:border-cj-blue focus:outline-none"
        type="radio"
        name="{{$name}}"
        id="{{$id}}"
        value="{{$value}}"
        {{$attributes}}>

        <label class="inline-block text-gray-800 form-check-label" for="{{$id}}">{{$label}}</label>