
<template>
  <agile>
    <div class="slide">
      <h3>slide 1</h3>
    </div>

    ...

    <div class="slide">
      <h3>slide n</h3>
    </div>
  </agile>
</template>
<script>
// Import the carousel package.
import { VueAgile } from 'vue-agile';

export default {
  components: {
    agile: VueAgile
  }
}
</script>
