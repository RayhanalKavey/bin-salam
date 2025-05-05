<script setup>
import NavLayout from "../Layouts/NavLayout.vue";
import { Link } from "@inertiajs/vue3";
import Hero from "../Components/Hero.vue";
import Services from "../Components/Services.vue";
import Projects from "../Components/Projects.vue";
import Testimonials from "../Components/Testimonials.vue";
import CTA from "../Components/CTA.vue";
</script>

<template>
    <NavLayout>
        <!-- Hero Section with Gradient Overlay -->
        <Hero />

        <!-- Leadership Section with Modern Card -->
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div
                    class="bg-white rounded-2xl shadow-xl p-12 -mt-28 border border-gray-100 transform hover:shadow-2xl transition"
                >
                    <div class="text-center space-y-6">
                        <div
                            class="inline-block bg-gray-900 text-white px-6 py-2 rounded-full text-sm font-medium"
                        >
                            Leadership
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">
                            Engr. Gazi Rasel Bin Salam
                        </h2>
                        <div class="flex justify-center gap-4 flex-wrap">
                            <span
                                class="bg-gray-100 px-4 py-2 rounded-full text-sm"
                                >MBA (NSU)</span
                            >
                            <span
                                class="bg-gray-100 px-4 py-2 rounded-full text-sm"
                                >BSc Engineer MEC (IUT)</span
                            >
                            <span
                                class="bg-gray-100 px-4 py-2 rounded-full text-sm"
                                >20+ Years Experience</span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services with Grid Cards -->
        <Services />
        <!-- Projects Section -->
        <Projects />
        <!-- Certifications Grid -->
        <div class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">
                    Certifications & Accreditations
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div
                        class="aspect-square bg-white rounded-xl p-6 flex items-center justify-center border border-gray-200 hover:shadow-lg transition"
                    >
                        <span class="text-gray-900 font-medium text-center"
                            >ABC Electrical License</span
                        >
                    </div>
                    <!-- Add more certification cards -->
                </div>
            </div>
        </div>

        <!-- Testimonials with Modern Cards -->
        <Testimonials />

        <!-- CTA Section -->
        <CTA />
    </NavLayout>
</template>

<style>
/* Custom animations */
.transition-all {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.group:hover .group-hover\:scale-105 {
    transform: scale(1.05);
}
.border-l-4 {
    border-left-width: 4px;
}

.card-hover {
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),
        box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.card-hover:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
        0 4px 6px -4px rgba(0, 0, 0, 0.1);
}
</style>
