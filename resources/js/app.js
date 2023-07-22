import './bootstrap';
import { createApp } from 'vue';

// import router from '../../public/js/router.js';

const app = createApp(App);
app.use(router);

app.mount('#app');
