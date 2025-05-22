<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Bin Salam Logistics</h3>
                    <p class="text-gray-400">
                        Professional Electro-Mechanical & Civil Engineering
                        Solutions
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li>
                            <Link
                                href="/projects"
                                class="text-gray-400 hover:text-white transition"
                                >Projects</Link
                            >
                        </li>

                        <li>
                            <Link
                                href="/blog"
                                class="text-gray-400 hover:text-white transition"
                                >Blogs</Link
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
</template>

<style scoped></style>
