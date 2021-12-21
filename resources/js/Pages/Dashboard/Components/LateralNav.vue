<template>
<div class="w-80 h-full">
  <div :class="lateralNav?' bg-verdeOscuro transition duration-1000 h-screen rounded-br-2xl border-2 border-verdeOscuro transform ease-in-out ':'h-screen transition duration-1000 -translate-x-78 rounded-br-2xl transform ease-in-out border-2 bg-verdeClaro'">
      <div class=" pt-4 flex flex-wrap justify-end pr-3 text-white">
          <div>
              <button @click="activeLateralNav()" :class="lateralNav?'text-white transition duration-1000 transform ease-in-out ':'text-verdeOscuro transition duration-1000 transform ease-in-out rotate-180 translate-x-4'">
                <span class="material-icons">
                   arrow_back_ios_new
                </span>
              </button>
          </div>
      </div>
      <div class="mt-5 mb-5 flex flex-wrap justify-center ">
          <mr-lukas :color="'#FFFFFF'"></mr-lukas>
      </div>
      <Link :href="route('dashboard')" preserve-state preserve-scroll>
        <div :class="$page.url=='/dashboard'?'w-5/6 transition duration-700 ease-in-out itemNav p-3 flex flex-row text-verdeOscuro rounded-r-full font-bold bg-white':'w-5/6 itemNav p-3 flex flex-row text-white rounded-r-full font-bold'">
             <div class="ml-5 mr-10">
                 <icon-refresh :color="$page.url=='/dashboard'?'#00675F':'#fff'"></icon-refresh>
             </div>
             <div class="mr-1">Hacer un Cambio</div>
        </div>
      </Link>
      <Link :href="route('movements')" preserve-state preserve-scroll>
         <div :class="$page.url=='/movimientos'?'w-5/6 transition duration-700 ease-in-out itemNav p-3 flex flex-row text-verdeOscuro rounded-r-full font-bold bg-white':'w-5/6 itemNav p-3 flex flex-row text-white rounded-r-full font-bold'">
             <div class="ml-5 mr-10">
                 <movementsIcon :color="$page.url=='/movimientos'?'#00675F':'#fff'"></movementsIcon>
             </div>
             <div class="mr-1">Mis movimientos</div>
        </div>
      </Link>
      <Link :href="route('cuentas')" preserve-state preserve-scroll>
        <div :class="$page.url=='/cuentas'?'w-5/6 transition duration-700 ease-in-out itemNav p-3 flex flex-row text-verdeOscuro rounded-r-full font-bold bg-white':'w-5/6 itemNav p-3 flex flex-row text-white rounded-r-full font-bold'">
            <div class="ml-5 mr-10">
                <acount :color="$page.url=='/cuentas'?'#00675F':'#fff'"></acount>
            </div>
            <div class="mr-1">Cuentas</div>
        </div>
      </Link>
      <Link :href="route('perfil')" preserve-state preserve-scroll>
        <div :class="$page.url=='/perfil'?' w-5/6 transition duration-700 ease-in-out itemNav p-3 flex flex-row text-verdeOscuro rounded-r-full font-bold bg-white':'w-5/6 itemNav p-3 flex flex-row text-white rounded-r-full font-bold'">
            <div class="ml-5 mr-10">
                <perfil :color="$page.url=='/perfil'?'#00675F':'#fff'"></perfil>
            </div>
            <div class="mr-1">Perfiles</div>
        </div>
      </Link>
      <Link :href="route('help')" preserve-state preserve-scroll>
        <div :class="$page.url=='/ayuda'?'w-5/6 transition duration-700 ease-in-out itemNav p-3 flex flex-row text-verdeOscuro rounded-r-full font-bold bg-white':'w-5/6 itemNav p-3 flex flex-row text-white rounded-r-full font-bold'">
            <div class="ml-5 mr-10">
                <info :color="$page.url=='/ayuda'?'#00675F':'#fff'"></info>
            </div>
            <div class="mr-1">Ayuda</div>
        </div>
      </Link>
      <Link :href="route('logout')" method="post">
      <div :class="$page.url=='logout'?'w-5/6 transition duration-700 ease-in-out itemNav p-3 flex flex-row text-verdeOscuro rounded-r-full font-bold bg-white':'w-5/6 itemNav p-3 flex flex-row text-white rounded-r-full font-bold'">
           <div class="ml-5 mr-10">
               <logout :color="$page.url=='logout'?'#00675F':'#fff'"></logout>
           </div>
           <div class="mr-1">Cerrar Sessión</div>
      </div>
      </Link>

      <div class="mt-40">
          <div class="p-10 text-white text-center font-bold">
              <h1>Lunes a Viernes:</h1>
              <p>09:00 am - 07:00pm</p>
              <h1 class="mt-2">Sábado</h1>
              <p>09:00 am - 02:00pm</p>
          </div>
          <div class="pl-10 pr-10 text-verdeMedio text-center font-bold">
              <h1 class="mb-2">+51 987 654 321</h1>
              <p>hola@mrlukas.com.pe</p>

          </div>
      </div>
  </div>

  </div>
</template>

<script>
import {ref} from 'vue'
import MrLukas from '@/Components/logos/MrLukas.vue'
import NavLink from '@/Components/NavLink.vue'
import IconRefresh from '@/Components/icon/iconRefresh.vue'
import MovementsIcon from '@/Components/icon/movementsIcon.vue'
import Acount from '@/Components/icon/acount.vue'
import Perfil from '@/Components/icon/perfil.vue'
import Info from '@/Components/icon/info.vue'
import Logout from '@/Components/icon/logout.vue'
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Inertia } from '@inertiajs/inertia'


export default {
  components: { MrLukas, NavLink, IconRefresh, MovementsIcon, Acount, Perfil, Info, Logout, Link },
  props:{},
  setup(props) {
        let lateralNav = ref(true)
        return{

            lateralNav
        }
    },
    methods: {
        activeLateralNav(){
            if (this.lateralNav) {
                this.lateralNav=false
            }else{
                this.lateralNav=true
            }
        }
    },

}
</script>

<style>
*{
    user-select: none;
}
.itemNav:hover{
    cursor: pointer;
}

</style>
