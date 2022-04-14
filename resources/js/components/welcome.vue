<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Endereço</div>

                <div class="card-body">

                        <div class="row mb-3">
                            <label for="cep" class="col-md-4 col-form-label text-md-end">Cep</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " value="" placeholder="Digite um cep" v-model="cep" name="cep">
                                
                            </div>
                            
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-light" @click="procurarcep">
                                    <button>Busca por Cep</button>
                                </button>
                            </div>
                        </div>
                                                <div class="row mb-3">
                            <label for="logradouro" class="col-md-4 col-form-label text-md-end">Logradouro</label>

                            <div class="col-md-6">
                                <input id="logradouro" type="text" class="form-control " value="" placeholder="Busca por logradouro" v-model="logradouro" name="logradouro">
                                
                            </div>
                            
                        </div>
                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-light" @click="procurarlogradouro">
                                    <button>Busca por logradouro</button>
                                </button>
                            </div>
                        </div>

                        <cep-component :endereco="endereco"></cep-component>
                    
                                           
                    
                    
                </div>
            </div>
        </div>
        
    </div>

</div>
</template>

<script>
    export default{
        data() {
            return{
                urlBase: 'http://localhost:8000/api/cep',
                urlFiltro: '',
                cep: '',
                logradouro: '',
                localidade: '',
                bairro: '',
                uf: '',
                endereco: [],
                
                

            }
            
        },
        methods:{
            procurarcep(){
                console.log(this.cep)
                let filtro = this.urlBase + '/searchCep/'+ this.cep
                this.urlFiltro = filtro;
                axios.get(this.urlFiltro)
                .then(response =>{
                    this.endereco =response.data
                    console.log(this.endereco)
                    console.log(this.urlFiltro)
                    
                })
                
            },
            procurarlogradouro(){
                console.log(this.logradouro)
                let filtro = this.urlBase + '/searchLogradouro/'+ this.logradouro
                this.urlFiltro = filtro;
                axios.get(this.urlFiltro)
                .then(response =>{
                    this.endereco =response.data
                    console.log(this.endereco)
                    console.log(this.urlFiltro)
                    
                })
            },
            carregarcep(){
                axios.get(this.urlBase)
                .then(response =>{
                    this.endereco = response.data
                    console.log(this.endereco)
                })
                .catch(errors =>{
                    console.log(errors)
                })

            },
            
        }
}

</script>
