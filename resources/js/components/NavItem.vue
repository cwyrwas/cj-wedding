<template>
    <li class="hover:text-cj-orange">
        <a 
        class=
        "transition 
        duration-100 
        hover:font-extra-bold" 
        :href="link">
        {{ text }}
        </a>
    </li>
</template>
<script>
export default {
    name: 'NavItem',
    props: {
        link: {
            type: String,
        },
        text: {
            type: String,
        },
        active: {
            type: Boolean,
            default: false
        }
    }
}
</script>