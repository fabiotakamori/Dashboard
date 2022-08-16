<template>
  <div class="main">
    <div class="login">
      <div class="content-login">
          <h1>Login TakaCommerce</h1>   
          <form>
              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Senha</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <!--prevent evita o carregamento da página-->
              <button type="submit" class="btn btn-primary" @click.prevent="realizarLogin">Login</button>
          </form>
       </div>
    </div>
  </div>

</template>


<script>
  export default {

    name: 'LoginComponent',

    data(){
        return{

        }
    },
    methods:{
      realizarLogin(){
        this.$router.push({name:'home'})
      }
    }
  }
</script>

<!--Pre processador css-->
<style lang="scss" src="./login.scss"></style>