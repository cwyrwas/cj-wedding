<template>
    <button type="submit" class="ml-2 bg-cj-blue uppercase font-bold text-white rounded px-4 py-2 transition duration-150 hover:bg-cj-orange">{{text}}</button>
</template>

<script>
export default {
    name: 'Submit',
    props: {
        text: {
            type: String,
            default: 'Submit'
        }
    },
    data() {
        return {
            text: this.text
        }
    }
}
</script>
