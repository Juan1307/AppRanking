<script setup>
  import { Link } from '@inertiajs/inertia-vue3';
  import Layout from '@/Layouts/Layout.vue';

  import { currentActiveState, currentUnfinishied } from '@/Composables/Reusable.js';
  import StudentTopics from './StudentTopics.vue';

  defineProps({
    currentStudent: Object,
    currentCourses: Array
  });

</script>

<template>
  <Layout>
    <div class="student-header flex items-center justify-between">
      <div class="flex space-x-3 items-center">
        <Link href="/students" class="btn btn-primary font-bold">
          <i class="bx bx-chevron-left"></i>
        </Link>
        <h1 class="uppercase" v-text="currentStudent.fullName"></h1>
      </div>
      <span v-text="currentActiveState(currentStudent.p_state)"></span>
    </div>

    <h1 class="font-bold my-3">Mis Cursos</h1>

    <section class="mt-5 grid grid-cols-1 lg:grid-cols-2 gap-4">
      <div class="course-card h-fit" v-for="({id_det_per_course, c_name, c_description, dpc_date_created, dpc_date_concluded, topics}) of currentCourses" 
      :key="id_det_per_course">
        <header class="card-header border-b border-orange-400 items-center py-2 mb-2">
          <div>
            <h3 class="text-md uppercase font-bold">Curso:</h3>
            <h4 class="uppercase text-sm" v-text="c_name"></h4>
          </div>
          <div class="flex flex-col space-y-3">
            <p class="text-sm">F. Inicio: <span v-text="dpc_date_created"></span> </p>
            <p class="text-sm">F. Fin: <span v-text="currentUnfinishied(dpc_date_concluded)"></span> </p>
          </div>
        </header>
        <article>
          <p class="my-3" v-text="c_description"></p>
          <!-- topics render -->
          <student-topics :data="topics" ></student-topics>
        </article>
      </div>
    </section>
  </Layout>
</template>