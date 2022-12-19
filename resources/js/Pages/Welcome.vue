<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import ViewLayout from "@/Layouts/ViewLayout.vue";
import { Icon } from '@iconify/vue'

export default {
    components: {
        Head, Link, ViewLayout, Icon,
    },
    mounted() {
        let categoriesWidth = document.getElementById('categories-course')
        categoriesWidth.addEventListener('scroll', () => {
            this.checkScroll()
        })
    },
    data() {
        return {
            benefits: [
                {
                    title: 'Lakukan Pembelajaran Seru dengan Praktik',
                    image: 'laugh.png',
                    description: 'Tingkatkan skillmu dengan praktik yang dapat dilakukan kapanpun dan dimanapun, tanpa menguras banyak biaya.',
                },
                {
                    title: 'Saling Terhubung  Meningkatkan Sosialisasi',
                    image: 'database.png',
                    description: 'Mulailah terhubung untuk sharing pembelajaran di forum tanya jawab semua persoalan tugas dan ujian.',
                },
                {
                    title: 'Mulai Kejar Tujuan Prestasimu',
                    image: 'crosshair.png',
                    description: 'Dengan fitur latihan soal yang sesuai dengan keahlianmu, Materi apapun pasti bisa diatasi.',
                },
                {
                    title: 'Dapatkan Resource Pembelajaran yang Lengkap',
                    image: 'books.png',
                    description: 'Resource pembelajaran yang lengkap akan membantumu meningkatkan skill dan pemahaman dengan lebih baik.',
                },
            ],
            faqs: [
                { question: 'Bagaimana website Seenau bisa membantumu ?' },
                { question: 'Apa saja fitur yang ada pada Seenau ?' },
                { question: 'Apa yang bisa kamu pelajari di Seenau ?' },
                { question: 'Apa itu Fitur VC Practice ?' },
                { question: 'Bagaimana caraku belajar di Seenau ?' },
            ],
            teams: [
                {
                    name: 'Yusuf Budiman',
                    image: 'yusuf.png',
                    prodi: 'Data Sains Terapan',
                    school: 'Politeknik Elektronika Negeri Surabaya',
                    profesi: 'Data Engineer',
                    caption: 'Pelajarannya mudah dipahami untuk menggunakan teknologi pendukung yang baru.'
                },
                {
                    name: 'Nabilatulhawa',
                    image: 'nabila.png',
                    prodi: 'Teknik Informatika',
                    school: 'Politeknik Elektronika Negeri Surabaya',
                    profesi: 'Ui/Ux Designer',
                    caption: 'Terima kasih telah membuat materi kelas yang singkat, padat, dan jelas.'
                },
                {
                    name: 'Mohammad Khusnul Khuluq',
                    image: 'ninno.png',
                    prodi: 'Teknik Elektronika',
                    school: 'Politeknik Elektronika Negeri Surabaya',
                    profesi: 'Fullstack Engineer',
                    caption: 'Banyak ilmu baru yang dipelajari untuk mendukung ketika bekerja di sebuah perusahaan'
                },
                {
                    name: 'Putra Dewangga',
                    image: 'dewa.png',
                    prodi: 'Teknik Elektronika',
                    school: 'Politeknik Elektronika Negeri Surabaya',
                    profesi: 'Video Editor',
                    caption: 'Terbaik! kelas yang mendukung banget untuk kemajuan ilmu UI/UX'
                },
                {
                    name: 'Reihan Almas Hediawan',
                    image: 'reihan.png',
                    prodi: 'Teknik Informatika',
                    school: 'Institut Teknologi Nasional',
                    profesi: 'Mobile App Developer',
                    caption: 'Kelasnya bagus untuk pemula dan expert yang ingin punya portfolio terbaru sebagai Developer.'
                },
            ],
            selection: {
                faq: null,
                team: 2,
            }
        }
    },
    methods: {
        checkScroll() {
            let categoriesWidth = document.getElementById('categories-course')
            if(categoriesWidth.scrollLeft > 10) {
                document.getElementById('right-scroll-category-course').classList.add('hidden')
                document.getElementById('left-scroll-category-course').classList.remove('hidden')
            } else {
                document.getElementById('right-scroll-category-course').classList.remove('hidden')
                document.getElementById('left-scroll-category-course').classList.add('hidden')
            }
        },
        onClickRight() {
            let categoriesWidth = document.getElementById('categories-course')
            categoriesWidth.scrollTo(300, 0)
            this.checkScroll()
        },
        onClickLeft() {
            let categoriesWidth = document.getElementById('categories-course')
            categoriesWidth.scrollTo(-300, 0)
            this.checkScroll()
        }
    }
}

</script>

<template>
    <ViewLayout>
        <Head title="Welcome" />

        <div class="min-h-screen w-full relative">
            <div class="grid md:grid-cols-2 grid-cols-1 overflow-hidden">
                <div class="md:inline-block relative hidden">
                    <img src="/image/header-home1.png" class="scale-105 relative top-12 left-12" alt="">
                    <div class="flex items-center justify-center absolute right-0 top-0 w-full h-full bg-gradient-to-l from-indigo-800/80 to-indigo-700/40">
                        <div>
                            <a id="play-video" class="video-play-button" href="#">
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <img src="/image/shape/shape1.png" class="absolute right-0 top-0 h-full" alt="">
                </div>
                <div class="p-5 min-h-screen bg-primary realtive z-10">
                    <div class="p-8 pt-12 text-white">
                        <h1 class="text-6xl font-bold leading-tight">
                            <div class="inline-block relative">
                                Seennau
                                <div class="absolute bg-white/40 h-full w-72 top-0 rounded-2xl -left-10"></div>
                            </div>
                            Siap Menunjang Segala Kebutuhan
                            <div class="inline-block relative">
                                Pendidikanmu
                                <div class="absolute bg-white/40 h-full w-72 top-0 rounded-2xl -right-10"></div>
                            </div>
                        </h1>
                        <p class="mt-8 text-lg">Untuk kamu sebagai pelajar yang ingin belajar secara efektif dan pengajar yang ingin mengajar secara inovatif. Yuk Coba Seenau !</p>
                        <button class="mt-8 px-8 btn bg-white border-none text-black hover:bg-white/80 shadow">Mulai Seenau Sekarang !</button>
                    </div>
                </div>
                <div class="md:hidden relative">
                    <img src="/image/header-home1.png" class="scale-105 relative top-12 left-12" alt="">
                    <div class="flex items-center justify-center absolute right-0 top-0 w-full h-full bg-gradient-to-l from-indigo-800/80 to-indigo-700/40">
                        <div>
                            <a id="play-video" class="video-play-button" href="#">
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <img src="/image/shape/shape1-rotated.png" class="absolute left-0 scale-105 -top-1 w-full" alt="">
                </div>
            </div>
        </div>

        <div class="w-full relative overflow-hidden">
<!--            <img src="/image/shape/vektor1.png" class="opacity-70 absolute md:-top-12 top-0 left-3 scale-110 md:w-7/12 w-full" alt="">-->
            <div class="container mx-auto px-8 py-24">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center justify-center">
                    <div class="px-4">
                        <h1 class="text-5xl leading-tight font-bold text-primary">
                            <div class="inline-block relative">
                                Fitur
                                <div class="absolute w-36 top-0 -left-8 rounded-xl bg-primary/20 h-full "></div>
                            </div>
                            Seenau <br> Siap Bantu
                            <div class="inline-block relative">
                                Tingkatkan
                                <div class="absolute w-96 top-0 -left-2 rounded-xl bg-primary/20 h-full "></div>
                            </div>
                            Skillmu !</h1>
                    </div>
                    <div class="relative">
                        <div class="w-3/4 md:mt-0 mt-8 rounded-xl overflow-hidden relative h-72 bg-primary">
                            <img src="/image/content1-home1.png" class="w-full h-full object-cover object-center absolute scale-110" alt="">
                            <div>
                                <a id="play-video" class="video-play-button" href="#">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="absolute -right-2 -top-2 scale-90 w-6/12 p-4 bg-white shadow-lg rounded-xl">
                            <p class="font-bold text-primary mb-4">Apa yang unik dari Seenau ?</p>
                            <hr class="my-4">
                            <span class="text-sm">Materi Pembelajaran yang Lengkap, bahkan ada simulasi Praktiknya</span>
                            <div class="flex items-center gap-3 justify-start mt-3">
                                <div class="w-16 h-16 bg-indigo-500/30 rounded-lg">
                                    <img src="/image/icons/hologram.png" alt="Hologram" class="w-16 relative bottom-1">
                                </div>
                                <div>
                                    <h5 class="font-bold">VC Practice</h5>
                                    <span class="text-sm">Penunjang praktik secara online</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 justify-start mt-3">
                                <div class="w-16 h-16 bg-indigo-500/30 rounded-lg flex items-center justify-center">
                                    <img src="/image/icons/vr.png" alt="VR" class="w-12">
                                </div>
                                <div>
                                    <h5 class="font-bold">Library</h5>
                                    <span class="text-sm">Resource pembelajarab online</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 justify-start mt-3">
                                <div class="w-16 h-16 bg-indigo-500/30 rounded-lg flex items-center justify-center">
                                    <img src="/image/icons/chat.png" alt="Chat" class="w-12">
                                </div>
                                <div>
                                    <h5 class="font-bold">Forum Diskusi</h5>
                                    <span class="text-sm">Diskusi dengan mudah</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full relative overflow-hidden bg-primary/5 rounded-t-3xl">
            <div class="container mx-auto px-8 py-12">
                <h1 class="text-primary font-bold text-4xl mb-8">Dapatkan Manfaat Yang Ada di Seenau</h1>
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">
                    <div v-for="(item, index) in benefits" class="bg-white p-6 rounded-xl hover:shadow-xl transition-all">
                        <div class="w-24 flex h-24 justify-center items-center bg-primary/10 rounded-xl mb-4">
                            <img :src="`/image/icons/${item.image}`" :alt="item.image" class="w-16 self-center h-16">
                        </div>
                        <h1 class="text-xl font-bold mb-4">{{ item.title }}</h1>
                        <p>{{ item.description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-primary py-12 relative w-full text-center">
            <h1 class="text-white text-4xl font-bold">
                <div class="inline-block relative">
                    Explore
                    <div class="absolute -left-12 -top-1 w-40 rounded-2xl h-12 bg-white/40"></div>
                </div>
                Online Course
            </h1>
        </div>

        <div class="relative bg-primary/5 rounded-b-3xl">
            <div class="container mx-auto px-8">
                <div class="w-full pt-6 pb-3 px-6 shadow-xl bg-white relative -top-4 rounded-xl">
                    <div class="grid md:grid-cols-5 col-span-2 gap-4">
                        <div class="col-span-2">
                            <input type="text" placeholder="Cari course" class="input input-bordered w-full" />
                        </div>
                        <div class="col-span-2">
                            <select class="select select-bordered w-full">
                                <option disabled selected>Course Terlaris</option>
                                <option>Paling baru</option>
                                <option>Paling lama</option>
                            </select>
                        </div>
                        <div class="md:col-span-1 col-span-2">
                            <button class="btn btn-primary w-full">
                                <Icon class="text-2xl mr-2" icon="ic:sharp-search" />
                                Search
                            </button>
                        </div>
                    </div>
                    <div class="relative">
                        <div id="categories-course" class="scroll-smooth overflow-x-auto pb-4 custom-scrollbar relative">
                            <div class="flex flex-nowrap gap-4 mt-4">
                                <button class="btn btn-primary">Semua</button>
                                <button class="btn btn-ghost" v-for="(item, index) in 10">Kategori {{ item }}</button>
                            </div>
                        </div>
                        <div @click="onClickRight()" id="right-scroll-category-course" class="absolute right-0 bottom-0 h-full w-16 bg-gradient-to-l cursor-pointer from-white to-white/60 flex justify-end items-center">
                            <Icon icon="material-symbols:chevron-right-rounded" class="mr-2 text-3xl text-primary"/>
                        </div>
                        <div @click="onClickLeft()" id="left-scroll-category-course" class="absolute left-0 bottom-0 h-full w-16 bg-gradient-to-r hidden cursor-pointer from-white to-white/60 flex justify-end items-center">
                            <Icon icon="material-symbols:chevron-left-rounded" class="mr-2 text-3xl text-primary"/>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button class="btn btn-primary px-12">Semua Course</button>
                </div>
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6 py-8">
                    <div v-for="(item, index) in 8" class="bg-white p-6 rounded-xl relative hover:shadow-xl">
                        <div class="badge badge-primary absolute top-0 right-0 m-4 p-3">Kategori 1</div>
                        <img v-if="item <= 3" src="/image/icons/sale-tag.png" class="absolute w-12 -left-2">
                        <img :src="`https://picsum.photos/id/${item * index + 10}/200/300`" class="w-full h-40 object-cover object-center rounded-lg" alt="">
                        <div class="pt-3">
                            <h3 class="text-xl font-black">Course Innovative, Creative, And Problem...</h3>
                            <div class="flex mt-2 justify-between gap-4 items-end">
                                <div class="bg-warning/20 p-2 rounded-lg">
                                    <Icon icon="material-symbols:star-rounded" class="text-4xl text-warning"/>
                                    <span class="text-2xl text-warning font-bold">4.8</span>
                                </div>
                                <div>
                                    <div class="text-right">
                                        <div class="text-sm line-through">Rp. 160.000</div>
                                        <div class="text-xl font-bold text-primary">Rp 125.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full relative">
            <div class="container px-12 py-24 mx-auto">
                <div class="grid md:grid-cols-2 items-center gap-8">
                    <div class="text-left">
                        <h1 class="leading-tight text-6xl font-black text-primary">
                            <div class="relative inline-block">
                                Mengapa Kamu
                                <div class="absolute -left-8 w-full bg-primary/20 h-full top-0 rounded-xl"></div>
                            </div>
                             Harus Menggunakan
                            <div class="relative inline-block">
                                Seenau ?
                                <div class="absolute -right-12 w-full bg-primary/20 h-full top-0 rounded-xl"></div>
                            </div>
                        </h1>
                    </div>
                    <div class="text-center py-12 relative">
                        <div class="absolute text-8xl -top-7 rotate-180 -left-6 text-primary">
                            <Icon icon="material-symbols:format-quote-rounded"/>
                        </div>
                        <div class="absolute text-8xl -bottom-5 -right-6 text-primary">
                            <Icon icon="material-symbols:format-quote-rounded"/>
                        </div>
                        <h5 class="text-primary text-xl">Dengan Virtual Physic Practical Aplikasi Seenau masyarakat dapat melakukan pembelajaran simulasi secara praktik secara online.</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full relative">
            <div class="container px-12 pb-24 mx-auto">
                <div class="w-full p-8 rounded-xl bg-primary text-white grid md:grid-cols-2 items-center">
                    <div class="text-5xl text-center font-black leading-tight md:hidden mb-4 inline-block">Frequently <br> Answer <br> Question</div>

                    <div class="space-y-3">
                        <div @click="selection.faq === index ? selection.faq = null : selection.faq = index" v-for="(item, index) in faqs" class="bg-black/10 py-3 px-6 rounded-xl relative">
                            <h1 class="text-lg font-bold flex">
                                <Icon :class="{'rotate-90': selection.faq === index}" icon="material-symbols:arrow-right-rounded" class="inline-block text-4xl"/>
                                <span>{{ item.question }}</span>
                            </h1>
                            <div :class="{'opacity-0 h-0': selection.faq !== index, 'p-4 mt-3': selection.faq === index}" class="border-t transition-all border-primary bg-black/20 rounded-lg">
                                Sed quis congue sapien. Aliquam placerat dui risus, scelerisque mattis odio tristique lacinia. In non faucibus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec lectus id nibh mollis tristique. Praesent pulvinar feugiat magna, quis egestas dui interdum ut. Maecenas velit sapien, venenatis eget ornare porttitor, rhoncus ac sapien.
                            </div>
                        </div>
                        <button class="btn btn-ghost border-white w-full">Show All FAQ</button>
                    </div>
                    <div class="text-5xl text-center font-black leading-tight md:inline-block hidden">Frequently <br> Answer <br> Question</div>
                </div>
            </div>
        </div>

        <div class="w-full relative overflow-hidden min-h-screen pb-24">
            <img src="/image/Gedung-PENS.jpg" class="absolute top-0 left-0 w-full h-full object-center object-cover grayscale" alt="PENS Surabaya">
            <div class="absolute left-0 top-0 w-full h-full absolute left-0 bg-gradient-to-t to-white from-white/40"></div>
            <div class="p-8 relative">
                <h1 class="text-5xl font-bold text-primary">Testimoni
                    <div class="relative inline-block">
                        Alumni
                        <div class="bg-primary/20 rounded-xl absolute top-0 h-full w-96 -right-12"></div>
                    </div>
                </h1>
            </div>
            <div class="carousel w-full relative mb-48 z-20 pb-24">
                <div :id="`team-${index}`" v-for="(item, index) in teams" class="carousel-item md:w-3/6 w-full">
                    <div class="bg-white md:w-5/6 w-full p-4 mx-8 rounded-xl shadow-xl">
                        <div class="flex gap-3 items-center">
                            <div>
                                <div class="w-16 h-16 rounded-lg bg-primary overflow-hidden">
                                    <img :src="`/image/team/${item.image}`" class="w-full grayscale transition-all hover:grayscale-0" alt="">
                                </div>
                            </div>
                            <div>
                                <h1 class="text-xl font-bold">{{ item.name }}</h1>
                                <div class="flex justify-between text-sm items-center">
                                    <p>{{ item.prodi }}, {{ item.school }} <br> {{ item.profesi }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 font-bold text-xl">
                            {{ item.caption }}
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-5 items-end absolute left-0 bottom-0 w-full absolute overflow-hidden">
                <a :href="`#team-${index}`" v-for="(item, index) in teams" class="relative" @click="selection.team = index">
                    <img src="/image/shape/team.png" :class="{'-bottom-12 opacity-0': selection.team !== index, 'scale-105': selection.team === index }" class="absolute transition-all scale-105 bottom-0 w-full" alt="">
                    <img :src="`/image/team/${item.image}`" :class="{'grayscale-0': selection.team === index}"
                         class="w-full grayscale transition-all hover:grayscale-0" alt="">
                </a>
            </div>
        </div>

        <div class="w-full relative">
            <div class="container mx-auto pt-12 pb-24 flex justify-center items-center">
                <div class="text-center space-y-3">
                    <img src="/image/icons/book-club.png" class="w-28 inline-block" alt="Book Club">
                    <h1 class="font-bold text-3xl">Ready to Build Your Future?</h1>
                    <p>Belajar langsung dari mentor berpengalaman di <br> bidangnya tanpa batas waktu</p>
                    <button class="btn btn-primary">Daftar Sekarang</button>
                </div>
            </div>
        </div>

    </ViewLayout>
</template>

<style>
.video-play-button {
    position: absolute;
    z-index: 10;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    box-sizing: content-box;
    display: block;
    width: 32px;
    height: 44px;
     background: #ffffff;
    border-radius: 50%;
    padding: 18px 20px 18px 28px;
}

.video-play-button:before {
    content: "";
    position: absolute;
    z-index: 0;
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    display: block;
    width: 80px;
    height: 80px;
    background: #ffffff;
    border-radius: 50%;
    animation: pulse-border 1500ms ease-out infinite;
}

.video-play-button:after {
    content: "";
    position: absolute;
    z-index: 1;
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    display: block;
    width: 80px;
    height: 80px;
    background: #ffffff;
    border-radius: 50%;
    transition: all 200ms;
}

.video-play-button:hover:after {
    background-color: darken(#fff, 10%);
}

.video-play-button img {
    position: relative;
    z-index: 3;
    max-width: 100%;
    width: auto;
    height: auto;
}

.video-play-button span {
    display: block;
    position: relative;
    z-index: 3;
    width: 0;
    height: 0;
    border-left: 32px solid #227ce1;
    border-top: 22px solid transparent;
    border-bottom: 22px solid transparent;
}

.custom-scrollbar::-webkit-scrollbar {
    height: 4px !important;
    border-right: 2px;
}

.custom-scrollbar::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
    background: #2B88F5;
}

.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: #0e53a4;

}

@keyframes pulse-border {
    0% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
    }
    100% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
        opacity: 0;
    }
}
</style>
