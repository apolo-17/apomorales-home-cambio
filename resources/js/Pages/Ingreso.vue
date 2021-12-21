<template>
  <principal>
      <template #head>
        <encabezado>
            <template #menu>
                <div class="mx-auto flex flex-wrap justify-center">
                    <lugar-seguro></lugar-seguro>
                </div>
            </template>
        </encabezado>
      </template>
      <template #body>
          <div class=" lg:container mx-auto">
              <ingreso-page></ingreso-page>
          </div>
      </template>
  </principal>
</template>

<script>
import Encabezado from '@/Components/Encabezado.vue'
import Principal from './Welcome/Principal.vue'
import LugarSeguro from '@/Components/logos/LugarSeguro.vue'
import IngresoPage from'@/Components/IngresoPage.vue'
export default {
  components: { Principal, Encabezado, LugarSeguro, IngresoPage },

}
</script>

<style>

</style>
