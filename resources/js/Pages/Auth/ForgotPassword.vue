<template>
    <div>
        <Head title="Forgot Password"/>
        <div class="grid grid-cols-2">
            <div class="col-span-2 lg:col-span-1 min-h-screen bg-white pt-12 px-12">
                <div class="px-8 pt-8 pb-3">
                    <div class="mb-12">
                        <div class="flex gap-4 justify-center items-center">
                            <div class="flex justify-center">
                                <div class="inline-block w-20 h-20 bg-gray-100 rounded-full border flex items-center justify-center">
                                    <img src="/assets/img/logo.png" class="w-1/2" alt="Logo StudyLit Png">
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Let’s Start Learning</h3>
                                <span class="text-sm">join with us, and start your science warrior</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-12 mb-12 relative">
                        <Link href="/login" class="btn btn-ghost mb-3">
                            <Icon icon="akar-icons:chevron-left" />
                            Back</Link>
                        <div class="mb-4 text-sm text-gray-600 p-5 rounded-lg bg-primary/10 text-primary">
                            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                        </div>
                    </div>
                    <div class="px-12 mb-12">
                        <form @submit.prevent="onSubmit()">
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Email</span>
                                </label>
                                <input required name="email" maxlength="100" v-model="form.email" type="email" placeholder="Enter your email" class="input input-bordered w-full"/>
                            </div>
                            <div class="my-3 space-y-3 mt-12">
                                <button type="submit" class="btn btn-primary w-full">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-span-2 lg:col-span-1 relative min-h-screen sticky-top-0 bg-gray-50 p-12">
                <div class="w-full px-8 py-12 relative">
                    <h1 class="text-8xl text-primary font-bold absolute top-4">"</h1>
                    <h1 class="text-4xl text-primary font-bold mt-10">Be educated so that you can change the world</h1>
                </div>
                <div class="bottom-0 w-full left-0 text-center flex justify-center mt-12">
                    <img src="/assets/img/forgot-password.png" class="w-10/12 h-auto sticky bottom-0" alt="Illustration Login">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Icon } from '@iconify/vue'
import { Head, Link, useForm  } from '@inertiajs/inertia-vue3'
import TermsOfService from "@/Components/TermsOfService.vue"
export default {
    data() {
        return {
            form: useForm({
                name: '',
                phone: '',
                role: "user",
                username: '',
                terms: false,
                email: '',
                password: '',
                password_confirmation: '',
            })
        }
    },
    watch: {
        username(val) {
            this.form.username = val.replace(/\W/g, "")
        }
    },
    components: {
        TermsOfService,
        Icon,
        Head,
        Link,
    },
    methods: {
        usernameFormatter(e) {
            if(/^\W$/.test(e.key)) {
                e.preventDefault()
            }
            this.form.username = this.form.username.replace(/\s+/g, '.').toLowerCase()
        },
        onSubmit() {
            this.form.post(route('password.email'), {
                preserveState: true,
                onSuccess: () => {
                    this.form.reset('password')
                    this.form.reset('password_confirmation')
                }
            })
        }
    }
}
</script>
