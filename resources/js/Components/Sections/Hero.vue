<script setup></script>

<template>
    <div
        class="relative py-32 bg-cover bg-center"
        :style="{ backgroundImage: 'url(/images/hero-background.png)' }"
    >
        <!-- Overlay for gradient and to darken the image for text readability -->
        <div
            class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-800/70 to-gray-900/80"
        ></div>

        <!-- Content needs to be relative to be on top of the overlay -->
        <div
            class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center"
        >
            <h1
                class="text-5xl font-bold text-white mb-4 leading-tight drop-shadow-md"
            >
                Bin Salam<br />Logistics
            </h1>
            <div class="mt-8">
                <div
                    class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 shadow-lg"
                >
                    <p class="text-lg text-gray-300">
                        Engineering Excellence Since 2012
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
