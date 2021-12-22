<div class="mb-6">
    <form action="" method="get">
        <div class="flex flex-wrap flex-1 flex-col justify-center space-y-4">
            <div class="w-full flex justify-center items-baseline">
                <x-form.fancy-input type="text" name="search" :value="old('search')" /> 
                <x-submit-button>Submit</x-submit-button>
            </div>
            <div class="w-full flex justify-center gap-12">
                <x-form.checkbox name="is_attending">Has RSVP'd</x-form.checkbox>
                <x-form.checkbox name="is_vegetarian">Is Vegetarian</x-form.checkbox>
                <x-form.checkbox name="has_plus_one">Has Plus One</x-form.checkbox>
            </div>
        </div>
    </form>
</div>
