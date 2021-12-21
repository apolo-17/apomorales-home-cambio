<template>
    <div class="flex flex-row">
        <div class="p-2 transition duration-300 ease-in-out transform hover:scale-125">
            <a href="https://facebook.com">
                <facebook></facebook>
            </a>
        </div>
        <div class="p-2  transition duration-300 ease-in-out transform hover:scale-125">
            <a href="https://instagram.com">
                <instagram></instagram>
            </a>
        </div>
        <div class="p-2  transition duration-300 ease-in-out transform hover:scale-125">
            <a href="https://linkedin.com">
                <in></in>
            </a>
        </div>
        <div class="p-2  transition duration-300 ease-in-out transform hover:scale-125">
            <a href="https://tiktok.com">
                <tik-tok></tik-tok>
            </a>
        </div>
        <div class="p-2  transition duration-300 ease-in-out transform hover:scale-125">
            <a href="https://youtube.com">
                <youtube></youtube>
            </a>
        </div>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import Facebook from "./logos/redes/facebook.vue";
import Instagram from "./logos/redes/instagram.vue";
import In from "./logos/redes/in.vue";
import TikTok from "./logos/redes/tiktok.vue";
import Youtube from "./logos/redes/youtube.vue";
import NavLink from "./NavLink.vue";
export default {
    components: {
        Facebook,
        Link,
        NavLink,
        Instagram,
        In,
        TikTok,
        Youtube,
    },
};
</script>
