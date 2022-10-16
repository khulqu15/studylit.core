<template>
    <div>
        <Head title="Login"/>
        <div class="grid grid-cols-2">
            <div class="col-span-2 lg:col-span-1 relative min-h-screen bg-gradient-to-tr from-cyan-500 to-blue-500 p-12">
                <div class="w-full px-8 py-12 relative">
                    <h1 class="text-8xl text-white font-bold absolute top-4">"</h1>
                    <h1 class="text-4xl text-white font-bold mt-10">Be educated so that you can change the world</h1>
                </div>
                <div class="absolute bottom-0 w-full left-0 text-center flex justify-center">
                    <img src="/assets/img/login.png" class="w-3/4" alt="Illustration Login">
                </div>
            </div>
            <div class="col-span-2 lg:col-span-1 min-h-screen lg:max-h-screen lg:overflow-y-auto bg-white pt-12 px-12">
                <div class="px-8 pt-12 pb-3">
                    <div class="text-center mb-12">
                        <div class="flex justify-center">
                            <div class="inline-block w-20 h-20 bg-gray-100 rounded-full border flex items-center justify-center">
                                <img src="/assets/img/logo.png" class="w-1/2" alt="Logo StudyLit Png">
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold">Hello Science Warrior !</h3>
                        <span class="text-sm">welcome back, let’s start more learning now !</span>
                    </div>
                    <div class="px-12 mb-12">
                        <form @submit.prevent="onSubmit()">
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Email</span>
                                </label>
                                <input required name="email" v-model="form.email" type="text" placeholder="Enter your email" class="input input-bordered w-full"/>
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Password</span>
                                </label>
                                <input required name="password" v-model="form.password" type="password" placeholder="Enter your password" class="input input-bordered w-full"/>
                            </div>
                            <div class="flex justify-between my-3">
                                <div class="form-control">
                                    <label class="label cursor-pointer">
                                        <input name="remember" v-model="form.remember_me" type="checkbox" class="toggle mr-3 toggle-primary" checked />
                                        <span class="label-text">Remember me</span>
                                    </label>
                                </div>
                                <div>
                                    <Link href="/forgot-password" class="link link-primary relative top-2">Forgot Password</Link>
                                </div>
                            </div>
                            <div class="my-3 space-y-3">
                                <button type="submit" class="btn btn-primary w-full">Login</button>
                                <button type="button" class="btn bg-gray-50 text-gray-700 w-full gap-2 border-0 hover:bg-gray-200 focus:bg-gray-100">
                                    <Icon class="text-xl" icon="flat-color-icons:google"/>Login with google
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        <span>Don't have an account ? <Link class="link link-primary" href="/register">Register</Link></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Icon} from '@iconify/vue'
import { Head, Link, useForm  } from '@inertiajs/inertia-vue3'
export default {
    data() {
        return {
            form: useForm({
                email: '',
                password: '',
                remember_me: false,
            })
        }
    },
    components: {
        Icon,
        Head,
        Link,
    },
    methods: {
        onSubmit() {
            this.form.post('/login', {
                preserveState: true,
                onSuccess: () => this.form.reset('password')
            })
        }
    }
}
</script>
