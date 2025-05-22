<script setup>
import NavLayout from "../Layouts/NavLayout.vue";
import { Link } from "@inertiajs/vue3";
import Hero from "../Components/Sections/Hero.vue";
import Services from "../Components/Sections/Services.vue";
import Projects from "../Components/Sections/Projects.vue";
import Testimonials from "../Components/Sections/Testimonials.vue";
import CTA from "../Components/Sections/CTA.vue";
import Leadership from "../Components/Sections/Leadership.vue";
</script>

<template>
    <NavLayout>
        <Hero />
        <Leadership />
        <Services />
        <Projects />
        <!-- <Testimonials /> -->
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
