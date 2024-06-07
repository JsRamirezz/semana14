import './bootstrap';
import { createApp } from 'vue';
import citasForm from './components/citasForm.vue'; // Corrected to match the file name
import axios from 'axios';
import citasTable from './components/citasTable.vue';

const app = createApp({});
app.component('citas-form', citasForm); // Corrected to match the imported component
app.component('citas-table', citasTable);
app.mount('#app');
window.axios = axios;
