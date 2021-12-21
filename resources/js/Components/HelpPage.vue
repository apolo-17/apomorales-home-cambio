<template>
  <div class="lg:container mx-auto flex flex-row">
      <div class="h-12 w-3/5 mt-24 ">
      <h1 class="text-5xl pl-5">
          <strong> Preguntas</strong>  frecuentes </h1>
      </div>
      <div class=" w-2/5 ">
        <div class="w-full flex flex-wrap justify-center mb-4">
            <persona-cuestiona :ancho="650"></persona-cuestiona>
            <form-consulta></form-consulta>
        </div>
      </div>
  </div>
</template>

<script>
import PersonaCuestiona from './logos/PersonaCuestiona.vue'
import FormConsulta from '@/Components/FormConsulta.vue'
import {Link} from '@inertiajs/inertia-vue3'
export default {
  components: { PersonaCuestiona, FormConsulta, Link },

}
</script>

<style>

</style>
