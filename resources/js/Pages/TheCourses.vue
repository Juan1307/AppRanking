<script setup>
  import Layout from '@/Layouts/Layout.vue';
  import CourseTopics from './Components/CourseTopics.vue'

  defineProps({
    currentCourses: Array
  });
</script>

<template>
 <Layout>
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      <div class="course-card h-fit" 
        v-for="({id_course, c_name, c_description, topics}) of currentCourses" 
        :key="id_course">
          <header class="card-header border-b border-orange-400 items-center py-2 mb-2">
            <div>
              <h3 class="text-md uppercase font-bold">Curso:</h3>
              <h4 class="uppercase text-sm" v-text="c_name"></h4>
            </div>
          </header>
          <article>
            <p class="my-3" v-text="c_description"></p>
            <!-- topics render -->
            <course-topics :data="topics" ></course-topics>
          </article>
      </div>
    </section>
  </Layout>
</template>  