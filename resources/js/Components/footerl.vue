<template>
<div class="p-5">
    <div class="flex flex-row">
        <div class="w-1/5 p-10 pt-0 pl-14">
          <mr-lukas></mr-lukas>
        </div>
        <div class="w-1/5">
          <h3 class=" text-xl font-extrabold text-verdeOscuro">Ubicanos en</h3>
          <p>Av. Referencial 543 SURCO</p>
          <p>Av. Referencial 543 SURCO</p>
          <h3 class=" text-xl font-extrabold text-verdeOscuro">WhatsApp</h3>
          <p>+51 987 654 321</p>
        </div>
        <div class="w-1/5">
          <h3 class=" text-xl font-extrabold text-verdeOscuro">Horarios</h3>
          <p>Lunes a viernes:</p>
          <p>9:00 am. - 7:00 pm</p>
          <p>Sabados:</p>
          <p>9:00 am. - 2:00 pm</p>
        </div>
        <div class="w-1/5">
          <h3 class=" text-xl font-extrabold text-verdeOscuro">Legal</h3>
          <p>Terminos y condiciones</p>
          <p>Politica de privacidad</p>
          <h3 class=" text-xl font-extrabold text-verdeOscuro">Ayuda</h3>
          <p>Preguntas Frecuentes</p>
        </div>
        <div class="w-1/5 ">
          <h3 class=" text-xl font-extrabold text-verdeOscuro">Siguenos en</h3>
          <div>
              <redes-sociales></redes-sociales>
          </div>
          <div class=" p-2 w-full mt-5 content-center flex flex-wrap">
              <div class="w-1/3">
               <Link :href="'/reclamo'" preserve-scroll>
                 <libro></libro>
               </Link>
              </div>
              <div class="w-2/3 flex flex-wrap content-center "><span>Libro de reclamacion.</span> </div>
          </div>
        </div>
    </div>

    <div class=" text-center text-lg p-5 mt-10">
          Todos los derechos reservados MrLukas S.A.C. /RUC 20601234567 Registro SBS: 00123-2021
    </div>
</div>
</template>

<script>
import MrLukas from '../Components/logos/MrLukas.vue'
import Libro from '../Components/logos/Libro.vue'
import RedesSociales from './RedesSociales.vue'
import {Link} from '@inertiajs/inertia-vue3'

export default {
  components: { MrLukas, Libro, RedesSociales, Link }
}
</script>

