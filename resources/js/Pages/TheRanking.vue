<script setup>
  import { computed } from 'vue';
  import Layout from '@/Layouts/Layout.vue';
  
  const props = defineProps({ 
    currentStudents: Array,
    currentCourses: Array,
    currentCalifications: Array
  });

  const currentRanking = computed(() => {
    
    const stateStudents = props.currentStudents.map(({id_person: f_person, p_name, p_last_name}, index) => {
      const currCourse = [];

      for (let index = 0; index < props.currentCourses.length; index++) {
        const currData = props.currentCourses[index];
        if(currData.id_person === f_person) {
          
          const currNotes = props.currentCalifications[index].reduce((prev, acc) => {
          
            let  { promedio, intentos } = prev;
            const { dp_calification, dp_attempts } = acc;
            const acc_calification =  dp_calification === null ? 0 : Number(dp_calification);
            const acc_attempts = Number(dp_attempts);
            
            promedio += acc_calification;
            intentos += acc_attempts;
            return { promedio, intentos };

            }, { promedio: 0, intentos: 0 }); //promedio - total de intentps

          currCourse.push({ currData, currNotes });
        };
      }

      return { fullName:  p_name +' '+ p_last_name, currCourse};
    });

    return stateStudents; 
  });

</script>

<template>
 <Layout>
    <ul>
      <li class="p-2 borde flex" 
          v-for="({fullName, currCourse}, index) of currentRanking" 
          :key="index">
        <span class="font-bold mr-4" v-text="fullName"></span>
        <span class="flex">
          <span class="text-orange-400 font-bold mr-3">
            Cursos : <span v-text="currCourse.length"></span>
          </span>
          <div class="flex" v-for="({currData, currNotes}, index) of currCourse" :key="index" >
            Nro:{{ currData.id_course }} - Promedio {{ currNotes.promedio }} - Intentos: {{ currNotes.intentos }} | 
          </div> 
        </span>
      </li>
    </ul>
  </Layout>
</template>
