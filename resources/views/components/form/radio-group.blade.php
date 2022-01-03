@props(['name', 'id' => ['true', 'false'], 'lable' => ['true', 'false'] ])
<div class="flex justify-center">
    <div class="inline-block mr-4">
        <input
        class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-cj-blue checked:border-cj-blue focus:outline-none"
        type="radio"
        name="{{$name}}"
        id="{{$id['true']}}"
        value="1"
        x-on:change="registerFamilyShowing = $event.target.value"
        wire:click="registerFamily">

        <label class="inline-block text-gray-800 form-check-label" for="{{$id['true']}}">{{$label['true']}}</label>
      </div>
      <div class="inline-block mr-4">
        <input
        class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-cj-blue checked:border-cj-blue focus:outline-none"
        type="radio"
        name="{{$name}}"
        id="no_register_family"
        value="false"
        x-on:click="registerFamilyShowing = false">
        <label class="inline-block text-gray-800 form-check-label" for="no_register_family">No</label>
      </div>
</div>