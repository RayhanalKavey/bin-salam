<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
const isMenuOpen = ref(false);
</script>

<template>
    <nav class="bg-gray-900 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-white">
                        Bin Salam Logistics
                    </h1>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <Link
                        href="/"
                        class="text-gray-300 hover:text-blue-400 transition-colors duration-300"
                    >
                        Home
                    </Link>
                    <Link
                        href="/projects"
                        class="text-gray-300 hover:text-blue-400 transition-colors duration-300"
                    >
                        Projects
                    </Link>
                    <Link
                        href="/blog"
                        class="text-gray-300 hover:text-blue-400 transition-colors duration-300"
                    >
                        Blogs
                    </Link>
                    <Link
                        href="/faq"
                        class="text-gray-300 hover:text-blue-400 transition-colors duration-300"
                    >
                        FAQ
                    </Link>
                    <!-- <Link
                        href="/dashboard"
                        class="text-gray-300 hover:text-blue-400 transition-colors duration-300"
                    >
                        Dashboard
                    </Link> -->
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button
                        @click="isMenuOpen = !isMenuOpen"
                        class="text-gray-300 hover:text-white"
                    >
                        <svg
                            class="h-8 w-8"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div
            class="md:hidden transition-all duration-300"
            :class="isMenuOpen ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0'"
        >
            <div
                class="px-4 pt-2 pb-4 space-y-4 bg-gray-800 absolute z-20 right-0 w-50 top-20"
            >
                <Link
                    href="/"
                    class="block text-gray-300 hover:text-blue-400 transition-colors duration-300"
                >
                    Home
                </Link>
                <Link
                    href="/projects"
                    class="block text-gray-300 hover:text-blue-400 transition-colors duration-300"
                >
                    Projects
                </Link>
                <Link
                    href="/blog"
                    class="block text-gray-300 hover:text-blue-400 transition-colors duration-300"
                >
                    Blogs
                </Link>
            </div>
        </div>
    </nav>
</template>

<style scoped>
/* Smooth transitions for mobile menu */
.transition-all {
    overflow: hidden;
    transition-property: max-height, opacity;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 200ms;
}
</style>
