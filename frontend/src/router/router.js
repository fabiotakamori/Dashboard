import {createRouter, createWebHistory} from 'vue-router'
import Login from '../views/Login.vue'
import Home from "../views/Home.vue"

/*o path é o caminho o component é a importção do componente*/
const routes = [
    {
        path: "/",
        name: "home",
        component: Home
    },
    {
        path: "/login",
        name: "login",
        component: Login
    }
]

/*1-passamos history e as rotas*/
const router =  createRouter({
    history: createWebHistory(),
    routes: routes
});

/*ficara global, e chamamos dentro do main para que seja possivel usar no app.vue*/
export default router