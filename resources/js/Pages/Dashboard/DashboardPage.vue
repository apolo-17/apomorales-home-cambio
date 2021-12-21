<template>
    <div class="relative">
        <div class=" fixed right-5 bottom-5 z-10">
           <a href="https://www.whatsapp.com">
             <whatsapp></whatsapp>
           </a>
        </div>
    </div>
    <div class=" w-full flex flex-wrap">
       <div>
           <lateral-nav></lateral-nav>
       </div>
        <div class="xl:container mx-auto">
            <perfil-nav></perfil-nav>
            <slot name="body"></slot>
        </div>
    </div>
</template>

<script>
import Whatsapp from '@/Components/logos/redes/whatsapp.vue'
import PerfilNav from './Components/PerfilNav.vue'
import LateralNav from './Components/LateralNav.vue'

export default {
  components: { PerfilNav, Whatsapp, LateralNav },

}
</script>

