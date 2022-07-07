<script setup>
  import { Link } from '@inertiajs/inertia-vue3';

  import Layout from '@/Layouts/Layout.vue';
  import { currentNumberId, currentActiveState } from '@/Composables/Reusable.js';

  defineProps({ listStudents: Array });

</script>

<template>
  <Layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <div v-for="({id_person, p_name, p_last_name, p_state, profiles}) of listStudents" 
          :key="id_person" class="student-card">

        <header class="card-header">
          <h2 class="font-bold">ID: <span v-text="currentNumberId(id_person)"></span></h2>
          <h2 class="uppercase" v-text="p_name"></h2>
        </header>

        <article class="card-body">
          <p>Hola soy <span v-text="`${p_name} ${p_last_name}`"></span> </p>
          <div class="flex justify-between">
            <span class="rounded" v-text="currentActiveState(p_state)"></span>
            <span class="font-bold text-orange-400" v-text="profiles.pr_name"></span>
            
            <Link :href="`/students/${id_person}`" type="button" class="btn btn-primary">
              Ver Cursos
            </Link>
          </div>
        </article>

      </div>
    </div>
  </Layout>
</template>