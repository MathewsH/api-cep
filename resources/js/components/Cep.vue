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
    
</div>
</template>

<script>
export default {
    props:['endereco']
}
</script>
