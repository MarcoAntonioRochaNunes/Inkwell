<template>
  <header class="h-[70px] bg-gray-900 teste text-orange-300 flex justify-end">

    <div class="headerCalc flex items-center">
        <div class="container mx-auto">
            <div class="grid grid-cols-3 justify-center">
                <div></div>
                <div class=""><input class="max-w-[500px] w-full h-9 px-4 rounded-lg border-none focus:" type="search" name="buscar" id="buscar" placeholder="Buscar..."></div>

                <div class="justify-self-end">Perfil</div>
            </div>
        </div>
    </div>

  </header>
</template>

<script setup>

</script>

<style>
@media(max-width: 1023px){
    .teste{
        display: none;
    }
}
    .headerCalc{
        width: calc(100vw - 310px);
        float: right;

    }
</style>
