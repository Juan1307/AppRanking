<script setup>
  import { Head } from '@inertiajs/inertia-vue3';
  import NavBar from '@/Layouts/NavBar.vue';

defineProps({ listRanking: Array });

</script>

<template>
  <Head title="Cursalab" />
  
  <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    origin start {{ listRanking }}
  </div>
</template>
