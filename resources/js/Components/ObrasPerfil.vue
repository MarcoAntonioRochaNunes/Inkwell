<template>
    <div class="px-6 py-2">
        <div class="px-32 mb-16">
            <div class="min-h-32 h-full flex gap-3 flex-wrap py-5">
                <div class="bg-fundo-post max-w-56 h-60 w-full rounded-lg text-white" v-for="item in 10" :key="item">
                    <a href="#" class="">
                        <div></div>
                        <span class=" flex items-end p-5">Obras</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
