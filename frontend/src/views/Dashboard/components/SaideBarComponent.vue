<template>
    <div class="sidebar">

        <div class="top">
            <div class="avatar">
                <span><font-awesome-icon :icon="['fas','user']" /></span>
            </div>
            <div class="info">  
                <p class="name">Fabio Takamori</p>
                <p class="status">Online</p>
            </div>
        </div>

        <div class="menu">
            <ul>
                <li>
                    <font-awesome-icon :icon="['fas','home']" />
                    <router-link :to="{name: 'home'}">Início</router-link>    
                </li>
                <li>
                    <font-awesome-icon :icon="['fas','home']" />
                    <router-link :to="{name: 'clients'}">Clientes</router-link>    
                </li>
                <li>
                    <font-awesome-icon :icon="['fas','box']" />
                    <router-link :to="{name: 'products'}">Produtos</router-link>
                </li>
                <li>
                    <font-awesome-icon :icon="['fas','store']" />
                    <router-link :to="{name: 'products'}">Vendas</router-link>
                </li>
                <li>
                    <font-awesome-icon :icon="['fas','chart-bar']" />
                    <router-link :to="{name: 'products'}">Relatórios</router-link>    
                </li>
            </ul>
        </div>

    </div>
</template>

<script>


export default{
    name: "SideBarComponent"
}
</script>

<style lang="scss">
.sidebar{
    .top{
        widows: 100%;
        display: flex;
        flex-direction:  row ;
        padding: 25px 5px;
        margin-top: 90px;
        justify-content: center;


        .avatar{

            margin-right: 15px;
            span{
                display: block;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 30px;
            }
        }

        .info{
            text-align: left;
            .name{
                margin: 0px;
                font-size: 13px;
            }
            .status{
                margin: 0px;
                font-size: 10px;
                font-weight: bold;
                color: green;
            }
        }
    }
    .menu{
        li{
            display: block;
            text-align: left;
            margin-top: 10px;
            a{
                text-decoration: none;
                color: white;
                font-weight: bold;
            }
            svg{
                margin-right: 10px;
            }
        }
    }
}
</style>