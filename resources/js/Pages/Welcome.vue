<template>

    <HeaderView />
    <SidebarView />
    <UpdatedsBarVue/>
    <main class="xl:px-72 bg-fundo mx-auto container-xl  telaTotal marginTela">
        <div class="h-full flex justify-center">
            <div class="max-w-[800px] w-full min-h-full bg-slate-600 mx-3 blocoTela pt-10">


                <div class="w-full h-40 bg-orange-700">TESTE</div>

            </div>
        </div>
    </main>
</template>

<script setup>

import HeaderView from '@/Components/HeaderViewTwo.vue'
import SidebarView from '@/Components/SidebarView.vue'
import UpdatedsBarVue from '@/Components/UpdatedsBar.vue'

</script>

<style>
.telaTotal{
    min-height:calc(100vh - 70px);
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
</style>
