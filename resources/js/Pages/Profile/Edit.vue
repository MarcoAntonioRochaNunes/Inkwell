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
    <main class="xl:px-72 bg-fundo mx-auto container-xl telaTotal marginTela">
        <div class="h-full flex justify-center bg-red-300">
            jdaskljdalsk
        </div>
    </main>
</template>
