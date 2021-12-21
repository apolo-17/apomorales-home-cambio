<template>
  <div class=" flex flex-wrap justify-center w-full">
      <div class=" w-2/3 pl-10 pr-10 pb-10 rounded-xl shadow-lg ">
        <h1 class=" text-xl text-center mb-4 text-verdeOscuro font-bold">¿Tienes alguna otra consulta?</h1>
        <div class=" relative">
            <small class="bg-white text-verdeOscuro font-bold  p-1 absolute ml-6" >Nombre y apellido</small>
            <input  class="w-full m-3 border-verdeOscuro border-3 rounded-lg" type="text">
        </div>
        <div class=" relative">
            <small class="bg-white text-verdeOscuro font-bold  p-1 absolute ml-6" >Correo Electronico</small>
            <input  class="w-full m-3 border-verdeOscuro border-3 rounded-lg" type="text">
        </div>
        <div class=" relative">
            <small class="bg-white text-verdeOscuro font-bold  p-1 absolute ml-6" >Telefono</small>
            <input  class="w-full m-3 border-verdeOscuro border-3 rounded-lg" type="text">
        </div>
        <div class=" relative">
            <small class="bg-white text-verdeOscuro font-bold  p-1 absolute ml-6" >Asunto</small>
            <input  class="w-full m-3 border-verdeOscuro border-3 rounded-lg" type="text">
        </div>
        <div class=" relative">
            <small class="bg-white text-verdeOscuro font-bold  p-1 absolute ml-6" >Mensaje</small>
            <textarea class="w-full m-3 border-verdeOscuro border-3 rounded-lg" name="" id="" cols="30" rows="8"></textarea>
        </div>
        <div class=" flex flex-row m-3">
            <input class="rounded-md" type="checkbox" name="" id="">
            <small class="ml-1 text-sm font-bold">He leido y acepto sus terminos, condiciones y politicas de datos. </small>
        </div>
            <button class="transition duration-300 transform hover:-translate-y-1 w-full m-3 p-2 rounded-lg bg-verdeOscuro text-white"> Enviar</button>
      </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
