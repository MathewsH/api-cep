<template>

 <div class="form-group" >

     
        <div class="row mb-3" v-for="e in endereco" v-bind:key="e.id" >
      <label for="cep" class="col-md-4 col-form-label text-md-end">Cep:{{e.cep}}</label>
    </div>

    <div class="row mb-3" v-for="e in endereco" v-bind:key="e.id">
      <label for="logradouro" class="col-md-4 col-form-label text-md-end">Logradouro:{{e.logradouro}}</label>
    </div>

    <div class="row mb-3" v-for="e in endereco" v-bind:key="e.id">
      <label for="bairro" class="col-md-4 col-form-label text-md-end">Bairro:{{e.bairro}}</label>
    </div>

    <div class="row mb-3" v-for="e in endereco" v-bind:key="e.id">
      <label for="localidade" class="col-md-4 col-form-label text-md-end">Localidade:{{e.localidade}}</label>
    </div>
    <div class="row mb-3" v-for="e in endereco" v-bind:key="e.id">
      <label for="localidade" class="col-md-4 col-form-label text-md-end">UF:{{e.uf}}</label>
    </div>


        <div class="row mb-3" >
         <label for="" class="col-md-4 col-form-label text-md-end">Fonte: https://viacep.com.br/</label>
         </div>


        <div class="row mb-3">
      <label for="cep" class="col-md-4 col-form-label text-md-end">Cep:{{endereco.cep}}</label>
    </div>

    <div class="row mb-3">
      <label for="logradouro" class="col-md-4 col-form-label text-md-end">Logradouro:{{endereco.logradouro}}</label>
    </div>

    <div class="row mb-3">
      <label for="bairro" class="col-md-4 col-form-label text-md-end">Bairro:{{endereco.bairro}}</label>
    </div>

    <div class="row mb-3">
      <label for="localidade" class="col-md-4 col-form-label text-md-end">Localidade:{{endereco.localidade}}</label>
    </div>
    <div class="row mb-3">
      <label for="localidade" class="col-md-4 col-form-label text-md-end">UF:{{endereco.uf}}</label>
    </div>

    
    
</div>
</template>

<script>
export default {
    props:['endereco']
}
</script>
