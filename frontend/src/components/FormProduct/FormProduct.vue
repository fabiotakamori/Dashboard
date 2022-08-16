<template>
    <div class="formulario">
        <!--Executa o método createProduct-->
        <!--um pouco mais sobre o preventhttps://javascript.reativa.dev/interview-7/-->
        <form @submit.prevent="createProduct">
            <div class="product_section">
                <div class="desc_field col-6">
                    <h4>Informações relativo ao produto</h4>
                    <p>
                        Informações relativo ao produto, deve ser preenchido o nome, preço, refência, 
                        estoque e o ean do produto.
                    </p>
                </div>
                <div class="product_field col-6">
                    <div>
                        <label for="productName">
                            Nome do produto                    
                        </label>
                        <input type="text" v-model="name" id="productName"/>
                    </div>
                    <div>
                        <label for="productPrice">
                            Preço
                        </label>
                        <input type="number" v-model="price" id="productPrice"/>
                    </div>
                    <div>
                        <label for="productReference">
                            Referência                   
                        </label>
                        <input type="text" v-model="reference" id="productReference"/>
                    </div>
                    <div>
                        <label for="productStock">
                            Estoque                  
                        </label>
                        <input type="number" v-model="stock" id="productStock"/>
                    </div>
                    <div>
                        <label for="productEan">
                            EAN                 
                        </label>
                        <input type="text" v-model="ean" id="productEan"/>
                    </div>
                    <button type="submit">Cadastar produto</button>
                </div>

            </div>
          
        </form>
    </div>
</template>

<script>
    
    export default{     
        name: "FormProductComponent",
        data(){
            return{
                name: null,
                price: null,
                reference:null,
                stock: null,
                ean: null
            }
        },
        methods:{
            async cadProduct(){
                console.log("ok")
            },
            async createProduct(){
                const data = {
                    name: this.name ,
                    price: this.price,
                    reference: this.reference,
                    stock: this.stock,
                    ean: this.ean
                }

                //transofrmando objeto em json
                const dataJson =JSON.stringify(data);
            
                //fetch api, não estamos usando axios nesse exemplo
                const req = await fetch("http://127.0.0.1:8000/api/products",{
                    method: "POST",
                    headers:{
                        "Content-Type":"application/json"
                    },
                    body: dataJson

                })

                .then(function(response){

                    if(response.status == 200){
                        alert("Produto criado com sucesso")
                    }
                   
                })
                
               
            }
        }
    }
    

</script>
<style scoped>
    .desc_field{
        padding: 50px;
    }
    .desc_field h4{
        font-weight: bold;
    }

    .product_field{
        padding: 50px;
    }
    .product_field div{
       display: flex;
       flex-direction: column;
    }
    .product_field div label{
        font-weight: bold;
    }

    .product_section{
        display: flex;
    }
    .formulario{
        text-align: left;
    }
    .product_field button{
        margin-top: 15px;
        width: 100%;
        border: none;
        background-color: gray;
        border-radius: 5px;
        color: white
    }
</style>
