<template>
    <div class="mycards">
        <div class="top">
            <h3>{{ type }}</h3>
            <p class="porcent">
                 <font-awesome-icon :icon="['fas','arrow-up']" />
                {{percent}}
            </p>
        </div>
        <div class="footer">
            <font-awesome-icon :icon="['fas',icon]" />
            <p class="qtd">{{qtd}}</p>
        </div>
    </div>
</template>

<script>

export default{
    name: 'CardsComponents',
    /*toda prop, que irá receber do componente pai no caso da home, podendo ser chamado em template
    sendo possível tipar a variavel*/
    props:{
        type: String,
        percent: String,
        icon: String,
        qtd: Number

    }
}
</script>

<style lang="scss">
@import '@/assets/scss/main';

    .mycards{
        display: flex;
        flex-direction: column;
        width: 200px;
        height: 100px;
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
            .porcent{
                color: green;
            }
        }
        .footer{
            display: flex;
             justify-content: space-between;
             svg{
                font-size: 30px;
             }
             .qtd{
                font-size: 25px;
             }
        }
    }
</style>