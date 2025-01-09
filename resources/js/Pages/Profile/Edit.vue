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

import HeaderView from "@/Components/HeaderViewTwo.vue";
import SidebarView from "@/Components/SidebarView.vue";

</script>

<template>
    <Head title="Meu Perfil" />

    <HeaderView />
    <SidebarView />
    <main class="xl:pl-72 bg-fundo mx-auto container-xl telaTotal marginTela">
        <div class="h-full flex justify-center bg-red-300">

            <div class="mt-28 mb-28">
                <div class="flex items-center gap-2">
                    <div class="grid justify-items-end text-base font-semibold">
                        <span>26000</span>
                        <span>Seguidores</span>
                    </div>
                    <div class="w-20 h-20 rounded-full bg-black m-3"></div>
                    <div class="grid text-base font-semibold">
                        <span>26000</span>
                        <span>Seguidores</span>
                    </div>
                </div>

                <div class="grid justify-items-center font-semibold gap-2 text-xl">
                    Marco Antonio
                    <span class="text-xs">@MarcoAntonio</span>
                </div>

            </div>

        </div>
    </main>
</template>
