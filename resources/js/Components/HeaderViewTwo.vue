<template>
  <header class="h-[70px] bg-gray-900 teste text-orange-300 flex justify-end">

    <div class="headerCalc">
        <div class="container mx-auto bg-blue-500">
            <div class="grid grid-cols-3 justify-center">
                <div></div>
                <div>1</div>
                <div class="justify-self-end">2</div>
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
