<template>
  <Dashboard>
    <!--Tudo que é colocado dentro do componente é direcionado para o slot-->
    <DashBoardComponent>
      <!--existe o slot padrao e por nome, quando usamor por nome usamors #, quando #nome = name, havera a renderizacao-->
      <template #paginaslot>
        Inicio
        <CardsComponentsVue/>
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