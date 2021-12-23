{{-- 
    TODO: Connect the inputs to Livewire and the DB. Use alpine to hide the familyMembers checkboxes onChange. 
    This also needs to be broken down into smaller components, there's a ton of duplication here.
--}}
<div>
    <div class="mb-4">
        <h1 class="text-3xl text-center font-garamond">We're so excited you'll be joining us {{ $guest->name }}!</h1>
        <p class="text-center">In order to accommodate our guests in the best way, we'll need a bit more info from you.</p>
    </div>
    <form action="#" wire:submit.prevent="submitGuest">
        <x-form.panel>
            <div x-data="{dietaryShowing: false}">
                <div class="flex">  
                    <div> 
                        <span class="mr-4">
                        Do you have any dietary restrictions or allergies that we should be aware of?
                        </span>
                    </div>
                    <div class="flex justify-center">
                        <div class="inline-block mr-4">
                            <input 
                            class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-cj-blue checked:border-cj-blue focus:outline-none" 
                            type="radio" 
                            name="diet_restrictions" 
                            id="yes_restrict" 
                            value="1"
                            x-on:change="dietaryShowing = $event.target.value">
                            
                            <label class="inline-block text-gray-800 form-check-label" for="yes_restrict">Yes</label>
                          </div>
                          <div class="inline-block mr-4">
                            <input 
                            class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-cj-blue checked:border-cj-blue focus:outline-none" 
                            type="radio" 
                            name="diet_restrictions" 
                            id="no_restrict" 
                            value="false"
                            x-on:click="dietaryShowing = false">
                            <label class="inline-block text-gray-800 form-check-label" for="no_restrict">No</label>
                          </div>
                    </div>
                </div>
                <div x-show="dietaryShowing" x-cloak>
                    <div class="mt-2">
                        <div class="flex gap-3">
                            <div class="w-1/2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="diet_restrictions">
                                    Dietary Restrictions
                                </label>
                                <input 
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
                                id="diet_restrictions" 
                                type="text" 
                                placeholder="E.g. Gluten Free, Vegetarian, etc." 
                                wire:model="diet">
                                @error('diet_restrictions')
                                    <span class="text-xs italic text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-1/2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="allergies">
                                    Allergies
                                </label>
                                <input 
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
                                id="allergies" 
                                type="text" 
                                placeholder="E.g. Peanuts, Eggs, etc." 
                                wire:model="allergies">
                                @error('allergies')
                                    <span class="text-xs italic text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{plusOneShowing: false}">
                <div class="flex">
                    <div>
                        {{-- Build logic to only allow certain guests to bring a plus one. Maybe have a 'plus_one_invited' DB column for this? --}}
                        <span class="mr-4">
                        Will you be bringing a "plus one" to the wedding?
                        </span>
                    </div>
                    <div class="flex justify-center">
                        <div class="inline-block mr-4">
                            <input
                            class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-cj-blue checked:border-cj-blue focus:outline-none"
                            type="radio"
                            name="plus_one"
                            id="yes_plus_one"
                            value="1"
                            x-on:change="plusOneShowing = $event.target.value">
                    
                            <label class="inline-block text-gray-800 form-check-label" for="yes_plus_one">Yes</label>
                          </div>
                          <div class="inline-block mr-4">
                            <input
                            class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-cj-blue checked:border-cj-blue focus:outline-none"
                            type="radio"
                            name="plus_one"
                            id="no_plus_one"
                            value="false"
                            x-on:click="plusOneShowing = false"
                            wire:model="plusOne">
                            <label class="inline-block text-gray-800 form-check-label" for="no_plus_one">No</label>
                          </div>
                    </div>
                </div>
                <div x-show="plusOneShowing" x-cloak>
                    <div class="mt-2">
                        <div class="w-full">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="plus_one_name">
                                Plus One Name (first and last)
                            </label>
                            <input 
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
                            id="plus_one_name" 
                            type="text" 
                            placeholder="E.g. John Smith." 
                            wire:model="plusOne">
                            @error('plus_one_name')
                                <span class="text-xs italic text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{registerFamilyShowing: false}">
                <div class="flex">
                    <div>
                        <span class="mr-4">
                        Are they any other people in your household that you would like to RSVP?
                        </span>
                    </div>
                    <div class="flex justify-center">
                        <div class="inline-block mr-4">
                            <input
                            class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-cj-blue checked:border-cj-blue focus:outline-none"
                            type="radio"
                            name="register_family"
                            id="yes_register_family"
                            value="1"
                            x-on:change="registerFamilyShowing = $event.target.value"
                            wire:click="registerFamily">
                    
                            <label class="inline-block text-gray-800 form-check-label" for="yes_register_family">Yes</label>
                          </div>
                          <div class="inline-block mr-4">
                            <input
                            class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-cj-blue checked:border-cj-blue focus:outline-none"
                            type="radio"
                            name="register_family"
                            id="no_register_family"
                            value="false"
                            x-on:click="registerFamilyShowing = false">
                            <label class="inline-block text-gray-800 form-check-label" for="no_register_family">No</label>
                          </div>
                    </div>
                </div>
                @if($family)
                    <div class="p-4 mt-4 border border-cj-blue">
                        <h3 class="my-3">Please check off the family members who will be attending the wedding.</h3>
                        @foreach ($family as $familyMember)
                            @if($familyMember->name === $guest->name)
                                @continue
                            @endif   
                            <div class="flex items-baseline gap-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="plus_one_name">
                                    {{ $familyMember->name }}
                                </label>
                                <input
                                type="checkbox"
                                name="family_members[]"
                                value="{{ $familyMember->id }}"
                                class="form-checkbox"
                                wire:model="attendingFamilyMembers">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <button type="submit" 
            class=
            "inline-flex items-baseline px-4 py-2 ml-2 text-white transition duration-150 rounded bg-cj-blue hover:bg-cj-orange"
            >
            <x-loading-spinner wire:loading class="mr-2" />
            <span>Submit</span>
            </button>
        </x-form.panel>
    </form>     
</div>
