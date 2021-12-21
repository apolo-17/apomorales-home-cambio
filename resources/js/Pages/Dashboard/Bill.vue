<template>
      <Head title="Movimientos" />
    <dashboard-page>
        <template #body>
            <div class=" lg:container mx-auto  px-60 ">
                <div class=" ">
                    <h1 class="  font-bold text-2xl ">Mis Cuentas</h1>
                    <h1 class=" text-xl ">Recuerda que por tu seguridad, solo puedes agregar cuentas propias.</h1>
                    <div class="my-5 flex flex-row uppercase">
                        <div class="px-1 m-1 rounded-lg border transition duration-500 cursor-pointer hover:bg-verdeOscuro hover:text-white border-verdeOscuro "> <small>Soles</small></div>
                        <div class="px-1 m-1 rounded-lg border transition duration-500 cursor-pointer hover:bg-verdeOscuro hover:text-white border-verdeOscuro "> <small>Dólares</small> </div>
                        <div class="px-1 m-1 rounded-lg border transition duration-500 cursor-pointer border-verdeOscuro bg-verdeOscuro text-white "> <small>todas las cuentas</small> </div>
                    </div>
                </div>
                <div class="table w-full">


                </div>
            </div>
        </template>
    </dashboard-page>
</template>

<script>
import DashboardPage from './DashboardPage.vue'
import {Head} from "@inertiajs/inertia-vue3"
export default {
    components:{DashboardPage, Head},

    setup(props) {
        const botones = ["En proceso", "Finalizado", "Cancelados", "Todos"]

        return {
            botones
        }
    }

}
</script>
