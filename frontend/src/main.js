import { createApp } from 'vue'
import App from './App.vue'
import axios from 'axios'
import router from './router/router.js'
import 'bootstrap/dist/css/bootstrap.min.css'
import { library } from "@fortawesome/fontawesome-svg-core";
import { fas } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";



/* Arquivo principal, estamos importando o vue js
e importando o App.vue(componente principal)
e nele colocamos os demais componentes */

library.add(fas);
/*axios global para url base*/
axios.defaults.baseURL = 'http://127.0.0.1:8000/api/';



/*usamos a rota e o componente fontawesome de forma global*/
createApp(App)
.component("font-awesome-icon", FontAwesomeIcon)
.use(router)
.mount('#app')