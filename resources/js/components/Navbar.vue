<template>
  <nav class="mt-8 px-3 py-1 border border-cj-blue mx-auto text-center font-garamond">
    <ul
    :class="showMenu ? 'flex' : 'hidden'"
    class="
      flex-col
      mt-8
      space-y-4
      md:flex
      md:space-y-0
      md:flex-row
      md:items-center
      md:space-x-10
      md:mt-0
    ">
        <nav-item link="/" text="Home"></nav-item>
        <nav-item link="/about" text="Our Story"></nav-item>
        <nav-item link="/schedule" text="Schedule"></nav-item>
        <nav-item link="/venue" text="Venue"></nav-item>
        <nav-item link="/rsvp" text="RSVP"></nav-item>
        <nav-item link="/registry" text="Wedding Registry"></nav-item>
    </ul>
  </nav>
</template>
<script>
import NavItem from './NavItem.vue';

export default {
  components: { NavItem },
  data() {
    return {
      showMenu: false,
    };
  },
};
</script>
