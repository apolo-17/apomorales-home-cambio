import {ref} from 'vue'

export function getData() {
    let data = ref({})
    const informacion = async()=>{
        const respuesta = await fetch('gestor_de_contenido/datatext.json')
        data.value= respuesta.json()
        console.log(data)
    }
    return [data, informacion]
 }

