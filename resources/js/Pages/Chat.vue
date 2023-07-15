<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    'users' : {
        type : Object,
        default : {}
    }
});

</script>

<template>
    <Head title="Chat" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Chat</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container mx-auto">
                        <div class="min-w-full border rounded lg:grid lg:grid-cols-3">
                            <div class="border-r border-gray-300 lg:col-span-1">
                                <div class="mx-3 my-3">
                                    <div class="relative text-gray-600">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 text-gray-300">
                                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </span>
                                        <input type="search" class="block w-full py-2 pl-10 bg-gray-100 rounded outline-none" name="search"
                                               placeholder="Search" required />
                                    </div>
                                </div>

                                <ul class="overflow-auto h-fit">
                                    <h2 class="my-2 mb-2 ml-2 text-lg text-gray-600">Chats</h2>
                                    <li>
                                        <a
                                            class="flex items-center px-3 py-2 text-sm transition duration-150 ease-in-out border-b border-gray-300 cursor-pointer hover:bg-gray-100 focus:outline-none">
                                            <img class="object-cover w-10 h-10 rounded-full"
                                                 src="https://cdn.pixabay.com/photo/2018/09/12/12/14/man-3672010__340.jpg" alt="username" />
                                            <div class="w-full pb-2">
                                                <div class="flex justify-between">
                                                    <span class="block ml-2 font-semibold text-gray-600">Chat Name</span>
                                                    <span class="block ml-2 text-sm text-gray-600">Last Date</span>
                                                </div>
                                                <span class="block ml-2 text-sm text-gray-600">Last Message</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="overflow-auto h-fit mt-20">
                                    <h2 class="my-2 mb-2 ml-2 text-lg text-gray-600">Users</h2>
                                    <li>
                                        <a v-for="user in users" class="flex items-center px-3 py-2 text-sm transition duration-150 ease-in-out border-b border-gray-300 cursor-pointer hover:bg-gray-100 focus:outline-none">
                                            <img class="object-cover w-10 h-10 rounded-full"
                                                 src="https://cdn.pixabay.com/photo/2018/09/12/12/14/man-3672010__340.jpg" alt="username" />
                                            <div class="w-full pb-2">
                                                <div class="flex justify-between">
                                                    <span class="block ml-2 font-semibold text-gray-600">{{ user.name }}</span>
                                                    <span class="block ml-2 text-sm text-gray-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <title>Iconly/Bulk/Add User</title>
                                                            <g id="Iconly/Bulk/Add-User" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="Add-User" transform="translate(2.000000, 2.500000)" fill="#000000" fill-rule="nonzero">
                                                                    <path d="M19.1010274,7.08786248 L17.8979452,7.08786248 L17.8979452,5.9116166 C17.8979452,5.40944608 17.4952055,5 16.9989726,5 C16.5037671,5 16.1,5.40944608 16.1,5.9116166 L16.1,7.08786248 L14.8989726,7.08786248 C14.4027397,7.08786248 14,7.49730856 14,7.99947908 C14,8.50164959 14.4027397,8.91109568 14.8989726,8.91109568 L16.1,8.91109568 L16.1,10.0883834 C16.1,10.5905539 16.5037671,11 16.9989726,11 C17.4952055,11 17.8979452,10.5905539 17.8979452,10.0883834 L17.8979452,8.91109568 L19.1010274,8.91109568 C19.5962329,8.91109568 20,8.50164959 20,7.99947908 C20,7.49730856 19.5962329,7.08786248 19.1010274,7.08786248" id="Fill-1" opacity="0.400000006"/>
                                                                    <path d="M7.5,12.5155037 C3.45422394,12.5155037 0,13.1623312 0,15.7465996 C0,18.3298543 3.43320432,19 7.5,19 C11.5447751,19 15,18.3531725 15,15.768904 C15,13.1846356 11.5667957,12.5155037 7.5,12.5155037" id="Fill-4"/>
                                                                    <path d="M7.5,10.0542136 C10.2545709,10.0542136 12.4626318,7.81769091 12.4626318,5.0276137 C12.4626318,2.23753648 10.2545709,-7.99360578e-15 7.5,-7.99360578e-15 C4.74542907,-7.99360578e-15 2.53736821,2.23753648 2.53736821,5.0276137 C2.53736821,7.81769091 4.74542907,10.0542136 7.5,10.0542136" id="Fill-7" opacity="0.400000006"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <span class="block ml-2 text-sm text-gray-600">last Seen Before 1 hour</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="hidden lg:col-span-2 lg:block">
                                <div class="w-full">
                                    <div class="relative flex items-center p-3 border-b border-gray-300">
                                        <img class="object-cover w-10 h-10 rounded-full"
                                             src="https://cdn.pixabay.com/photo/2018/01/15/07/51/woman-3083383__340.jpg" alt="username" />
                                        <span class="block ml-2 font-bold text-gray-600">Emma</span>
                                        <i class="absolute w-3 h-3 bg-green-600 rounded-full left-10 top-3"></i>
                                    </div>
                                    <div class="relative w-full p-6 overflow-y-auto h-[25rem]">
                                        <ul class="space-y-2">
                                            <li class="flex justify-end">
                                                <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                                    <span class="block">received message</span>
                                                </div>
                                            </li>
                                            <li class="flex justify-start">
                                                <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                                    <span class="block">Message sent</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="flex items-center justify-between w-full p-3 border-t border-gray-300">
                                        <input type="text" placeholder="Message"
                                               class="block w-full py-2 pl-4 mx-3 bg-gray-100 rounded-full outline-none focus:text-gray-700"
                                               name="message" required />

                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <title>Iconly/Bulk/Send</title>
                                                <g id="Iconly/Bulk/Send" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="Send" transform="translate(2.000000, 2.000000)" fill="#000000" fill-rule="nonzero">
                                                        <path d="M19.4274202,0.578298605 C18.9274202,0.0672986048 18.1874202,-0.121701395 17.4974202,0.0782986048 L1.40742017,4.7272986 C0.679420165,4.9292986 0.163420165,5.5062986 0.024420165,6.2382986 C-0.117579835,6.9842986 0.378420165,7.9322986 1.02642017,8.3282986 L6.05742017,11.4002986 C6.57342017,11.7162986 7.23942017,11.6372986 7.66642017,11.2092986 L13.4274202,5.4482986 C13.7174202,5.1472986 14.1974202,5.1472986 14.4874202,5.4482986 C14.7774202,5.7372986 14.7774202,6.2082986 14.4874202,6.5082986 L8.71642017,12.2692986 C8.28842017,12.6972986 8.20842017,13.3612986 8.52342017,13.8782986 L11.5974202,18.9282986 C11.9574202,19.5272986 12.5774202,19.8682986 13.2574202,19.8682986 C13.3374202,19.8682986 13.4274202,19.8682986 13.5074202,19.8572986 C14.2874202,19.7582986 14.9074202,19.2272986 15.1374202,18.4772986 L19.9074202,2.5082986 C20.1174202,1.8282986 19.9274202,1.0882986 19.4274202,0.578298605" id="Fill-1"/>
                                                        <path d="M7.45142017,17.1421986 C7.74342017,17.4351986 7.74342017,17.9101986 7.45142017,18.2031986 L6.08542017,19.5681986 C5.93942017,19.7151986 5.74742017,19.7881986 5.55542017,19.7881986 C5.36342017,19.7881986 5.17142017,19.7151986 5.02542017,19.5681986 C4.73242017,19.2751986 4.73242017,18.8011986 5.02542017,18.5081986 L6.39042017,17.1421986 C6.68342017,16.8501986 7.15842017,16.8501986 7.45142017,17.1421986 Z M6.66772017,13.3541986 C6.95972017,13.6471986 6.95972017,14.1221986 6.66772017,14.4151986 L5.30172017,15.7801986 C5.15572017,15.9271986 4.96372017,16.0001986 4.77172017,16.0001986 C4.57972017,16.0001986 4.38772017,15.9271986 4.24172017,15.7801986 C3.94872017,15.4871986 3.94872017,15.0131986 4.24172017,14.7201986 L5.60672017,13.3541986 C5.89972017,13.0621986 6.37472017,13.0621986 6.66772017,13.3541986 Z M2.90652017,12.1617986 C3.19852017,12.4547986 3.19852017,12.9297986 2.90652017,13.2227986 L1.54052017,14.5877986 C1.39452017,14.7347986 1.20252017,14.8077986 1.01052017,14.8077986 C0.818520165,14.8077986 0.626520165,14.7347986 0.480520165,14.5877986 C0.187520165,14.2947986 0.187520165,13.8207986 0.480520165,13.5277986 L1.84552017,12.1617986 C2.13852017,11.8697986 2.61352017,11.8697986 2.90652017,12.1617986 Z" id="Combined-Shape" opacity="0.400000006"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
