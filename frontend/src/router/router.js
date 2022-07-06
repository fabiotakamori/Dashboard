import {createRouter, createWebHistory} from 'vue-router'
import Login from '../views/Login/Login.vue'
import Home from "../views/Home/Home.vue"
import Products from "../views/Produtos/Products.vue"
import Clients from "../views/Client/Client.vue"
/*o path é o caminho o component é a importção do componente*/
const routes = [
    {
        path: "/home",
        name: "home",
        component: Home
    },
    {
        path: "/login",
        name: "login",
        component: Login
    },
    {
        path: "/produtos",
        name: "products",
        component: Products
    },
    {
        path: "/clientes",
        name: "clients",
        component: Clients
    }

    
]

/*1-passamos history e as rotas*/
const router =  createRouter({
    history: createWebHistory(),
    routes: routes
});

/*ficara global, e chamamos dentro do main para que seja possivel usar no app.vue*/
export default router