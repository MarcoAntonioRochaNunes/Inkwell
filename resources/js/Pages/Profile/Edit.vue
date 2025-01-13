<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';


defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
const activeTab = ref('sobre');
import HeaderView from "@/Components/HeaderViewTwo.vue";
import SidebarView from "@/Components/SidebarView.vue";
import FeedPerfil from '@/Components/FeedPerfil.vue';
import SobrePerfil from '@/Components/SobrePerfil.vue';
import ObrasPerfil from '@/Components/ObrasPerfil.vue';
import SeguidoresPerfil from '@/Components/SeguidoresPerfil.vue';
import { ref } from 'vue';

</script>

<template>
    <Head title="Meu Perfil" />

    <HeaderView />
    <SidebarView />
    <main class="xl:pl-72 bg-fundo mx-auto container-xl telaTotal marginTela blocoTela">
        <div class="h-full grid justify-center">
            <!-- Topo do pefil -->
            <div class="mt-28 mb-28 cor-texto74">
                <div class="flex items-center gap-6">
                    <div class="grid justify-items-end text-base font-semibold">
                        <span class="text-orange-500">26000</span>
                        <span>Seguidores</span>
                    </div>
                    <div class="w-20 h-20 rounded-full bg-black m-3 border-2 border-orange-500"></div>
                    <div class="grid text-base font-semibold">
                        <span class="text-orange-500">26000</span>
                        <span>Seguidores</span>
                    </div>
                </div>

                <div class="grid justify-items-center font-semibold gap-2 text-xl">
                    <span class="text-white text-xl">Marco Antonio</span>
                    <span class="text-xs italic">@MarcoAntonio</span>
                </div>

                <div class="grid grid-cols-2 gap-2 mt-5 font-bold">
                    <div class="grid justify-items-center">
                        <span class="text-orange-500">36</span>
                        <span>Obras</span>
                    </div>
                    <div class="grid justify-items-center">
                        <span class="text-orange-500">10</span>
                        <span>Obras Lidas</span>
                    </div>
                </div>

            </div>
            <!-- Topo do pefil -->

        </div>
        <div class=" px-20">
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="#" @click="activeTab = 'sobre'" :class="{'dark:text-white dark:border-orange-500': activeTab === 'sobre'}" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-white">Sobre</a>
                    </li>
                    <li class="me-2">
                        <a href="#" @click="activeTab = 'feed'" :class="{'dark:text-white dark:border-orange-500': activeTab === 'feed'}" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-white">Feed</a>
                    </li>
                    <li class="me-2">
                        <a href="#" @click="activeTab = 'obras'" :class="{'dark:text-white dark:border-orange-500': activeTab === 'obras'}" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-white">Obras</a>
                    </li>
                </ul>
            </div>

            <!-- Conteudo -->
            <div class="min-h-[880px]">
                <div v-if="activeTab === 'sobre'">
                    <SobrePerfil />
                </div>
                <div v-if="activeTab === 'feed'">
                    <FeedPerfil />
                </div>
                <div v-if="activeTab === 'obras'">
                    <ObrasPerfil />
                </div>
            </div>
            <!-- Conteudo -->

        </div>
    </main>
</template>

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
