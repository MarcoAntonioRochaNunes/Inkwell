<template>
    <HeaderView />
    <SidebarView />

    <div class="sidebar">

    </div>

</template>

<script setup>
import HeaderView from '@/Components/HeaderView.vue'
import SidebarView from '@/Components/SidebarView.vue'
</script>

<style>
.sidebar{
    height: calc(100vh - 74px);
    background: green;
    width: 320px;
    position: fixed;
}
</style>
