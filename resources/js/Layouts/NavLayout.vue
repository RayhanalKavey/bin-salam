<!-- resources/js/Layouts/AppLayout.vue -->
<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

const isMenuOpen = ref(false);
</script>

<template>
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
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
                        <a
                            href="/"
                            class="text-gray-300 hover:text-blue-400 transition-colors duration-300"
                        >
                            Home
                        </a>
                        <a
                            href="/projects"
                            class="text-gray-300 hover:text-blue-400 transition-colors duration-300"
                        >
                            Projects
                        </a>
                        <a
                            href="/blog"
                            class="text-gray-300 hover:text-blue-400 transition-colors duration-300"
                        >
                            Blogs
                        </a>
                        <Link
                            href="/dashboard"
                            class="text-gray-300 hover:text-blue-400 transition-colors duration-300"
                        >
                            Dashboard
                        </Link>
                        <a
                            href="/contact"
                            class="text-gray-300 hover:text-blue-400 transition-colors duration-300"
                        >
                            Contact
                        </a>
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
                :class="
                    isMenuOpen ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0'
                "
            >
                <div
                    class="px-4 pt-2 pb-4 space-y-4 bg-gray-800 absolute z-20 right-0 w-50 top-20"
                >
                    <a
                        href="/"
                        class="block text-gray-300 hover:text-blue-400 transition-colors duration-300"
                    >
                        Home
                    </a>
                    <a
                        href="/projects"
                        class="block text-gray-300 hover:text-blue-400 transition-colors duration-300"
                    >
                        Projects
                    </a>
                    <a
                        href="/blog"
                        class="block text-gray-300 hover:text-blue-400 transition-colors duration-300"
                    >
                        Blogs
                    </a>
                    <a
                        href="/contact"
                        class="block text-gray-300 hover:text-blue-400 transition-colors duration-300"
                    >
                        Contact
                    </a>
                </div>
            </div>
        </nav>

        <main>
            <slot />
        </main>

        <!-- Footer remains the same as before -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">
                            Bin Salam Logistics
                        </h3>
                        <p class="text-gray-400">
                            Professional Electro-Mechanical & Civil Engineering
                            Solutions
                        </p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-2">
                            <li>
                                <a
                                    href="/projects"
                                    class="text-gray-400 hover:text-white transition"
                                    >Projects</a
                                >
                            </li>

                            <li>
                                <a
                                    href="/about"
                                    class="text-gray-400 hover:text-white transition"
                                    >About Us</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Contact</h4>
                        <ul class="space-y-2">
                            <li class="text-gray-400">+880 1234 567890</li>
                            <li class="text-gray-400">
                                info@binsalamlogistics.com
                            </li>
                            <li class="text-gray-400">Cumilla, Bangladesh</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a
                                href="#"
                                class="text-gray-400 hover:text-white transition"
                            >
                                <svg
                                    class="w-6 h-6"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
                                    />
                                </svg>
                            </a>
                            <!-- Add other social icons -->
                        </div>
                    </div>
                </div>
                <div
                    class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400"
                >
                    <p>&copy; 2024 Bin Salam Logistics. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</template>

<style scoped>
/* Smooth transitions for mobile menu */
.transition-all {
    overflow: hidden;
    transition-property: max-height, opacity;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
}
</style>
