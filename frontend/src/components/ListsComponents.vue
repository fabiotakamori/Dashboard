<template>
    <div class="list">
        <div class="top">
            <p>{{description}} <span class="badge badge-info">{{data.length}}</span></p> 
            <hr>
        </div>
        <div class="content">
            <table class="table table-striped my-table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{columns[0]}}</th>
                    <th scope="col">{{columns[1]}}</th>
                    </tr>
                </thead>
                <tbody>
                    <!--id pois n podemos ter mesmo valor de chave-->
                    <tr v-for="item in data" :key="item.id">
                        <!--chamando os nomes dos campos-->
                        <th scope="row"><p class="users">{{item.id}}</p></th>
                        <td><p class="users">{{item.name}}</p></td>
                        <td><p class="users">{{(description == "Clientes")?item.email: item.price}}</p></td>
                        <td v-on:click="delet(item.id)"><font-awesome-icon :icon="['fas','trash']" /></td>
                        <td v-on:click="update(item.id)"><font-awesome-icon :icon="['fas','edit']" /></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <b-modal class="show">
        <form  @submit.prevent="updateE">
            <div>
                <label>Nome</label>
                <input v-model="name"/>
            </div>
        </form>
    </b-modal>
</template>

<script>
const axios = require('axios')
export default{
    name: 'ListsComponent',
    emits: ['loadTema'],
    props: {
        data:Array,
        description: String,
        columns: []
    },
    methods:{

        async delet(id){
            if(this.description =="Clientes"){
                axios.delete('http://127.0.0.1:8000/api/clients/'+id)
                .then(() => console.log("deletado"))
                alert("Cliente deletado")
                this.$emit('loadTema')
               
            }else{
                axios.delete('http://127.0.0.1:8000/api/products/'+id)
                .then(() => console.log("deletado"))
                alert("Produto deletado")
                this.$emit('loadTema')
            }
            
        }
    }
}
</script>

<style lang="scss">

.list{
    width: 100%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 3px;
    background-color: #fff;
    .users{
        font-size: 12px;
    }
    .top{
        .badge{
            background-color: rgb(7, 188, 94);
            
        }
    }
}

.show{
    display: none;
}
</style>