<template>
    <Head title="Reclamos" />
    <div class="relative">
        <div class="absolute top-0 right-0 z-n1">
            <back-ground></back-ground>
        </div>

    </div>
    <principal>
        <template #head>
            <encabezado class="">
                <template #menu>
                    <menu-inicio></menu-inicio>
                </template>
            </encabezado>
        </template>
        <template #body>
            <form-claim></form-claim>
        </template>
        <template #footer>
            <div class="lg:container mx-auto ">
                <footerl></footerl>
            </div>
        </template>
    </principal>
</template>

<script>
import Encabezado from "@/Components/Encabezado.vue";
import Principal from "./Welcome/Principal.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Footerl from "@/Components/footerl.vue";
import MenuInicio from "@/Components/MenuInicio.vue";
import BackGround from '@/Components/logos/BackGround.vue'
import FormClaim from '@/Components/FormClaim.vue'
export default {
    components: { Encabezado, Principal, Head, Footerl, MenuInicio, BackGround, FormClaim },
};
</script>
