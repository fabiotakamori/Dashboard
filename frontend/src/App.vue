<template>
  <div>
    <NavBar/>
    
  </div> 
</template>

<script>
import NavBar from "./components/Navbar.vue"

export default {
  name: 'App',
  /*componente que estamos usando*/
  components: {
    NavBar
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
<!--
App.vue(aplicação principal) ->views(rotas de páginas)->components(menores)

-->