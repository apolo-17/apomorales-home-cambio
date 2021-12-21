<template>
    <Head title="Cambia con " />
    <div class="relative">
        <div class="absolute top-0 right-0 z-n1">
            <back-ground></back-ground>
        </div>
        <div class=" fixed right-5 bottom-5 z-10">
           <a href="https://www.whatsapp.com">
             <whatsapps></whatsapps>
           </a>
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
            <div class="lg:container mx-auto h-full  relative">
                <div class="absolute left-16 top-16 text-6xl">
                    <strong>Cambia</strong> de manera <br />
                    segura y fácil.
                </div>
                <div class="flex flex-wrap">
                    <div class="w-1/2 p-10 pt-20">
                        <persona-sentada class="pt-20"></persona-sentada>
                    </div>
                    <div class="w-1/2 pt-20">
                        <lading-change></lading-change>
                    </div>
                </div>
                <div class="p-10 pt-20 pb-20 justify-center flex flex-row">
                    <como-cambia></como-cambia>
                </div>
                <div class="p-10 pt-20 pb-20 justify-center flex flex-row">
                    <div class="mx-auto absolute mt-16 text-5xl text-center">
                        Cambiamos lo tradicional <br />
                        <strong>pensando en ti.</strong>
                    </div>
                    <cambio-de-tradicion></cambio-de-tradicion>
                </div>
                <div class="justify-center pb-10">
                    <h1 class="text-center p-5 text-5xl">
                        ¡No esperes más y
                        <strong>forma parte de los que ahorran</strong> con Mr.
                        Lukas!
                    </h1>
                    <div class="w-full flex flex-wrap justify-center pb-5">
                        <button
                            class="transition flex flex-row transform duration-500 ease-in-out hover:-translate-x-1 hover:-translate-y-1 hover:shadow-xl
                                btn
                                bg-verdeOscuro
                                p-3
                                text-white
                                font-weight-bold
                                rounded-md">
                                <span class="mr-2">
                                    <icon-refresh :color="'#FFFFFF'"></icon-refresh>
                                </span>

                             Hacer mi primer Cambio
                        </button>
                    </div>
                </div>
            </div>
        </template>
        <template #footer>
            <div class="lg:container mx-auto ">
                <footerl></footerl>
            </div>
        </template>
    </principal>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import LugarSeguro from "../Components/logos/LugarSeguro.vue";
import PersonaSentada from "../Components/logos/PersonaSentada.vue";
import Principal from "./Welcome/Principal.vue";
import Encabezado from "../Components/Encabezado.vue";
import Footerl from "@/Components/footerl.vue";
import ComoCambia from "../Components/logos/ComoCambia.vue";
import CambioDeTradicion from "../Components/logos/CambiaLoTradicional.vue";
import BackGround from "@/Components/logos/BackGround.vue";
import MenuInicio from "@/Components/MenuInicio.vue";
import IconRefresh from '@/Components/icon/iconRefresh.vue'
import Whatsapps from  '@/Components/logos/redes/whatsapp.vue'
import LadingChange from '@/Components/LandingChange.vue'

export default {
    components: {
        Head,
        Link,
        LugarSeguro,
        Principal,
        Encabezado,
        Footerl,
        PersonaSentada,
        ComoCambia,
        CambioDeTradicion,
        BackGround,
        MenuInicio,
        IconRefresh,
        Whatsapps,
        LadingChange
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
        brezer: String,
    },

};
</script>

<style scoped>
.bg-gray-100 {
    background-color: #f7fafc;
    background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
    border-color: #edf2f7;
    border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
    color: #a0aec0;
    color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
    color: #718096;
    color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
    color: #4a5568;
    color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
    color: #1a202c;
    color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-gray-800 {
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
    }

    .dark\:bg-gray-900 {
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
    }

    .dark\:border-gray-700 {
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--tw-border-opacity));
    }

    .dark\:text-white {
        color: #fff;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
    }

    .dark\:text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }
}
</style>
