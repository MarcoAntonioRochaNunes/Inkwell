<template>
    <Head title="Inicio" />
    <HeaderView />
    <SidebarView />
    <UpdatedsBarVue />
    <main class="xl:px-72 bg-fundo mx-auto container-xl telaTotal marginTela">
        <div class="h-full flex justify-center">
            <div
                class="max-w-[800px] w-full mx-3 blocoTela mt-10 grid"
            >
            <!-- caixa de mensagem Inicio-->
                <div
                    class="w-full h-40 min-h-80 flex relative flex-col items-center mb-28"
                >
                    <div
                        class="w-20 h-20 rounded-full bg-perfis absolute top-0 left-0 border-fundo tela1150px-hide"
                    ></div>
                    <input
                        class="max-w-[690px] w-full mt-10 mb-3 min-h-14 px-8 rounded-lg bg-fundo-post text-color1 placeholder-color1 border-none focus:border-orange-500 focus:outline-none focus:ring-orange-500"
                        type="text"
                        name="sinopse_home"
                        id="sinopse_home"
                        placeholder="Qual e a sinopse..."
                    />

                    <div class="max-w-[690px] w-full rounded-lg">
                        <div
                            class="w-full mb-4 border rounded-lg bg-fundo-post border-none"
                        >
                            <div class="px-4 rounded-t-lg bg-fundo-post">
                                <label for="comment" class="sr-only"
                                    >Your comment</label
                                >
                                <textarea
                                    id="comment"
                                    rows="5"
                                    class="w-full h-32 resize-none px-0 text-sm border-0 bg-fundo-post focus:ring-0 text-white placeholder-color1"
                                    placeholder="Vamos escrever..."
                                    required
                                ></textarea>
                            </div>
                            <div
                                class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600"
                            >
                                <div
                                    class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2 justify-between w-full"
                                >
                                    <div>
                                        <button
                                            type="button"
                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                        >
                                            <svg
                                                class="w-4 h-4"
                                                aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 12 20"
                                            >
                                                <path
                                                    stroke="currentColor"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6"
                                                />
                                            </svg>
                                            <span class="sr-only"
                                                >Attach file</span
                                            >
                                        </button>
                                        <button
                                            type="button"
                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                        >
                                            <svg
                                                class="w-4 h-4"
                                                aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor"
                                                viewBox="0 0 16 20"
                                            >
                                                <path
                                                    d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"
                                                />
                                            </svg>
                                            <span class="sr-only"
                                                >Set location</span
                                            >
                                        </button>
                                        <button
                                            type="button"
                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                        >
                                            <svg
                                                class="w-4 h-4"
                                                aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor"
                                                viewBox="0 0 20 18"
                                            >
                                                <path
                                                    d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"
                                                />
                                            </svg>
                                            <span class="sr-only"
                                                >Upload image</span
                                            >
                                        </button>
                                    </div>
                                    <div class="flex items-center">
                                        <button
                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                                        >
                                            Publicar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-[690px] w-full flex mb-5">
                        <label for="simple-search" class="sr-only"
                            >Search</label
                        >
                        <div class="relative w-full">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
                            >
                                <svg
                                    class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 18 20"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"
                                    />
                                </svg>
                            </div>
                            <input
                                type="text"
                                id="simple-search"
                                class="bg-fundo-post border text-sm rounded-lg w-full ps-10 p-2.5 border-none focus:outline-none focus:ring-orange-500 text-white placeholder-color1"
                                placeholder="Search branch name..."
                                required
                            />
                        </div>
                        <button type="submit" class="p-2.5 ms-2">
                            <svg
                                class="w-4 h-4"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                                />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            <!-- caixa de mensagem Fim-->

            <!-- Posts Inicio-->
                <div class="grid gap-10 divide-y">
                    <div class="grid post-grid-template gap-3 pt-10" v-for="item in posts" :key="item.nome">
                        <div class="w-12 h-12 bg-perfis rounded-full"></div>
                        <div class="grid gap-1">
                            <div class=" h-[50px] flex items-center gap-5">
                                <div class="relative">
                                    <h2 class="text-lg text-white">Maria Teste dos Santos | </h2>
                                    <span class="absolute text-color1">2h</span>
                                </div>
                            </div>
                            <!-- Imagem Inicio -->
                            <div class="mt-7" v-if="item.image">
                                <div class="h-96 rounded-lg bg-orange-200">
                                    <img class="max-w-full w-full h-full object-cover rounded-t-lg" :src="item.image" alt="">
                                </div>
                            </div>

                            <!-- Titulo Inicio -->
                            <div class="mt-5 flex justify-between font-semibold">
                                <!-- Titulo -->
                                <p class="text-white text-base">{{item.nome}}</p>

                                <!-- Tags -->
                                <div v-if="item.tags" class="flex gap-2">
                                    <div v-for="(tag, index) in item.tags" :key="index">
                                        <span class="bg-orange-500 px-3 rounded-sm text-fundo-pagina">{{ tag }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Titulo Fim -->

                            <!-- Imagem Fim -->
                            <div class="mt-5 mb-10 divide-y text-white">
                                <p class="mb-3" v-if="item.sinopse && item.capitulo">
                                    {{ item.sinopse }}
                                </p>
                                <p class="mb-3" v-if="item.sinopse && !item.capitulo">
                                    {{ item.sinopse }}
                                </p>
                                <p class="mb-3" v-if="item.capitulo && !item.sinopse">
                                    {{ item.capitulo }}
                                </p>
                            </div>

                            <div class="flex justify-between">
                                <div class="flex gap-4 items-center">
                                    <div>
                                        <a href="#" class="text-gray-400 hover:bg-orange-600 hover:text-white group flex gap-x-3 rounded-md p-2 text-sm font-semibold items-center">
                                            <component :is="MegaphoneIcon" class="size-4 shrink-0" aria-hidden="true" />
                                            Reagir
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="text-gray-400 hover:bg-orange-700 hover:text-white group flex gap-x-3 rounded-md p-2 text-sm font-semibold items-center">
                                            <component :is="ChatBubbleOvalLeftIcon" class="size-4 shrink-0" aria-hidden="true" />
                                            Comentarios
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="text-gray-400 hover:bg-orange-700 hover:text-white group flex gap-x-3 rounded-md p-2 text-sm font-semibold items-center">
                                            <component :is="PencilSquareIcon" class="size-4 shrink-0" aria-hidden="true" />
                                            Continuar
                                        </a>
                                    </div>
                                    <div>
                                        <button class="rounded-sm text-white flex gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <button  class="text-gray-800 bg-white px-5 hover:bg-gray-700 hover:text-white group flex gap-x-3 rounded-md p-2 text-sm font-semibold items-center" v-if="item.capitulo && item.sinopse"  @click="ControleModal(), abrirModal(item)" >
                                    <component :is="EyeIcon" class="size-4 shrink-0" aria-hidden="true" />
                                    Ler
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Posts Fim-->
            </div>
        </div>
    </main>
    <ModalPostBook :abrir="open" :item="itemPost" @close="ControleModal"/>
</template>

<script setup>

import HeaderView from "@/Components/HeaderViewTwo.vue";
import ModalPostBook from "@/Components/ModalPostBook.vue";
import SidebarView from "@/Components/SidebarView.vue";
import UpdatedsBarVue from "@/Components/UpdatedsBar.vue";
import {
  Bars3Icon,
  CalendarIcon,
  ChartPieIcon,
  DocumentDuplicateIcon,
  FolderIcon,
  HomeIcon,
  UsersIcon,
  XMarkIcon,
  GlobeAltIcon,
  MagnifyingGlassIcon,
  MegaphoneIcon,
  PencilSquareIcon,
  ChatBubbleOvalLeftIcon,
  EyeIcon,
} from '@heroicons/vue/16/solid';
import { ref } from "vue";

    const open = ref(false);
    const itemPost = ref({});

    const ControleModal = () => {
        open.value = !open.value;
    }

    const abrirModal = (item) => {
        itemPost.value = item;
        open.value = true;
    };

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
.telaTotal {
    min-height: calc(100vh - 70px);
    height: 100%;
}

@media (max-width: 1024px) {
    .marginTela {
        margin-top: 4rem /* 64px */;
    }
}
@media (min-width: 1026px) and (max-width: 1279px) {
    .blocoTela {
        margin-left: 300px;
    }
}
@media (min-width: 1026px) and (max-width: 1370px) {
    .tela1150px-hide {
        display: none;
    }
}
@media (max-width: 800px) {
    .tela1150px-hide {
        display: none;
    }
}
.post-grid-template{
    grid-template-columns: auto 1fr;
}
.btn-post{
    display: flex;
    gap: 12px;
    width: 150px;
    height: 35px;
    justify-content: center;
    align-items: center;
    border-radius: 4px;
}
</style>
