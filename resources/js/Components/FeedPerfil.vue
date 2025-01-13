<template>

    <div class="px-6 py-2">
        <div class="px-32 mb-16">
            <Post :posts="posts"/>
        </div>
    </div>

</template>

<script setup>
    import Post from '@/Components/PostVue.vue'

    const posts = [

    {
        nome:'O anonimo',
        sinopse:"Chamem-me de Ismael. Alguns anos atrás - não importa exatamente quanto tempo tendo pouco ou nenhum dinheiro na minha bolsa e nada em particular para me interessar em terra, pensei que navegaria um pouco e veria a parte aquática do mundo.",
        capitulo:null,
        emGrupo:true,
        tags: null
    },
    {
        nome:'Shadow Slave',
        sinopse:"Chamem-me de Ismael. Alguns anos atrás - não importa exatamente quanto tempo tendo pouco ou nenhum dinheiro na minha bolsa e nada em particular para me interessar em terra, pensei que navegaria um pouco e veria a parte aquática do mundo.",
        capitulo:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        emGrupo:false,
        tags: ['Dark Fantasia', 'Action'],
        image: 'https://i0.wp.com/animecenterbr.com/wp-content/uploads/2024/03/Shadow-Slave-Capa.png?resize=1024%2C600&ssl=1'
    },
    {
        nome:'O receptaculo',
        sinopse:"Chamem-me de Ismael. Alguns anos atrás - não importa exatamente quanto tempo tendo pouco ou nenhum dinheiro na minha bolsa e nada em particular para me interessar em terra, pensei que navegaria um pouco e veria a parte aquática do mundo.",
        capitulo:null,
        emGrupo:false,
        tags: ['Dark Fantasia', 'Action']
    },
    {
        nome:'Grande Roubo',
        sinopse:"Chamem-me de Ismael. Alguns anos atrás - não importa exatamente quanto tempo tendo pouco ou nenhum dinheiro na minha bolsa e nada em particular para me interessar em terra, pensei que navegaria um pouco e veria a parte aquática do mundo.",
        capitulo:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        emGrupo:false,
        tags: ['Roubo', 'Seila'],
        image: 'https://m.media-amazon.com/images/I/A1s+6nCSdmL.jpg'

    },

];

</script>

<style>

</style>
