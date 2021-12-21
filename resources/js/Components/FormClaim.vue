<template>
  <div class=" lg:container mx-auto flex flex-wrap content-center justify-center align-middle p-10">
      <div class=" w-1/2 p-10 bg-white shadow-lg rounded-3xl">
        <h1  class=" text-center text-3xl text-verdeOscuro font-bold">Libro de Reclamaciones</h1>
        <form class="mt-10 w-full content-center  justify-center" action="">
            <div class="w-full flex flex-wrap">
                <div class="w-1/2 p-1"> <input class="w-full rounded-lg  border-2 border-verdeOscuro" placeholder="Nombre" type="text"></div>
                <div class="w-1/2 p-1"> <input class="w-full rounded-lg border-2 border-verdeOscuro " placeholder="Apellido" type="text"></div>
            </div>
            <div class="w-full p-1 mt-3">
                <input class="w-full rounded-lg  border-2 border-verdeOscuro" placeholder="Razón Social" type="text">
            </div>
            <div class="w-full p-1 mt-3">
                <input class="w-full rounded-lg  border-2 border-verdeOscuro" placeholder="Documento de Identidad" type="text">
            </div>
            <div class="w-full p-1 mt-3">
                <input class="w-full rounded-lg  border-2 border-verdeOscuro" placeholder="Número de Documento" type="text">
            </div>
            <div class="w-full p-1 mt-3">
                <input class="w-full rounded-lg  border-2 border-verdeOscuro" placeholder="Correo Electronico" type="text">
            </div>
            <div class="w-full p-1 mt-3">
                <input class="w-full rounded-lg  border-2 border-verdeOscuro" placeholder="Celular" type="text">
            </div>
            <div class="w-full p-1 mt-3">
                <input class="w-full rounded-lg  border-2 border-verdeOscuro" placeholder="Servicio Contratado" type="text">
            </div>
            <div class="w-full p-1 mt-3">
                <input class="w-full rounded-lg  border-2 border-verdeOscuro" placeholder="Monto Cambiado" type="text">
            </div>
            <div class="w-full p-1 mt-3">
                <input class="w-full rounded-lg  border-2 border-verdeOscuro" placeholder="Detalle de su Reclamo" type="text">
            </div>
            <div class=" w-full p-1 mt-4">
                <h1 class=" font-bold">¿Que es una queja?</h1>
                <p>Es una disconformidad frente a una mala atención del proveedor pero que no guarda relacion directa con el producto o servicio adquirido.</p>
                <h1 class=" font-bold">¿Que es un reclamo?</h1>
                <p>Se produce cuando no esta conforme con el producto adquirido o servicio brindado. El proveedor tiene la obligacion de darte respuesta.</p>
            </div>
            <div class="w-full p-1 mt-3">
                <textarea class=" w-full rounded-lg  border-2 border-verdeOscuro" placeholder="Descripción" maxlength="255" name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="w-full p-1 mt-3">
                <button class=" transition duration-300 ease-in-out text-white font-bold hover:shadow-lg w-full bg-verdeOscuro rounded-lg p-2 transform hover:-translate-y-1" >Continuar</button>
            </div>
        </form>
      </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
