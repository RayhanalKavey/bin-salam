<script setup>
import { ref } from "vue";

const projectCategories = ref([
    {
        id: 1,
        title: "Building Construction",
        gridClass: "md:grid-cols-2",
        projects: [
            {
                id: "bc1",
                name: "4 Flood Shelters",
                details: [
                    "Locations: Feni & Laxmipur Districts",
                    "Value: ৳15.07 Crores",
                ],
                monitoring: "Monitoring: Department of Disaster Management",
                image: "/images/projects/shelter.png",
            },
            {
                id: "bc2",
                name: "7 Government Primary Schools",
                details: ["Multiple Locations", "Value: ৳12.65 Crores"],
                monitoring: "Monitoring: LGED",
                image: "/images/projects/school.png",
            },
        ],
    },
    {
        id: 2,
        title: "Road Construction",
        gridClass: "md:grid-cols-2 lg:grid-cols-3",
        projects: [
            {
                id: "rc1",
                name: "11.5 Km Road Construction",
                details: [
                    "Location: Titas Upazila, Cumilla",
                    "Value: ৳34.21 Crores",
                ],
                monitoring: "Project: RCIP",
                image: "/images/projects/road-construction.png",
            },
            {
                id: "rc2",
                name: "30 Km Road construction",
                details: ["Various LGED Projects", "Value: ৳34.21 Crores"],
                image: "/images/projects/road-construction-2.png",
            },
            {
                id: "rc3",
                name: "28m Garter Bridge",
                details: ["Location: Titas, Cumilla", "Value: ৳3.88 Crores"],
                image: "/images/projects/bridge.png",
            },
        ],
    },
    {
        id: 3,
        title: "Supply & Installation Works",
        gridClass: "md:grid-cols-2 lg:grid-cols-3",
        projects: [
            {
                id: "siw1",
                name: "Engine Oil & Coolants Supply",
                details: [
                    "Client: Bangladesh Railway West Division",
                    "Value: ৳2.92 Crores",
                ],
                image: "/images/projects/engine-oil.png",
            },
            {
                id: "siw2",
                name: "Electric Street Lights",
                details: ["Multiple Projects", "Value: ৳1.25 Crores"],
                image: "/images/projects/street-light.png",
            },
            {
                id: "siw3",
                name: "Freezing Vans Supply",
                details: [
                    "Project: Vaccine Carrier Program",
                    "Value: ৳1.36 Crores",
                ],
                image: "/images/projects/freezing-van.png",
            },
            {
                id: "siw4",
                name: "1200 KVA Substation",
                details: [
                    "Installation & Commissioning",
                    "Value: ৳3.13 Crores",
                ],
                image: "/images/projects/electrical-substation.png",
            },
            {
                id: "siw5",
                name: "Power Plant Equipment",
                details: ["BPDB 100MW Gopalganj Plant", "Value: ৳5.44 Crores"],
                image: "/images/projects/powerplant.png",
            },
        ],
    },
    {
        id: 4,
        title: "Additional Works",
        gridClass: "md:grid-cols-2",
        projects: [
            {
                id: "aw1",
                name: "Sand Filling & Land Development",
                details: ["Various Government Projects"],
                image: "/images/projects/sand-filling.png",
            },
            {
                id: "aw2",
                name: "AC & Paint Supply",
                details: ["Government & Private Projects"],
                image: "/images/projects/engine-oil.png",
            },
        ],
    },
]);
</script>

<template>
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">
                Completed Projects
            </h2>

            <!-- Loop through project categories -->
            <div
                v-for="category in projectCategories"
                :key="category.id"
                class="mb-16"
            >
                <h3
                    class="text-2xl font-semibold mb-8 text-gray-900 border-l-4 border-gray-900 pl-4"
                >
                    {{ category.title }}
                </h3>
                <div class="grid gap-8" :class="category.gridClass">
                    <!-- Loop through projects in the current category -->
                    <div
                        v-for="project in category.projects"
                        :key="project.id"
                        class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 card-hover"
                    >
                        <img
                            v-if="project.image"
                            :src="project.image"
                            :alt="project.name"
                            class="w-full h-48 object-cover rounded-md mb-4"
                        />
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">
                            {{ project.name }}
                        </h4>
                        <div class="space-y-2 text-sm text-gray-600">
                            <p
                                v-for="(detail, index) in project.details"
                                :key="index"
                            >
                                {{ detail }}
                            </p>
                            <p
                                v-if="project.monitoring"
                                class="mt-auto text-gray-500 text-xs"
                            >
                                {{ project.monitoring }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
