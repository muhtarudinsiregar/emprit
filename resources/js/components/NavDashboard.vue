<template>
    <header class="bg-gray-900">
        <div class="flex items-center justify-between bg-gray-900 px-4 py-3">
            <div>
                <h1 class="text-white uppercase font-bold">Emprit</h1>
            </div>
            <div class="xl:hidden">
                <button @click="isOpen = !isOpen" type="button" class="block text-gray-500 hover:text-white">
                    <svg class="h-6 w-6 fill-current" id="Layer_1" style="enable-background:new 0 0 32 32;"
                        version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path v-if="isOpen"
                            d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
                        <path v-if="!isOpen"
                            d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z" />
                    </svg>
                </button>
            </div>
            <div class="hidden xl:block">
                <a href="" class="text-white font-semibold">Logout</a>
            </div>
        </div>
        <div class="px-2 pt-2 pb-3 xl:hidden xxl:hidden sm:hidden" :class="isOpen? 'block': 'hidden'">
            <a href="http://" class="block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800">Profile</a>
            <a href="http://" class="mt-1 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800">Logout</a>
        </div>
    </header>
</template>

<script>
    export default {
        data() {
            return {
                isOpen: false,
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
