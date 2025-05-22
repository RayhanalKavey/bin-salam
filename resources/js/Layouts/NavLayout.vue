<!-- resources/js/Layouts/AppLayout.vue -->
<script setup>
import { ref } from "vue";
import Navbar from "./Navbar.vue";
import Footer from "./Footer.vue";

const isMenuOpen = ref(false);
</script>

<template>
    <div class="min-h-screen bg-gray-100">
        <Navbar />
        <main>
            <slot />
        </main>
        <Footer />
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
