<script setup>
  import { ref, computed } from 'vue';

  import { currentActiveState } from '@/Composables/Reusable.js'

  defineProps({ data: Array });
  
  const currentState = ref(false);
  const currentListContent = computed(() => !currentState.value ? 'hidden' : 'inline-block');

</script>

<template>
  <div class="flex flex-col justify-center">
    <button type="button" class="btn btn-primary" @click.prevent="currentState = !currentState">
      Ver temas
      <i class="bx bx-chevron-down"></i>
    </button>

    <ul :class="currentListContent">
      <li class="p-2 border rounded flex items-center justify-between" 
          v-for="({id_topic, t_name, t_state}) of data" :key="id_topic">
          
        <span v-text="t_name"></span>
        <span v-text="currentActiveState(t_state)"></span>
        </li>
    </ul>
  </div>
</template>