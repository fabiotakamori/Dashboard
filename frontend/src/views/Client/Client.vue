<template>
  <Dashboard>
    <!--Tudo que é colocado dentro do componente é direcionado para o slot-->
    <DashBoardComponent>
      <!--existe o slot padrao e por nome, quando usamor por nome usamors #, quando #nome = name, havera a renderizacao-->
      <template #paginaslot>
        <header>Clientes</header>
      </template>
    </DashBoardComponent>
  </Dashboard>

</template>


<script>

import DashBoardComponent from "../Dashboard/DashboardComponent.vue";

export default {

  name: "ClientsComponents",
  components:{
    DashBoardComponent
  }

}
</script> 

<style lang="scss" src="./styles.scss">
</style>