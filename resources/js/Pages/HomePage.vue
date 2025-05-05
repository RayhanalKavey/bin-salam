<script setup>
import NavLayout from "../Layouts/NavLayout.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <NavLayout>
        <!-- Hero Section with Gradient Overlay -->
        <div
            class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 py-32"
        >
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-5xl font-bold text-white mb-4 leading-tight">
                    Bin Salam<br />Logistics
                </h1>
                <div class="mt-8">
                    <div
                        class="inline-block bg-white/10 backdrop-blur-sm rounded-full px-6 py-2"
                    >
                        <p class="text-lg text-gray-300">
                            Engineering Excellence Since 2012
                        </p>
                    </div>
                </div>
            </div>
        </div>

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
        <!-- Services with Grid Cards -->
        <div class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">
                    Core Services
                </h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Electrical Systems -->
                    <div
                        class="group bg-white rounded-xl p-8 shadow-lg card-hover"
                    >
                        <div
                            class="w-16 h-16 bg-gray-900 rounded-lg flex items-center justify-center mb-6"
                        >
                            <svg
                                class="w-8 h-8 text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"
                                />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">
                            Electrical Systems
                        </h3>
                        <p class="text-gray-600">
                            MV/LV systems, Sub-stations, Lighting Systems,
                            Building Management Systems, Security Systems, Home
                            Automation
                        </p>
                    </div>

                    <!-- Civil Engineering -->
                    <div
                        class="group bg-white rounded-xl p-8 shadow-lg card-hover"
                    >
                        <div
                            class="w-16 h-16 bg-gray-900 rounded-lg flex items-center justify-center mb-6"
                        >
                            <svg
                                class="w-8 h-8 text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                                />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">
                            Civil Engineering
                        </h3>
                        <p class="text-gray-600">
                            Multi-story buildings, Road construction, Bridge
                            development, Flood shelters, School construction,
                            Land development
                        </p>
                    </div>

                    <!-- Mechanical Solutions -->
                    <div
                        class="group bg-white rounded-xl p-8 shadow-lg card-hover"
                    >
                        <div
                            class="w-16 h-16 bg-gray-900 rounded-lg flex items-center justify-center mb-6"
                        >
                            <svg
                                class="w-8 h-8 text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"
                                />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">
                            Mechanical Solutions
                        </h3>
                        <p class="text-gray-600">
                            Fire protection systems, HVAC installation, Power
                            plant equipment, Industrial cooling systems, Heavy
                            machinery installation
                        </p>
                    </div>

                    <!-- Supply Chain Management -->
                    <div
                        class="group bg-white rounded-xl p-8 shadow-lg card-hover"
                    >
                        <div
                            class="w-16 h-16 bg-gray-900 rounded-lg flex items-center justify-center mb-6"
                        >
                            <svg
                                class="w-8 h-8 text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                                />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">
                            Supply & Installation
                        </h3>
                        <p class="text-gray-600">
                            Engine oils & coolants, Electric street lights,
                            Freezing vans, Paint goods, AC systems, Electrical
                            components
                        </p>
                    </div>

                    <!-- Infrastructure Development -->
                    <div
                        class="group bg-white rounded-xl p-8 shadow-lg card-hover"
                    >
                        <div
                            class="w-16 h-16 bg-gray-900 rounded-lg flex items-center justify-center mb-6"
                        >
                            <svg
                                class="w-8 h-8 text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"
                                />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">
                            Infrastructure Development
                        </h3>
                        <p class="text-gray-600">
                            Bituminous roadworks, Bridge construction, Sand
                            filling works, Drainage systems, Government
                            infrastructure projects
                        </p>
                    </div>

                    <!-- Commissioning Services -->
                    <div
                        class="group bg-white rounded-xl p-8 shadow-lg card-hover"
                    >
                        <div
                            class="w-16 h-16 bg-gray-900 rounded-lg flex items-center justify-center mb-6"
                        >
                            <svg
                                class="w-8 h-8 text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">
                            Testing & Commissioning
                        </h3>
                        <p class="text-gray-600">
                            Electrical system commissioning, Safety compliance
                            testing, Quality assurance protocols, Project
                            handover management
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects with Image Cards -->
        <!-- Projects Section -->
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">
                    Completed Projects
                </h2>

                <!-- Building Projects -->
                <div class="mb-16">
                    <h3
                        class="text-2xl font-semibold mb-8 text-gray-900 border-l-4 border-gray-900 pl-4"
                    >
                        Building Construction
                    </h3>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                4 Flood Shelters
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>Locations: Feni & Laxmipur Districts</p>
                                <p>Value: ৳15.07 Crores</p>
                                <p class="text-gray-500 text-xs">
                                    Monitoring: Department of Disaster
                                    Management
                                </p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                7 Government Primary Schools
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>Multiple Locations</p>
                                <p>Value: ৳12.65 Crores</p>
                                <p class="text-gray-500 text-xs">
                                    Monitoring: LGED
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Road Construction Projects -->
                <div class="mb-16">
                    <h3
                        class="text-2xl font-semibold mb-8 text-gray-900 border-l-4 border-gray-900 pl-4"
                    >
                        Road Construction
                    </h3>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                11.5 Km Road Construction
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>Location: Titas Upazila, Cumilla</p>
                                <p>Value: ৳34.21 Crores</p>
                                <p class="text-gray-500 text-xs">
                                    Project: RCIP
                                </p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                30 Km Road Construction
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>Various LGED Projects</p>
                                <p>Value: ৳34.21 Crores</p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                28m Garter Bridge
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>Location: Titas, Cumilla</p>
                                <p>Value: ৳3.88 Crores</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Supply Works -->
                <div class="mb-16">
                    <h3
                        class="text-2xl font-semibold mb-8 text-gray-900 border-l-4 border-gray-900 pl-4"
                    >
                        Supply & Installation Works
                    </h3>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                Engine Oil & Coolants Supply
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>Client: Bangladesh Railway West Division</p>
                                <p>Value: ৳2.92 Crores</p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                Electric Street Lights
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>Multiple Projects</p>
                                <p>Value: ৳1.25 Crores</p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                Freezing Vans Supply
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>Project: Vaccine Carrier Program</p>
                                <p>Value: ৳1.36 Crores</p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                1200 KVA Substation
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>Installation & Commissioning</p>
                                <p>Value: ৳3.13 Crores</p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                Power Plant Equipment
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>BPDB 100MW Gopalganj Plant</p>
                                <p>Value: ৳5.44 Crores</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Other Works -->
                <div>
                    <h3
                        class="text-2xl font-semibold mb-8 text-gray-900 border-l-4 border-gray-900 pl-4"
                    >
                        Additional Works
                    </h3>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                Sand Filling & Land Development
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>Various Government Projects</p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                        >
                            <h4
                                class="text-lg font-semibold text-gray-900 mb-2"
                            >
                                AC & Paint Supply
                            </h4>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p>Government & Private Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">
                    Client Experiences
                </h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div
                        class="bg-white rounded-xl p-8 shadow-lg border border-gray-100"
                    >
                        <div class="text-gray-600 mb-6 text-lg leading-relaxed">
                            "The team demonstrated exceptional professionalism
                            in completing our complex road project ahead of
                            schedule."
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-gray-900 text-white flex items-center justify-center"
                            >
                                AK
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">
                                    Abdul Karim
                                </h4>
                                <p class="text-gray-600 text-sm">
                                    ABC Construction
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more testimonials -->
                </div>
            </div>
        </div>

        <!-- CTA Section -->
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
