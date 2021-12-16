<template>
    <a :href="href" class="text-cj-blue hover:underline">
        <slot></slot>
    </a>
</template>
<script>
    export default {
        props: {
            href: {
                type: String,
                default: '#'
            },
        }
    }
</script>
