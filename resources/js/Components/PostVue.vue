<template>
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
    <ModalPostBook :abrir="open" :item="itemPost" @close="ControleModal"/>

</template>

<script setup>
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
import ModalPostBook from "@/Components/ModalPostBook.vue";


const props = defineProps({
    posts: { type: Array, required: true }
});

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
</script>

<style>

</style>
