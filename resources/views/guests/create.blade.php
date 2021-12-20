<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guest Management') }}
        </h2>
    </x-slot>

    <x-dashboard-body>
        <h2 class="font-bold text-3xl uppercase font-garamond text-center mb-4">Add a guest</h2>
        <div class="rounded-lg w-full mx-auto md:w-8/12">
            <form action="/admin/guests" method="post">
                <div class="px-6 pb-8 bg-gray-50 shadow-md rounded-lg flex flex-col space-y-4">
                    @csrf
                    <x-form.fancy-input type="text" name="name" :value="old('name')" />
                    <x-form.fancy-input type="text" name="email" :value="old('email')" />
                    <x-form.fancy-input type="text" name="address" :value="old('address')" />
                    <div>
                        <x-form.checkbox name="is_vegetarian">Is this guest vegetarian?</x-form.checkbox>
                    </div>
                    <div>
                        <x-form.checkbox name="has_plus_one">Does this guest have a plus one?</x-form.checkbox>
                    </div>
                    <div>
                        <x-submit-button style="width:100%">Add Guest</x-submit-button>
                    </div>
                </div> 
            </form>
        </div>
    </x-dashboard-body>

    @if ( session()->has('success') )
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
            {{session('success')}}
        </div>
    @endif
</x-app-layout>