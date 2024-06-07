<template>
  <div class="modal" v-if="show">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Editar Cita</h2>
        <span class="close" @click="close">&times;</span>
      </div>
      <div class="modal-body">
        <div class="input-group">
          <label for="edit-servicio">Servicio:</label>
          <select id="edit-servicio" v-model="cita.id_servicio">
            <option v-for="servicio in servicios" :key="servicio.id" :value="servicio.id">{{ servicio.nombre_servicio }}</option>
          </select>
        </div>
        <div class="input-group">
          <label for="edit-estilista">Estilista:</label>
          <select id="edit-estilista" v-model="cita.id_estilistas">
            <option v-for="estilista in estilistas" :key="estilista.id" :value="estilista.id">{{ estilista.nombre }}</option>
          </select>
        </div>
        <div class="input-group">
          <label for="edit-fecha">Fecha:</label>
          <input type="date" id="edit-fecha" v-model="cita.fecha">
        </div>
        <div class="input-group">
          <label for="edit-hora">Hora:</label>
          <input type="time" id="edit-hora" v-model="cita.hora">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn-save" @click="save">Guardar</button>
        <button class="btn-cancel" @click="close">Cancelar</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['show', 'cita', 'servicios', 'estilistas'],
  methods: {
    save() {
      this.$emit('save', this.cita);
    },
    close() {
      this.$emit('close');
    }
  }
}
</script>
  
  <style scoped>
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
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 40%; 
  }
  
  .modal-header {
    padding: 10px 20px;
    background-color: #f2f2f2;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .modal-header h2 {
    margin: 0;
  }
  
  .modal-header .close {
    cursor: pointer;
  }
  
  .modal-body {
    padding: 20px;
  }
  
  .input-group {
    margin-bottom: 20px;
  }
  
  .input-group label {
    display: block;
    margin-bottom: 5px;
  }
  
  .input-group select,
  .input-group input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  .modal-footer {
    padding: 10px 20px;
    background-color: #f2f2f2;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    text-align: right;
  }
  
  .btn-save,
  .btn-cancel {
    padding: 8px 20px;
    margin-left: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .btn-save {
    background-color: #4CAF50;
    color: white;
  }
  
  .btn-cancel {
    background-color: #f44336;
    color: white;
  }
  </style>
  