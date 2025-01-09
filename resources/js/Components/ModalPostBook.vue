<template>
    <TransitionRoot as="template" :show="abrir">
      <Dialog class="relative z-50" @close="$emit('close')">
        <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
          <div class="fixed inset-0 modal_post_container transition-opacity" />
        </TransitionChild>

        <div class="fixed inset-0 z-50 overflow-y-auto">
          <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
              <DialogPanel class="relative transform overflow-hidden rounded-lg bg-fundo-post px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-[900px] sm:p-6 sm:m-1">
                <div>
                  <div class="text-white p-2 flex justify-between items-center">
                    <div>MARCO |</div>
                    <div><button type="button" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" @click="$emit('close')">Fechar</button></div>
                  </div>
                  <div class="mt-3 sm:mt-5">
                    <div class="max-w-full h-64 ">
                        <img class="w-full h-full object-cover rounded-t-lg" :src="item.image" alt="">
                    </div>
                    <div class="p-4 flex">
                        <DialogTitle class="font-semibold text-gray-50 ">{{ item.nome }}</DialogTitle>
                    </div>
                    <div class="mt-1 grid gap-5 p-4">
                      <div class="grid gap-3 text-gray-50">
                        <h2 class="font-semibold text-lg text-fundo-post">Sinopse</h2>
                        <p class="text-base font-normal">{{ item.sinopse}}</p>
                      </div>
                      <div class="grid gap-3 text-gray-50">
                        <h2 class="font-semibold text-lg text-gray-500"></h2>
                        <p class="text-base font-normal">{{ item.capitulo}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </DialogPanel>
            </TransitionChild>
          </div>
        </div>
      </Dialog>
    </TransitionRoot>
  </template>

  <script setup>
    import { ref } from 'vue'
    import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
    import { CheckIcon } from '@heroicons/vue/24/outline'

    const props = defineProps({
        abrir: { type: Boolean, default: false },
        item: { type: Object, required: true }
    });

    const emit = defineEmits(['close']);

  </script>





    <style>

    .modal_post_container{


        width: 100vw;
        /* background-color: #18191A; */
        background-color: rgba(24, 25, 26, 0.95);
        /* background-color: #fff; */
        /* left: 300px; */
        /* right: 280px; */
        /* background-color: red; */
    }
    @media (max-width: 1024px) {
        .modal_post_container {
            width: 100vw;
            left: 0px;
            right: 0px;
            /* background-color: blue; */
        }
    }

    </style>
