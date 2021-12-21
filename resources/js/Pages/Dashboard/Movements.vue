<template>
      <Head title="Movimientos" />
    <dashboard-page>
        <template #body>
            <div class=" lg:container mx-auto  px-60 ">
                <div class=" ">
                    <h1 class="  font-bold text-2xl ">Mis Movimientos</h1>
                    <div class="my-5 flex flex-row uppercase">
                        <div class="px-1 m-1 rounded-lg border transition duration-500 cursor-pointer hover:bg-verdeOscuro hover:text-white border-verdeOscuro "> <small>En proceso</small>  </div>
                        <div class="px-1 m-1 rounded-lg border transition duration-500 cursor-pointer hover:bg-verdeOscuro hover:text-white border-verdeOscuro "> <small>Finalizado</small></div>
                        <div class="px-1 m-1 rounded-lg border transition duration-500 cursor-pointer hover:bg-verdeOscuro hover:text-white border-verdeOscuro "> <small>cancelados</small> </div>
                        <div class="px-1 m-1 rounded-lg border transition duration-500 cursor-pointer border-verdeOscuro bg-verdeOscuro text-white "> <small>todos</small> </div>
                    </div>
                </div>
                <div class="table w-full  ">
                    <div class=" table-row-group text-gray-600">
                        <div class=" table-row text-center">
                            <div class=" table-cell w-2/5 border-t border-b  border-l border-verdeOscuro px-3 py-2 text-left ">Fecha</div>
                            <div class=" table-cell border-t border-b  border-verdeOscuro px-3 py-2 ">Operación</div>
                            <div class=" table-cell border-t border-b  border-verdeOscuro px-3 py-2 ">Estado</div>
                            <div class=" table-cell border-t border-b  border-verdeOscuro px-3 py-2 ">Monto</div>
                            <div class=" table-cell w-44 border-t border-b border-r  border-verdeOscuro px-3 py-2 "></div>
                        </div>
                        <div class=" table-row">
                            <div class=" table-cell w-2/5 border-b  border-l border-verdeOscuro p-3 ">aqui iran las fechas</div>
                            <div class=" table-cell border-b  border-verdeOscuro p-3 ">
                                <div class="  text-center bg-amarillo border border-mostaza rounded-lg font-bold">
                                    <small>USD a PEN</small>
                                </div>
                            </div>
                            <div class=" table-cell border-b  border-verdeOscuro p-3 ">
                                <div class="  text-center bg-amarillo border border-mostaza rounded-lg font-bold">
                                    <small>PENDIENTE</small>
                                </div>
                            </div>
                            <div class=" table-cell border-b  border-verdeOscuro p-3 text-center ">
                                S/.1550.20
                            </div>
                            <div class=" table-cell w-44 border-b border-r  border-verdeOscuro p-3 text-center "> <button class=" bg-verdeOscuro p-1 px-6 rounded-lg text-white"><small>Ver más</small></button> </div>
                        </div>
                    </div>

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
