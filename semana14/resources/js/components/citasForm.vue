<template id="citas-form-template">
    <form @submit.prevent="submitForm">
        <label for="estilista">Seleccione un estilista:</label>
        <select id="estilista" v-model="selectedEstilista" required class="item"> 
            <option v-for="estilista in estilistas" :value="estilista.id">{{ estilista.nombre }}</option>
        </select><br><br>

        <label for="tipo_servicio">Servicio:</label>
        <select id="tipo_servicio" v-model="selectedServicio" required class="item"> 
            <option v-for="servicio in servicios" :value="servicio.id">{{ servicio.nombre_servicio }}</option>
        </select><br><br>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" v-model="fecha" required class="item"><br><br>

        <label for="hora">Hora:</label>
        <input type="time" id="hora" v-model="hora" required class="item"><br><br>

        <input type="submit" value="Reservar" class="item">
        <br>
    </form>
</template>

<script>
import { ref } from 'vue'
import axios from 'axios'

export default {
    props: ['estilistas', 'servicios'],
    setup() {
        const selectedEstilista = ref(null)
        const selectedServicio = ref(null)
        const fecha = ref(null)
        const hora = ref(null)

        const submitForm = async () => {
            try {
                await axios.post('/reservas', {
                    estilista: selectedEstilista.value,
                    nombre_servicio: selectedServicio.value,
                    fecha: fecha.value,
                    hora: hora.value
                })
                window.location.href = 'citas'
            } catch (error) {
                console.log(error)
            }
        }

        return {
            selectedEstilista,
            selectedServicio,
            fecha,
            hora,
            submitForm
        }
    }
}

</script>

