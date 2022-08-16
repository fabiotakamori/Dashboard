<template>
    <div>
        <!--um pouco mais sobre o preventhttps://javascript.reativa.dev/interview-7/-->
        <!--https://br.vuejs.org/v2/guide/events.html
        v-on:click
        -->
        <form @submit.prevent="createClient">
            <div class="form-top col-6">
                <h3>
                    Cadastro de Cliente
                </h3>
                <p>
                    Informações relativo ao cliente, nessa sessão será cadastrado o nome, email e o telefone do cliente.
                </p>
            </div>
            <div class="form-top col-6">
                <div>
                    <label>Nome</label>
                    <input v-model="name"/>
                </div>
                <div>
                    <label>E-mail</label>
                    <input v-model="email"/>
                </div>
                <div>
                    <label>Phone</label>
                    <input v-model="phone"/>
                </div>
                <button>Cadastrar Cliente</button>
            </div>
        </form>
    </div>
</template>
<script>
    export default {
        name: "FormCliente",
        data (){
            return{
               name: null,
               email: null,
               phone: null
            }
        },
        methods:{
            createClient(){
                const data = {
                    name: this.name,
                    email: this.email,
                    phone: this.phone
                }
                const dataJson = JSON.stringify(data);
                
                fetch("http://127.0.0.1:8000/api/clients",{
                    method:"POST",
                    headers:{
                        "Content-Type":"application/json"
                    },
                    body:dataJson
                })
                .then(function(response){
                    if(response.status){
                        alert("Cliente cadastrado com sucesso")
                    }
                })
            }
        }
    }

</script>
<style>
    form{
        display: flex;
    }
    form .form-top{
        padding: 50px;
    }
    .form-top h3{
        font-weight: bold;
        text-align: left;
    }
    .form-top p{
        text-align: left;
    }
    form .form-top button{
        width: 100%;
        border: none;
        margin-top: 15px;
        color: white;
        background-color: gray;
        border-radius: 5px;
    }
    form .form-top label{
        font-weight: bold;
    }
    form .form-top label, input{
        width: 100%;
        text-align: left;
    }
</style>