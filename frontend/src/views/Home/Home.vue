<template>
  <Dashboard>
    <!--Tudo que é colocado dentro do componente é direcionado para o slot-->
    <DashBoardComponent>
      <!--existe o slot padrao e por nome, quando usamor por nome usamors #, quando #nome = name, havera a renderizacao-->
      <template #paginaslot>
        Inicio
        <div>
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
        
      </template>

    </DashBoardComponent>
  </Dashboard>

</template>


<script>

import DashBoardComponent from "../Dashboard/DashboardComponent.vue";
import CardsComponentsVue from "@/components/CardsComponents.vue";
export default {
  
  components:{
    DashBoardComponent,
    CardsComponentsVue
  }

}
</script> 

<style lang="scss" src="./styles.scss">
</style>