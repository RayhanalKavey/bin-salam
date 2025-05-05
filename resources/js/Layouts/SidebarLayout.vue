<script>
import { Link } from "@inertiajs/vue3";
import { ref, onMounted, watch } from "vue";

export default {
    components: {
        Link,
    },
    setup() {
        const sidebarOpen = ref(true);
        const isMobileSidebarOpen = ref(false);
        const isMobile = ref(false);

        const checkIfMobile = () => {
            isMobile.value = window.innerWidth < 1024; // lg breakpoint
        };

        const toggleSidebar = () => {
            if (isMobile.value) {
                isMobileSidebarOpen.value = !isMobileSidebarOpen.value;
            } else {
                sidebarOpen.value = !sidebarOpen.value;
            }
        };

        onMounted(() => {
            checkIfMobile();
            window.addEventListener("resize", checkIfMobile);

            if (isMobile.value) {
                sidebarOpen.value = false;
            }
        });

        watch(isMobile, (newVal) => {
            if (newVal) {
                sidebarOpen.value = false;
            } else {
                isMobileSidebarOpen.value = false;
            }
        });

        return {
            sidebarOpen,
            isMobileSidebarOpen,
            toggleSidebar,
        };
    },
};
</script>

<template>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar Backdrop (mobile only) -->
        <div
            v-if="isMobileSidebarOpen"
            class="fixed inset-0 z-20 bg-black opacity-50 lg:hidden"
            @click="isMobileSidebarOpen = false"
        ></div>

        <!-- Sidebar -->
        <aside
            class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto bg-gray-900 text-white transition-all duration-300 ease-in-out lg:static lg:left-0"
            :class="{
                '-translate-x-full lg:translate-x-0 lg:w-20': !sidebarOpen,
                'translate-x-0': sidebarOpen || isMobileSidebarOpen,
            }"
        >
            <div class="flex items-center justify-between p-4">
                <span
                    class="text-xl font-semibold whitespace-nowrap"
                    :class="{ 'lg:hidden': !sidebarOpen }"
                >
                    <Link href="/">RAK-bmw</Link>
                </span>
                <button
                    @click="toggleSidebar"
                    class="py-1 px-3 rounded-lg hover:bg-blue-400"
                    :class="{ 'ml-auto': !sidebarOpen }"
                >
                    <i
                        class="fa"
                        :class="{
                            'fa-times': sidebarOpen || isMobileSidebarOpen,
                            'fa-bars': !sidebarOpen && !isMobileSidebarOpen,
                        }"
                    ></i>
                </button>
            </div>

            <nav class="mt-4">
                <div class="px-4 space-y-1">
                    <!-- Dashboard -->
                    <Link
                        href="/dashboard"
                        class="flex items-center p-3 rounded-lg hover:bg-blue-400 cursor-pointer"
                        :class="{ 'bg-blue-800': $page.url === '/dashboard' }"
                    >
                        <i class="fa fa-home"></i>
                        <span
                            class="ml-3 whitespace-nowrap"
                            :class="{ 'lg:hidden': !sidebarOpen }"
                            >Dashboard</span
                        >
                    </Link>
                    <!-- Category -->

                    <Link
                        href="/dashboard/categories"
                        class="flex items-center p-3 rounded-lg hover:bg-blue-400 cursor-pointer"
                        :class="{
                            'bg-blue-800':
                                $page.url === '/dashboard/categories',
                        }"
                    >
                        <i class="fa fa-tags"></i>
                        <span
                            class="ml-3 whitespace-nowrap"
                            :class="{ 'lg:hidden': !sidebarOpen }"
                            >Categories</span
                        >
                    </Link>
                    <!-- Projects -->
                    <Link
                        href="/dashboard/projects"
                        class="flex items-center p-3 rounded-lg hover:bg-blue-400 cursor-pointer"
                        :class="{
                            'bg-blue-800': $page.url === '/dashboard/projects',
                        }"
                    >
                        <i class="fa fa-cubes"></i>
                        <span
                            class="ml-3 whitespace-nowrap"
                            :class="{ 'lg:hidden': !sidebarOpen }"
                            >Projects</span
                        >
                    </Link>

                    <!-- Blogs -->
                    <Link
                        href="/dashboard/blogs"
                        class="flex items-center p-3 rounded-lg hover:bg-blue-400 cursor-pointer"
                        :class="{
                            'bg-blue-800': $page.url === '/dashboard/blogs',
                        }"
                    >
                        <i class="fa fa-rss"></i>
                        <span
                            class="ml-3 whitespace-nowrap"
                            :class="{ 'lg:hidden': !sidebarOpen }"
                            >Blogs</span
                        >
                    </Link>

                    <!-- Services -->
                    <Link
                        href="/dashboard/services"
                        class="flex items-center p-3 rounded-lg hover:bg-blue-400 cursor-pointer"
                        :class="{
                            'bg-blue-800': $page.url === '/dashboard/services',
                        }"
                    >
                        <i class="fa fa-gears"></i>
                        <span
                            class="ml-3 whitespace-nowrap"
                            :class="{ 'lg:hidden': !sidebarOpen }"
                            >Services</span
                        >
                    </Link>
                </div>
            </nav>
        </aside>

        <!-- Main content -->
        <div class="flex-1 overflow-auto">
            <!-- Mobile header -->
            <header
                class="flex items-center justify-between p-4 bg-white border-b lg:hidden"
            >
                <button
                    @click="isMobileSidebarOpen = true"
                    class="p-2 rounded-lg"
                >
                    <i class="fa fa-bars"></i>
                </button>
                <h1 class="text-xl font-semibold">Dashboard</h1>
                <div class="w-6"></div>
            </header>

            <!-- Content -->
            <main class="p-6">
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");

.fa {
    width: 24px;
    text-align: center;
}

/* Smooth transitions */
.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
}

/* Scrollbar styling */
.overflow-y-auto::-webkit-scrollbar {
    width: 6px;
}

.overflow-y-auto::-webkit-scrollbar-thumb {
    background-color: rgba(255, 255, 255, 0.3);
    border-radius: 3px;
}

.overflow-y-auto::-webkit-scrollbar-track {
    background-color: rgba(0, 0, 0, 0.1);
}
</style>
