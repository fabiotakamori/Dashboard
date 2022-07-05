<template>
    <div class="mycards">
        <div class="top">
            <h3>Clientes</h3>
            <p class="porcent">
                 <font-awesome-icon :icon="['fas','arrow-up']" />
                7%
            </p>
        </div>
        <div class="footer">
            <font-awesome-icon :icon="['fas','user']" />
            <p class="qtd">957</p>
        </div>
    </div>
</template>

<script>

export default{

}
</script>

<style lang="scss">
@import '@/assets/scss/main';

    .mycards{
        display: flex;
        flex-direction: column;
        width: 200px;
        background-color:   $green;
        padding: 15px;
        color: white;
        border-radius: 7px;
        margin-left: 10px;
        .top{
            display: flex;
            justify-content: space-between;
            svg{
                color: green;
            }
        }
        .footer{
            display: flex;
             justify-content: space-between;
        }
    }
</style>