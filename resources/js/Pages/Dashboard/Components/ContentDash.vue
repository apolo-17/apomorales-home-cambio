<template>
  <div class=" lg:w-full md:w-auto">
      <div class=" min-h-screen pr-10 pb-10 pl-10 ">
        <div class=" p-5 flex flex-wrap justify-center "> <progreso></progreso>  </div>
          <div class=" p-5  text-center text-2xl font-bold text-verdeOscuro">Cotiza tu cambio</div>
          <div class=" flex flex-wrap">
              <div class=" w-1/2">
              <h1 class=" text-4xl "><strong class="font-bold">Cambia</strong> de manera <br> segura y facil.</h1>
                <persona-sentada></persona-sentada>
              </div>
              <div class=" w-1/2 ">
               <landing-change></landing-change>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
import PersonaSentada from '@/Components/logos/PersonaSentada.vue'
import LandingChange from '@/Components/LandingChange.vue'
import Progreso from '@/Components/logos/Progreso.vue'
import PerfilNav from './PerfilNav.vue'
export default {
  components: { PersonaSentada, LandingChange, Progreso, PerfilNav },


}
</script>

<style>

</style>

PersonaSentada
