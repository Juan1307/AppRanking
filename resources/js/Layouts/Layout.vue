<script setup>
  import NavBar from './NavBar.vue';
</script>

<template>
  <main class="mx-[7%] my-[3%]">
    <NavBar />
    <section class="container-content">
      <slot />
    </section> 
  </main>
</template>

