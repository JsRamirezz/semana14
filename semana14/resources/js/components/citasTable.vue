<template>
  <div class="container">
    <h1>Lista de Citas</h1>
    <div v-if="loading">Loading...</div>
    <div v-else>
      <table>
        <thead>
          <tr>
            <th>Servicio</th>
            <th>Estilista</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="cita in citas" :key="cita.id">
            <td>{{ getServicioNombre(cita.id_servicio) }}</td>
            <td>{{ getEstilistaNombre(cita.id_estilistas) }}</td>
            <td>{{ cita.fecha }}</td>
            <td>{{ cita.hora }}</td>
            <td>
              <button @click="openEditModal(cita)">Editar</button>
              <button @click="deleteCita(cita.id)">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Modal de Edición -->
    <edit-modal
      :show="showEditModal"
      :cita="citaEditada"
      :servicios="servicios"
      :estilistas="estilistas"
      @save="saveCita"
      @close="closeEditModal"
    ></edit-modal>
  </div>
</template>

<script>
import axios from 'axios';
import EditModal from './EditModal.vue';

export default {
  components: {
    EditModal
  },
  data() {
    return {
      citas: [],
      servicios: [],
      estilistas: [],
      loading: true,
      showEditModal: false,
      citaEditada: {},
    };
  },
  mounted() {
    this.fetchCitas();
    this.fetchServicios();
    this.fetchEstilistas();
  },
  methods: {
    fetchCitas() {
      this.loading = true;
      axios.get('/api/citas')
        .then(response => {
          this.citas = response.data;
          this.loading = false;
        })
        .catch(error => {
          console.error(error);
          this.loading = false;
        });
    },
    fetchServicios() {
      axios.get('/api/servicios')
        .then(response => {
          this.servicios = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    fetchEstilistas() {
      axios.get('/api/estilistas')
        .then(response => {
          this.estilistas = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    getServicioNombre(id) {
      const servicio = this.servicios.find(servicio => servicio.id === id);
      return servicio ? servicio.nombre_servicio : 'N/A';
    },
    getEstilistaNombre(id) {
      const estilista = this.estilistas.find(estilista => estilista.id === id);
      return estilista ? estilista.nombre : 'N/A';
    },
    openEditModal(cita) {
      this.citaEditada = { ...cita };
      this.showEditModal = true;
    },
    closeEditModal() {
      this.showEditModal = false;
    },
    saveCita(cita) {
      axios.put(`/api/citas/${cita.id}`, {
        id_servicio: cita.id_servicio,
        id_estilistas: cita.id_estilistas,
        fecha: cita.fecha,
        hora: cita.hora
      })
        .then(response => {
          const index = this.citas.findIndex(c => c.id === cita.id);
          if (index !== -1) {
            this.citas.splice(index, 1, { ...cita, servicio: this.getServicioNombre(cita.id_servicio), estilista: this.getEstilistaNombre(cita.id_estilistas) });
          }
          this.showEditModal = false;
        })
        .catch(error => {
          console.error(error);
        });
    },
    deleteCita(id) {
      if (confirm('¿Estás seguro de eliminar esta cita?')) {
        axios.delete(`/api/citas/${id}`)
          .then(() => {
            this.citas = this.citas.filter(cita => cita.id !== id);
          })
          .catch(error => {
            console.error(error);
          });
      }
    },
  },
};
</script>

<style>
.container {
  margin: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

table th, table td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: left;
}

/* Modal Styles */
.modal {
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
</style>
