<template>
     <p class="text-red-500 text-xs mt-2">{{errorMessage}}</p>
</template>
<script>
export default {
    name: 'InvalidMessage',
    props: {
        errorMessage: {
            type: String,
            default: ''
        }
    },
}
</script>