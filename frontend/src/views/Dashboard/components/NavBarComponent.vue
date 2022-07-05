<template>
    <div class="navbar">
        <!--:icon="['fas','user']-->
        <h3 class="logo"><font-awesome-icon :icon="['fas','star']" /> TakaCommerce</h3>
        <a href="" @click.prevent="logout"><font-awesome-icon :icon="['fas','fa-sign-out-alt']" />Sair</a>
    </div>
</template>

<script>


export default{
    name: "NavBarComponent",
    methods:{
        logout(){
           this.$router.push({name: 'login'})
        }
    }
}
</script>

<style lang="scss">
.navbar{
    .logo{
        color: #fff;
    }
    .logout{

    }
    a{
        text-decoration: none;
        color: white;
        font-weight: bold;
    }
}
</style>