<template>
  <Dashboard>
    <!--Tudo que é colocado dentro do componente é direcionado para o slot-->
    <DashBoardComponent>
      <!--existe o slot padrao e por nome, quando usamor por nome usamors #, quando #nome = name, havera a renderizacao-->
      <template #paginaslot>
        Inicio
        <div>
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                  <CardsComponentsVue type="Clientes" percent="7%" icon="user" :qtd="clients.length"/>
              </div>
              <div class="col-md-3">
                  <CardsComponentsVue type="Produtos" percent="12%" icon="box" :qtd="products.length"/>
              </div>
              <div class="col-md-3">
                  <CardsComponentsVue type="Serviços" percent="3%" icon="store" :qtd="products.length"/>
              </div>
              <div class="col-md-3">
                  <CardsComponentsVue type="Relatórios" percent="5%" icon="chart-bar" :qtd="products.length"/>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-5">

          <div class="row">
            <div class="col-12 col-md-6">
              <!--V-BIND = : permite que passemos classe ou estilo https://vuejs.org/api/built-in-directives.html-->
              <ListsComponents :data="clients"  @loadTema="load" description="Clientes" :columns="['Nome', 'E-mail']"/>
             
            </div>
             <div class="col-12 col-md-6">
              <!--V-BIND = : permite que passemos classe ou estilo-->
              <ListsComponents :data="products" @loadTema="load" description="Produtos" :columns="['Nome', 'Valor']"/>
               
            </div>
          </div>
        </div>
      </template>

    </DashBoardComponent>
  </Dashboard>

</template>


<script>

import DashBoardComponent from "../Dashboard/DashboardComponent.vue";
import CardsComponentsVue from "@/components/CardsComponents.vue";
import ListsComponents from "@/components/ListsComponents.vue";
const axios = require('axios')

export default {
  name: "HomeComponent",
  /*guardo estado do componente, estado local NO COMPONENTE que retorna lista de objetos*/
  data(){
    return{
     clients:[],
     products:[]
    }
  },
  /*Dentro do ciclo de vida do vue, quando usamos mounted, ele realiza consulta antes da montagem renderização*/
 mounted(){
  this.getUsers();
 },
  methods:{
    /*quando usado await temos que usar async*/
    async getUsers(){
     try{
         let respproducts = await axios.get('http://127.0.0.1:8000/api/products')
         let respclients = await axios.get('http://127.0.0.1:8000/api/clients')
         if(respproducts.status=200){
            this.products =respproducts.data
            this.clients = respclients.data
            console.log(this.products)
      }else{
        console.log("Erro na API")
      }
     }catch(error){
        console.log(error.response)
     }
    },

    async load(){
      
     try{
         let respproducts = await axios.get('http://127.0.0.1:8000/api/products')
         let respclients = await axios.get('http://127.0.0.1:8000/api/clients')
         if(respproducts.status=200){
            this.products =respproducts.data
            this.clients = respclients.data
            console.log(this.products)
          }else{
            console.log("Erro na API")
          }
     }catch(error){
        console.log(error.response)
     }
    }
  },
  components:{
    DashBoardComponent,
    CardsComponentsVue,
    ListsComponents
}

}
</script> 

<style lang="scss" src="./styles.scss">
.lists{
  width: 100%;
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
</style>