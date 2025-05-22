<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="py-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-white mb-6">
                    Start Your Next Project
                </h2>
                <p class="text-gray-300 mb-8">
                    Partner with Bangladesh's premier engineering solutions
                    provider
                </p>
                <div class="flex justify-center gap-4">
                    <Link
                        href="/contact"
                        class="px-8 py-4 bg-white text-gray-900 rounded-lg font-semibold hover:bg-gray-100 transition"
                    >
                        Request Consultation
                    </Link>
                    <Link
                        href="/projects"
                        class="px-8 py-4 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-gray-900 transition"
                    >
                        View Projects
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
