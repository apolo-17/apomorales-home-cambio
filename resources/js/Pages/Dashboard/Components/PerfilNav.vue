<template>
  <div class=" w-full  text-right text-verdeOscuro flex flex-wrap justify-end pt-4 ">
        <div class=" align-middle capitalize h-full my-auto pr-10  text-lg "><strong>Hola</strong> {{name}}</div>
        <div class="w-14 h-14 float-right rounded-full bg-green-500"></div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            name:null
        }
    },
    created() {
        this.name = this.$page.props.auth.user.name
    },

}
</script>

<style>

</style>
