<x-app-layout>
    <x-slot name="header">
        <x-dashboard.header-title route="{{route('guests.index')}}" parent="Guest Management" page="Add New" />
    </x-slot>

    <x-dashboard-body>
        <x-form.panel-title>Add Guest</x-form.panel-title>
        <div class="rounded-lg w-full mx-auto md:w-8/12">
            <form action="/admin/guests" method="post">
                <x-form.panel>
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
                    <div class="w-full flex justify-end">
                        Need to bulk import? <a href="google.com" class="ml-2 text-cj-blue underline hover:text-blue-700 transition duration-100">Click here.</a> 
                    </div>

                </x-form.panel>
            </form>
        </div>
    </x-dashboard-body>

    <x-form.success-message>
        {{session('success')}}
    </x-form.success-message>
</x-app-layout>
