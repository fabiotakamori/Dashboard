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
                  <CardsComponentsVue type="Clientes" percent="7%" icon="user" qtd="957" />
              </div>
              <div class="col-md-3">
                  <CardsComponentsVue type="Produtos" percent="12%" icon="box" qtd="360"/>
              </div>
              <div class="col-md-3">
                  <CardsComponentsVue type="Serviços" percent="3%" icon="store" qtd="270"/>
              </div>
              <div class="col-md-3">
                  <CardsComponentsVue type="Relatórios" percent="25%" icon="chart-bar" qtd="30"/>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-md-6">
              <!--V-BIND = : permite que passemos classe ou estilo
              https://vuejs.org/api/built-in-directives.html
              -->
              <ListsComponents :data="usersA"  description="Clientes" :columns="['Nome', 'E-mail']"/>
            </div>
             <div class="col-12 col-md-6">
              <!--V-BIND = : permite que passemos classe ou estilo
              https://vuejs.org/api/built-in-directives.html
              -->
              <ListsComponents :data="usersA" description="Produtos" :columns="['Nome', 'Valor']"/>
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
  /*guardo minahs variaveis, estado local NO COMPONENTE que retorna lista de objetos*/
  data(){
    return{
      usersA:[]
    }
  },
  /*Dentro do ciclo de vida do vue, quando 
  usamos mounted, ele realiza consulta antes da montagem renderização
  https://www.digitalocean.com/community/tutorials/vuejs-component-lifecycle-pt
  no caso iremos chamar a função get
  */
 mounted(){
  this.getUsers();
 },
  methods:{
    /*quando usado await temos que usar async*/
    async getUsers(){
      /*https://jsonplaceholder.typicode.comawai ele espera a execucao para renderizar os demais*/
      const response = await axios.get('https://jsonplaceholder.typicode.com/users')
      
      //veja que o response em si é um objeto e estamos usando seus atributos
      if(response.status ==200){
        this.usersA = response.data
      }else{
        console.log("erro na API")
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