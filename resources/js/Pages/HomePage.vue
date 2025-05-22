<script setup>
import NavLayout from "../Layouts/NavLayout.vue"; // Assuming NavLayout is correctly imported
import { Link } from "@inertiajs/vue3";
import Hero from "../Components/Sections/Hero.vue";
import Services from "../Components/Sections/Services.vue";
import Projects from "../Components/Sections/Projects.vue";
import Testimonials from "../Components/Sections/Testimonials.vue";
import CTA from "../Components/Sections/CTA.vue";
import Leadership from "../Components/Sections/Leadership.vue";
import Faq from "../Components/Sections/Faq.vue";
import Blog from "../Components/Sections/Blog.vue";
import { ref, onMounted, onUnmounted } from "vue";

const showScrollToTopButton = ref(false);

const handleScroll = () => {
    if (window.pageYOffset > 300) {
        // Show button after scrolling 300px
        showScrollToTopButton.value = true;
    } else {
        showScrollToTopButton.value = false;
    }
};

const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});
</script>

<template>
    <NavLayout>
        <Hero />
        <Leadership />
        <Services />
        <Projects />
        <Faq />
        <Blog />
        <!-- <Testimonials /> -->
        <CTA />

        <!-- Scroll to Top Button -->
        <button
            v-if="showScrollToTopButton"
            @click="scrollToTop"
            class="fixed bottom-8 right-8 bg-indigo-600 text-white p-3 rounded-full shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all duration-300 ease-in-out z-50"
            aria-label="Scroll to top"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M5 11l7-7 7 7M5 19l7-7 7 7"
                />
            </svg>
        </button>
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
