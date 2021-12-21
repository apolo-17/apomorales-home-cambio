<template>
  <div class=" flex flex-wrap w-full justify-end ">
     <div class=" w-1/2 mr-28 flex flex-wrap">
          <div class="w-2/4">
        <div class="w-1/2 flex flex-wrap justify-center content-center ">
            <span class="text-center transition duration-500 ease-in-out transform hover:scale-125 p-2 text-verdeOscuro font-bold text-xl">
                <Link :href="route('help')" preserve-scroll>
                    Ayuda
                </Link>
            </span>
        </div>
        <div class="w-1/2">

        </div>
      </div>
      <div class="w-1/4">
        <Link :href="route('login')">
            <button class="transition duration-500 ease-in-out transform hover:-translate-x-1 hover:-translate-y-1  hover:shadow-xl bg-white shadow-md text-lg  text-verdeOscuro font-weight-bold rounded-3xl pt-2 pr-8 pl-8 pb-2">
                Iniciar sesion.
            </button>
        </Link>
      </div>
      <div class="w-1/4">
        <button class=" transition duration-500 ease-in-out transform hover:-translate-x-1 hover:-translate-y-1 hover:shadow-xl bg-yellow-500 shadow-md text-lg text-white font-weight-bold rounded-3xl pt-2 pr-8 pl-8 pb-2">
            Registrarse
        </button>
      </div>
     </div>
  </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'
export default {
    components:{
        Link
    }

}
</script>

<style>

</style>
