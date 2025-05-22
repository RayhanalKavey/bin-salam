<!-- resources/js/Layouts/AppLayout.vue -->
<script setup>
import Navbar from "./Navbar.vue";
import Footer from "./Footer.vue";
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

<style scoped></style>
