<template>
    <Head title="Cambia con " />
    <principal>
        <template #head>
            <Encabezado>
                <template #menu>
                    <menu-inicio></menu-inicio>
                </template>
            </Encabezado>
        </template>

        <template #body>
            <div class="lg:container mx-auto mb-32">
                 <help-page></help-page>
            </div>
        </template>
        <template #footer>
            <div class=" lg:container mx-auto">
                <footerl></footerl>
            </div>
        </template>
    </principal>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import LugarSeguro from "../Components/logos/LugarSeguro.vue";
import Principal from './Welcome/Principal.vue';
import Encabezado from '../Components/Encabezado.vue';
import footerl from '../Components/footerl.vue'
import {ref, reactive} from 'vue'
import PersonaSentada from '../Components/logos/PersonaSentada.vue'
import MenuInicio from '@/Components/MenuInicio.vue'
import HelpPage from '@/Components/HelpPage.vue'
export default {
    props:['name'],
    components: {
        Head,
        Link,
        LugarSeguro,
        Principal,
        Encabezado,
        footerl,
        PersonaSentada,
        MenuInicio,
        HelpPage
    },
    setup() {

    }


};
</script>
