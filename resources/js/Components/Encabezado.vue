<template>
    <div class="p-14">
        <div class=" absolute text-verdeOscuro font-bold text-4xl  text-left ">
            <mr-lukas></mr-lukas>
        </div>
        <div class="lg:container mx-auto">
            <slot name="menu"></slot>
        </div>
    </div>
</template>

<script>
import MrLukas from '@/Components/logos/MrLukas.vue'
import Label from '@/Components/Label.vue'
import BackGround from '@/Components/logos/BackGround.vue'
export default {
  components: { MrLukas, Label, BackGround },



}
</script>

<style>

</style>
