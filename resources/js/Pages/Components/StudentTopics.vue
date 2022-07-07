<script setup>
  import { ref, computed } from 'vue';
  defineProps({ data: Array });
  
  const currentState = ref(false);
  const currentListContent = computed(() => !currentState.value ? 'hidden' : 'inline-block');

  const checkAttempts = (sts) => sts === null ? 'Sin Nota' : sts ;  
</script>

<template>
  <div class="flex flex-col justify-center">
    <button type="button" class="btn btn-primary" @click.prevent="currentState = !currentState">
      Ver temas
      <i class="bx bx-chevron-down"></i>
    </button>

    <ul :class="currentListContent">
      <li class="p-2 border rounded flex items-center justify-between" 
          v-for="({id_det_per_topic, dp_calification, dp_attempts,  t_name}) of data" 
          :key="id_det_per_topic">
          
        <span v-text="t_name"></span>
        <div>
          <p>
            Nota: <span v-text="checkAttempts(dp_calification)"></span>
          </p>
          <p>
            Intentos: <span v-text="dp_attempts"></span>
          </p>
        </div>
      </li>
    </ul>
  </div>
</template>