<template>
    <div>
        <Head title="Photo Profile"/>
        <div class="md:fixed w-full top-0 left-0 py-6 px-12">
            <div class="flex items-center justify-start gap-3">
                <img src="/assets/img/logo.png" class="w-10" alt="Logo StudyLit">
                <span class="text-xl font-bold">STUDYLIT</span>
            </div>
        </div>
        <div class="min-h-screen flex items-center w-full justify-center py-12 px-6">
            <div class="mb-8 py-12 md:w-1/2 w-full">
                <div class="mb-5">
                    <h3 class="text-2xl font-bold">Fill your photo and cover</h3>
                    <span class="text-sm">Fill your profile and other user can recognize your account</span>
                </div>
                <div class="bg-white shadow-lg relative rounded-2xl overflow-hidden">
                    <div class="relative">
                        <input class="hidden" type="file" name="cover_file" id="cover_file" @change="onChangeCover($event)">
                        <label for="cover_file" class="absolute h-48 bg-primary w-full left-0 top-0 overflow-hidden">
                            <img :src="form.preview_cover === null ? '/assets/img/cover.png' : form.preview_cover" class="w-full hover:opacity-70 cursor-pointer hover:scale-105 transition-all h-full object-cover object-center" alt="Cover">
                        </label>
                        <input class="hidden" type="file" name="profile_file" id="profile_file" @change="onChangeProfile($event)">
                        <div class="flex justify-start items-end gap-4 p-6 pt-36">
                            <label for="profile_file" class="w-28 h-28 relative z-20 bg-primary hover:bg-indigo-900 overflow-hidden transition-all cursor-pointer rounded-full inline">
                                <div v-if="form.preview_profile === null" class="flex h-full w-full left-0 items-center justify-center">
                                    <span class="text-3xl text-white font-bold">{{ anonymousName($page.props.user.name) }}</span>
                                </div>
                                <div v-else class="h-full w-full absolute top-0 left-0">
                                    <img :src="form.preview_profile" class="w-full hover:opacity-70 cursor-pointer hover:scale-105 transition-all h-full object-cover object-center" alt="Profile">
                                </div>
                            </label>
                            <div class="relative">
                                <h2 class="text-lg font-bold">{{ $page.props.user.name }}</h2>
                                <span class="text-sm">{{ $page.props.user.email }}</span>
                            </div>
                        </div>
                        <div class="fixed bottom-0 w-full left-0 bg-white p-4 shadow-2xl flex justify-end gap-3 items-center">
                            <Link :href="route('dashboard')" type="button" class="btn btn-ghost px-6">Skip</Link>
                            <button type="submit" class="btn btn-primary px-12" @click="onSubmit()">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Icon } from '@iconify/vue'
import { Head, Link, useForm } from '@inertiajs/inertia-vue3'
export default {
    data() {
        return {
            form: useForm({
                cover: null,
                profile: null,
                preview_cover: null,
                preview_profile: null,
            }),
        }
    },
    components: {
        Icon,
        Head,
        Link
    },
    methods: {
        onChangeCover(e) {
            let file = e.target.files[0]
            this.form.preview_cover = URL.createObjectURL(file)
            this.form.cover = file
        },
        onChangeProfile(e) {
            let file = e.target.files[0]
            this.form.preview_profile = URL.createObjectURL(file)
            this.form.profile = file
        },
        onSubmit() {
            this.form.post(route('photo-profile.form.post'), {
                preserveState: true
            })
        }
    }
}
</script>
