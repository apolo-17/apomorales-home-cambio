<template>
  <div class="w-full  pl-8">
      <div class=" w-2/3 p-5  flex flex-wrap">
        <div class="w-1/2 text-center text-verdeOscuro">
            <strong class=" text-xl text-verdeOscuro font-bold">Compra</strong> 4.3005
        </div>
        <div class="w-1/2 text-center text-verdeOscuro">
            <strong class=" text-xl text-verdeOscuro font-bold">Venta</strong> 4.3005
        </div>
        <div class="w-full bg-white shadow-2xl mt-5 rounded-2xl p-6">
            <div class=" rounded-full flex flex-wrap shadow-lg p-3">
                <div class="w-1/2  relative">
                    <span class="absolute -top-5 bg-verdeClaro rounded-xl pr-8 text-verdeOscuro font-bold pl-2 left-2">Envio</span>
                    <input class=" w-44 text-4xl border-0 rounded-full"  placeholder="0000" type="number">
                </div>
                <div class="w-1/2 flex flex-wrap justify-center">
                   <h1 class="text-3xl text-verdeOscuro mr-1"><strong>S/ </strong></h1>
                    <bandera-peru></bandera-peru>
                   <h1 class="text-3xl text-verdeOscuro ml-2">Soles</h1>
                </div>
            </div>
            <br>
            <div class=" rounded-full flex flex-wrap  shadow-lg p-3">
                <div class="w-1/2 relative">
                    <span class="absolute -top-5 bg-verdeClaro rounded-xl pr-8 text-verdeOscuro font-bold pl-2 left-2">Recibo</span>
                    <input class=" w-44 text-4xl border-0 rounded-full"  placeholder="0000" type="number">
                </div>
                <div class="w-1/2 flex flex-wrap justify-center">
                   <h1 class="text-3xl text-verdeOscuro mr-2"><strong>$ </strong></h1>
                    <bandera-eua></bandera-eua>
                   <h1 class="text-3xl text-verdeOscuro ml-2">Soles</h1>
                </div>
            </div>
            <div class="text-center p-5">
               <small> Por monto mayor a $2000 o S/7000 solicita un tipo de cambio preferencial. <a href="" class="">Ingresa Aqui</a></small>
            </div>
            <div>
                <button class="transition duration-300 transform hover:-translate-y-1 w-full bg-verdeOscuro p-2 rounded-full text-white">Continuar</button>
            </div>
        </div>

      </div>
  </div>
</template>

<script>
import Whatsapp from '@/Components/logos/redes/whatsapp.vue'
import BanderaPeru from '@/Components/logos/BanderaPeru.vue'
import BanderaEua from '@/Components/logos/BanderaEua.vue'
export default {
    components:{
        Whatsapp,
        BanderaPeru,
        BanderaEua
    }
}
</script>

<style>

</style>
