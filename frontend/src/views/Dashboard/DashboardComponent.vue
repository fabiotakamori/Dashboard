<template>
    <div class="main">
        <div class="sidebar">
            <SideBarComponent/>
        </div>
        <div class="content-right">
            <div class="navbar">
                <Navbar/>
            </div>
            <div class="pages">
                <!--O slot serve para que possamos renderizar conteudo em outro componente aqui dentro
                -->
               <slot name="paginaslot"></slot>
            </div>
        </div>
    </div>
</template>

<script>
import SideBarComponent  from "./components/SaideBarComponent.vue"
import Navbar from "./components/NavBarComponent.vue"

export default{
    name: 'DashBoardComponent',
    components:{
       SideBarComponent,
       Navbar,

    }
}
</script>


<style lang="scss" src="./style.scss"></style>