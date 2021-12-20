<template>
    <div class="relative mt-4">
        <input 
        :type="field.type" 
        :name="field.lowercaseName"
        :id="field.lowercaseName"
        class="peer w-full border-b-2 border-gray-300 h-10 placeholder-transparent focus:border-b-cj-blue focus:outline-none" 
        :placeholder="field.name"
        :value="field.value"
        required>
        <label  
        :for="field.lowercaseName"
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
            {{fieldName}}
        </label>
    </div>
</template>
<script>
export default {
    name: 'Input',
    props: {
        fieldName: {
            type: String,
            default: 'Name'
        },
        fieldType: {
            type: String,
            default: 'text'
        },
        fieldValue: {
            type: String,
            default: ''
        }
    },
    data() {
        return {
            field: {
                name: this.fieldName,
                lowercaseName: this.fieldName.toLowerCase(),
                type: this.fieldType,
                value: this.fieldValue
            }
        }
    },
}
</script>