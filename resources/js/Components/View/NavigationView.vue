<template>
    <div class="navbar bg-base-100 relative overflow-y-visible shadow z-50">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">
                <img src="/logo.png" class="w-10 mr-3" alt="">
                Seenau
            </a>
            <div>
                <label for="explore-toggle" tabindex="0" class="btn btn-primary">Jelajahi</label>
                <input class="hidden" type="checkbox" id="explore-toggle" v-model="toggleExplore">
            </div>
        </div>
        <div class="flex-none hidden md:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a class="rounded-lg">Fitur</a></li>
                <li><a class="rounded-lg">Mentor</a></li>
            </ul>
            <div class="form-control">
                <input type="text" placeholder="Ingin belajar apa ?" class="input input-bordered" />
            </div>
        </div>
        <div class="flex-none inline-block md:hidden ">
            <label for="swap-toggle-nav" class="btn btn-ghost text-2xl swap swap-rotate">
                <input v-model="toggleMenu" class="hidden" type="checkbox" id="swap-toggle-nav">
                <Icon class="swap-off fill-current" icon="gg:menu-right" />
                <Icon class="swap-on fill-current" icon="gg:close" />
            </label>
            <div class="shadow-xl absolute px-6 transition-all py-6 space-y-6 top-16 bg-white w-full left-0"
                :class="{'opacity-0 z-10 -top-72': !toggleMenu}">
                <div class="form-control">
                    <input type="text" placeholder="Ingin belajar apa ?" class="input input-bordered" />
                </div>
                <ul class="menu menu-horizontal px-1">
                    <li><a class="rounded-lg">Fitur</a></li>
                    <li><a class="rounded-lg">Mentor</a></li>
                </ul>
            </div>
        </div>
    </div>
    <label v-if="toggleExplore" for="explore-toggle" class="w-full min-h-screen bg-black/10 absolute z-50">
        <label for="">
            <div class="container mx-auto bg-white">
                <div class="grid md:grid-cols-4 grid-cols-1">
                    <div>
                        <div class="w-full h-40 bg-gradient-to-br to-cyan-500 from-primary">
                            <div class="text-white p-8">
                                <Icon class="text-3xl" icon="material-symbols:login" />
                                <h2 class="text-xl font-bold">Login</h2>
                                <p>Login to access all feature for free</p>
                            </div>
                        </div>
                        <div class="w-full h-40 bg-gradient-to-br to-green-500 from-blue-500">
                            <div class="text-white p-8">
                                <Icon class="text-3xl" icon="mdi:register" />
                                <h2 class="text-xl font-bold">Register</h2>
                                <p>Register now and join with us</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 md:col-span-2">
                        <div class="grid-cols-3 grid md:border-r justify-items-center">
                            <div class="space-y-1">
                                <h4 class="font-bold text-xl text-primary">Kategori</h4>
                                <p v-for="(item, index) in 8">Elektronika {{ item }}</p>
                            </div>
                            <div class="space-y-1">
                                <h4 class="font-bold text-xl text-primary">Library</h4>
                                <p v-for="(item, index) in 8">Elektronika {{ item }}</p>
                            </div>
                            <div class="space-y-1">
                                <h4 class="font-bold text-xl text-primary">Forum</h4>
                                <p>Komunitas</p>
                                <p>Forum</p>
                                <p>Proyek</p>
                                <h4 class="font-bold text-xl text-primary">Artikel</h4>
                                <h4 class="font-bold text-xl text-primary">Bantuan</h4>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="p-5">
                            <div class="space-y-1">
                                <h4 class="font-bold text-xl text-primary">Other Fitur</h4>
                                <p>Books & Library</p>
                                <p>Meet & Discussion</p>
                                <p>Online Practice</p>
                                <p>Forum Discussion</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </label>
    </label>

</template>

<script setup>
import { Icon } from '@iconify/vue'
import { ref } from 'vue'

const toggleMenu = ref(false)
const toggleExplore = ref(false)
</script>
