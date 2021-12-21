<template>
      <Head title="Movimientos" />
    <dashboard-page>
        <template #body>
            <div class=" lg:container mx-auto  px-60 ">
                <div class=" ">
                    <h1 class="  font-bold text-2xl ">Perfiles</h1>
                    <h1 class=" text-xl ">¿Con cúal perfil deseas operar?</h1>
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
