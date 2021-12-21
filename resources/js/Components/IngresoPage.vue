<template>
  <div class="w-full flex flex-row mb-10">
      <div class=" w-1/2">
        <h1 class=" text-4xl pt-16 pl-14"><strong class="font-extrabold">El mejor cambio </strong>es el<br> mas justo</h1>
        <div class=" w-full flex flex-wrap justify-center">
            <telefono-grande></telefono-grande>
        </div>
      </div>
      <div class=" w-1/2">
        <login></login>
      </div>
  </div>
</template>

<script>
import TelefonoGrande from './logos/TelefonoGrande.vue'
import Login from '@/Pages/Auth/Login.vue'
export default {
  components: { TelefonoGrande, Login },

}
</script>

<style>

</style>
