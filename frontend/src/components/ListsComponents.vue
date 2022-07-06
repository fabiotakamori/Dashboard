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
                    <tr v-for="user in data" :key="user.id">
                    <!--chamando os nomes dos campos-->
                    <th scope="row"><p class="users">{{user.id}}</p></th>
                    <td><p class="users">{{user.name}}</p></td>
                    <td><p class="users">{{user.email}}</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default{
    name: 'ListsComponent',
    props: {
        data:Array,
        description: String,
        columns: []
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
</style>