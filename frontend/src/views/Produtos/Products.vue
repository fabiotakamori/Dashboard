<template>

  <Dashboard>
    <!--Tudo que é colocado dentro do componente é direcionado para o slot-->
    <DashBoardComponent>
      <!--existe o slot padrao e por nome, quando usamor por nome usamors #, quando #nome = name, havera a renderizacao-->
      <template #paginaslot>
        <FormProduct/>
      </template>
    </DashBoardComponent>
    
  </Dashboard>

</template>


<script>

import DashBoardComponent from "../Dashboard/DashboardComponent.vue";
import FormProductComponent from "@/components/FormProduct/FormProduct.vue";
import FormProduct from "@/components/FormProduct/FormProduct.vue";
export default {

  name: "ProductsComponents",
  components:{
    DashBoardComponent,
    FormProductComponent,
    FormProduct
}

}
</script> 

<style lang="scss" src="./styles.scss">
</style>