<template>
    <Head title="Dashboard" />
    <dashboard-page>
        <template #body>
            <div class=" lg:container mx-auto">
                <content-dash></content-dash>
            </div>
        </template>
    </dashboard-page>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';
import DashboardPage from '@/Pages/Dashboard/DashboardPage.vue'
import LateralNav from './Dashboard/Components/LateralNav.vue';
import ContentDash from './Dashboard/Components/ContentDash.vue';
import Whatsapp from '@/Components/logos/redes/whatsapp.vue';

export default {

    components: {

        Head,
        LateralNav,
        DashboardPage,
        ContentDash,
        Whatsapp,

    },
}
</script>
