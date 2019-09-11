<template>
    <div>
        <h1 class="red">{{ mensagem }}</h1>
        <p>Projeto prático da SON.</p>
    </div>
</template>

<script>
    export default{
        data(){
            return {
                mensagem: 'Olá, Mundo!'
            }
        },
        mounted() {
            console.log('Estamos prontos para trabalhar!');
        }
    }
</script>

<style>
   .red {
       background-color: red;
       color: white;
   }
</style>