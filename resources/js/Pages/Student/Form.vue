<template>
    <div>
        <Head title="Student Form"/>
        <div class="md:fixed w-full top-0 left-0 py-6 px-12">
            <div class="flex items-center justify-start gap-3">
                <img src="/assets/img/logo.png" class="w-10" alt="Logo StudyLit">
                <span class="text-xl font-bold">STUDYLIT</span>
            </div>
        </div>
        <div class="min-h-screen flex items-center w-full justify-center py-12">
            <div class="mb-8 py-12">
                <div class="flex gap-4 justify-center mb-12 items-center">
                    <div class="flex justify-center">
                        <div class="inline-block w-20 h-20 bg-gray-100 rounded-full border flex items-center justify-center">
                            <img src="/assets/img/logo.png" class="w-1/2" alt="Logo StudyLit Png">
                        </div>
                    </div>
                    <div class="w-full">
                        <div>
                            <h3 class="text-2xl font-bold">Let’s Start Learning</h3>
                            <span class="text-sm">join with us, and start your science warrior</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <form @submit.prevent="onSubmitAddress()" v-if="form_data === 'address'">
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Country</span>
                                </label>
                                <input required name="country" maxlength="100" v-model="form.country" type="text" placeholder="Enter your country" class="input input-bordered w-full"/>
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Province</span>
                                </label>
                                <input required name="province" maxlength="100" v-model="form.province" type="text" placeholder="Enter your province" class="input input-bordered w-full"/>
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">City</span>
                                </label>
                                <input required name="city" maxlength="100" v-model="form.city" type="text" placeholder="Enter your city" class="input input-bordered w-full"/>
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">District</span>
                                </label>
                                <input required name="district" maxlength="100" v-model="form.district" type="text" placeholder="Enter your district" class="input input-bordered w-full"/>
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Village</span>
                                </label>
                                <input required name="village" maxlength="20" v-model="form.village" type="text" placeholder="Enter your village" class="input input-bordered w-full"/>
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Address</span>
                                </label>
                                <input required name="address" maxlength="200" v-model="form.address" type="text" placeholder="Enter your address" class="input input-bordered w-full"/>
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Post code</span>
                                </label>
                                <input required name="postcode" maxlength="200" v-model="form.postcode" type="text" placeholder="Enter your post code" class="input input-bordered w-full"/>
                            </div>
                            <div class="fixed bottom-0 w-full left-0 bg-white p-4 shadow-2xl flex justify-end gap-3 items-center">
                                <button type="submit" class="btn btn-primary px-12">Next</button>
                            </div>
                        </form>

                        <form @submit.prevent="onSubmitSchool()" v-if="form_data === 'school'">
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Type Student</span>
                                </label>
                                <select required name="type" v-model="form.type" class="select select-bordered w-full">
                                    <option v-for="(item, index) in student_types" :key="index" :value="item">{{ upperFirst(item) }}</option>
                                </select>
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Instance</span>
                                </label>
                                <input required name="instance" maxlength="100" v-model="form.instance" type="text" placeholder="Enter your instance" class="input input-bordered w-full"/>
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Major</span>
                                </label>
                                <input required name="major" maxlength="100" v-model="form.major" type="text" placeholder="Enter your major" class="input input-bordered w-full"/>
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Class or Semester</span>
                                </label>
                                <input required name="class" maxlength="100" v-model="form.class" type="text" placeholder="Enter your class" class="input input-bordered w-full"/>
                            </div>
                            <div class="fixed bottom-0 w-full left-0 bg-white p-4 shadow-2xl flex justify-end gap-3 items-center">
                                <button type="button" class="btn btn-ghost px-6" @click="form_data = 'address'">Back</button>
                                <button type="submit" class="btn btn-primary px-12">Next</button>
                            </div>
                        </form>

                        <div v-if="form_data === 'talent'">
                            <h3 class="text-2xl font-bold mb-6">Choose your talent</h3>
                            <div class="grid grid-cols-4 gap-6 items-center justify-center">
                                <div v-for="(item, index) in 8" class="lg:col-span-1 md:col-span-2 col-span-2 w-48">
                                    <div @click="selectTalent(item, index, 'Talent '+item)" class="w-full overflow-hidden h-48 relative bg-gradient-to-tr rounded-2xl from-primary to-cyan-200 inline-block">
                                        <img :class="talent.find(tal => tal.index === index) ? 'opacity-30' : ''" class="absolute top-0 left-0 w-full h-full object-cover object-center hover:opacity-30 transition-all cursor-pointer" :src="`https://picsum.photos/id/${item * 20}/367/267`" :alt="`Random Image ${item}`">
                                        <div v-if="talent.find(tal => tal.index === index)" class="flex relative w-full h-full items-center justify-center">
                                            <Icon class="text-white text-5xl font-bold" icon="akar-icons:check" />
                                        </div>
                                    </div>
                                    <div class="mt-1 mb-3">
                                        <span class="text-lg">Talent {{ item }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fixed bottom-0 w-full left-0 bg-white p-4 shadow-2xl flex justify-end gap-3 items-center">
                                <button type="button" class="btn btn-ghost px-6" @click="form_data = 'school'">Back</button>
                                <button type="submit" class="btn btn-primary px-12" @click="onSubmitTalent()">Next</button>
                            </div>
                        </div>

                        <div v-if="form_data === 'passion'">
                            <h3 class="text-2xl font-bold mb-6">Choose your passion</h3>
                            <div class="grid grid-cols-4 gap-6 items-center justify-center">
                                <div v-for="(item, index) in 8" class="lg:col-span-1 md:col-span-2 col-span-2 w-48">
                                    <div @click="selectPassion(item, index, 'Passion '+item)" class="w-full overflow-hidden h-48 relative bg-gradient-to-tr rounded-2xl from-primary to-cyan-200 inline-block">
                                        <img :class="passion.find(pas => pas.index === index) ? 'opacity-30' : ''" class="absolute top-0 left-0 w-full h-full object-cover object-center hover:opacity-30 transition-all cursor-pointer" :src="`https://picsum.photos/id/${item * 5}/367/267`" :alt="`Random Image ${item}`">
                                        <div v-if="passion.find(pas => pas.index === index)" class="flex relative w-full h-full items-center justify-center">
                                            <Icon class="text-white text-5xl font-bold" icon="akar-icons:check" />
                                        </div>
                                    </div>
                                    <div class="mt-1 mb-3">
                                        <span class="text-lg">Passion {{ item }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fixed bottom-0 w-full left-0 bg-white p-4 shadow-2xl flex justify-end gap-3 items-center">
                                <button type="button" class="btn btn-ghost px-6" @click="form_data = 'school'">Back</button>
                                <button type="submit" class="btn btn-primary px-12" @click="onSubmitPassion()">Next</button>
                            </div>
                        </div>

                        <div v-if="form_data === 'interest'">
                            <h3 class="text-2xl font-bold mb-6">Choose your interest</h3>
                            <div class="grid grid-cols-4 gap-6 items-center justify-center">
                                <div v-for="(item, index) in 8" class="lg:col-span-1 md:col-span-2 col-span-2 w-48">
                                    <div @click="selectInterest(item, index, 'Interest '+item)" class="w-full overflow-hidden h-48 relative bg-gradient-to-tr rounded-2xl from-primary to-cyan-200 inline-block">
                                        <img :class="interest.find(inte => inte.index === index) ? 'opacity-30' : ''" class="absolute top-0 left-0 w-full h-full object-cover object-center hover:opacity-30 transition-all cursor-pointer" :src="`https://picsum.photos/id/${item * 7}/367/267`" :alt="`Random Image ${item}`">
                                        <div v-if="interest.find(inte => inte.index === index)" class="flex relative w-full h-full items-center justify-center">
                                            <Icon class="text-white text-5xl font-bold" icon="akar-icons:check" />
                                        </div>
                                    </div>
                                    <div class="mt-1 mb-3">
                                        <span class="text-lg">Interest {{ item }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fixed bottom-0 w-full left-0 bg-white p-4 shadow-2xl flex justify-end gap-3 items-center">
                                <button type="button" class="btn btn-ghost px-6" @click="form_data = 'school'">Back</button>
                                <button type="submit" class="btn btn-primary px-12" @click="onSubmitInterest()">Next</button>
                            </div>
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
            form_data: 'address',
            talent: [],
            passion: [],
            interest: [],
            student_types: ['student', 'colleger', 'general'],
            form: useForm({
                country: '',
                province: '',
                city: '',
                district: '',
                village: '',
                address: '',
                postcode: '',
                type: 'student',
                instance: '',
                major: '',
                class: '',
                interest: [],
                passion: [],
                talent: [],
            })
        }
    },
    components: {
        Head,
        Link,
        Icon
    },
    name: "Form",
    methods: {
        selectTalent(item, index, label) {
            let available_talent = this.talent.find((talent) => talent.item === item)
            if(available_talent) {
                let available_index = this.talent.findIndex((talent) => talent.item === item)
                this.talent.splice(available_index, 1)
            } else {
                let data = {
                    item: item,
                    index: index,
                    label: label,
                }
                this.talent.push(data)
            }
        },
        selectPassion(item, index, label) {
            let available_passion = this.passion.find((talent) => talent.item === item)
            if(available_passion) {
                let available_index = this.passion.findIndex((talent) => talent.item === item)
                this.passion.splice(available_index, 1)
            } else {
                let data = {
                    item: item,
                    index: index,
                    label: label,
                }
                this.passion.push(data)
            }
        },
        selectInterest(item, index, label) {
            let available_interest = this.interest.find((talent) => talent.item === item)
            if(available_interest) {
                let available_index = this.interest.findIndex((talent) => talent.item === item)
                this.interest.splice(available_index, 1)
            } else {
                let data = {
                    item: item,
                    index: index,
                    label: label,
                }
                this.interest.push(data)
            }
        },
        upperFirst(value) {
            return value.charAt(0).toUpperCase() + value.slice(1)
        },
        onSubmitAddress() {
            this.form_data = 'school'
        },
        onSubmitSchool() {
            this.form_data = 'talent'
        },
        onSubmitTalent() {
            this.form.talent = JSON.stringify(this.talent)
            this.form_data = 'passion'
        },
        onSubmitPassion() {
            this.form.passion = JSON.stringify(this.passion)
            this.form_data = 'interest'
        },
        onSubmitInterest() {
            this.form.interest = JSON.stringify(this.interest)
            this.form.post(route('student.form.post'), {
                preserveState: true,
            })
        }
    }
}
</script>
