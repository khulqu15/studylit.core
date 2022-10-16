<template>
    <div>
        <Head title="Email Verfication"/>
        <div class="grid grid-cols-2">
            <div class="col-span-2 lg:col-span-1 min-h-screen bg-white pt-12 px-12 relative">
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
                    <div class="px-12 mb-12 relative top-24">
                        <div class="mb-4 text-sm text-gray-600 p-5 rounded-lg bg-primary/10 text-primary">
                            Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                        </div>
                    </div>
                    <div class="absolute bottom-12 px-12 w-full left-0">
                        <form @submit.prevent="onSubmit" class="px-20">
                            <button type="submit" class="btn btn-primary w-full" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Resend Verification Email
                            </button>
                            <div class="mt-4 grid grid-cols-2 items-center justify-between gap-3">
                                <Link :href="route('profile.show')" class="btn btn-ghost w-full"> Edit Profile</Link>
                                <Link :href="route('logout')" method="post" class="btn btn-ghost w-full">
                                    Log Out
                                </Link>
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
                    <img src="/assets/img/verify.png" class="w-10/12 h-auto sticky bottom-0" alt="Illustration Login">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Icon } from '@iconify/vue'
import { Head, Link, useForm  } from '@inertiajs/inertia-vue3'
import TermsOfService from "@/Components/TermsOfService.vue"
import PrimaryButton from '@/Components/PrimaryButton.vue';
export default {
    props: ['status'],
    data() {
        return {
            form: useForm()
        }
    },
    computed: {
        verificationLinkSent() {
            this.status === 'verification-link-sent'
        },
    },
    components: {
        TermsOfService,
        PrimaryButton,
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
            this.form.post(route('verification.send'));
        }
    }
}
</script>
