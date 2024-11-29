<template>
    <ul>
        <li v-for="(nome, index) in nomes" :key="index">{{nome}}</li>
    </ul>

    {{ola}}
</template>

<script setup>
import { reactive, onMounted  } from "vue";

    let nomes = reactive(['marco', 'damiao'])
    const props = defineProps(['teste'])
    let ola = '';

</script>

<style>

</style>
