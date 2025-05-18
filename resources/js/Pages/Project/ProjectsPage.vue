<script setup>
import SidebarLayout from "../../Layouts/SidebarLayout.vue";
import { usePage, router, Link, Head } from "@inertiajs/vue3";
import { computed } from "vue";
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster({ position: "top-right" });
const page = usePage();

const projects = computed(() => page.props.projects || []);

const editProject = (id) => {
    router.get(`/dashboard/projects/${id}/edit`);
};

const deleteProject = (id) => {
    if (confirm("Are you sure you want to delete this project?")) {
        router.delete(`/dashboard/projects/${id}`, {
            onSuccess: () => {
                const flash = page.props.flash;
                if (flash && flash.status) {
                    toaster.success(
                        flash.message || "Project deleted successfully!"
                    );
                } else if (flash) {
                    toaster.error(flash.message || "Failed to delete project.");
                }
            },
            onError: (errors) => {
                toaster.error("An error occurred while deleting the project.");
                console.error("Delete project errors:", errors);
            },
        });
    }
};

const formatDate = (dateString) => {
    if (!dateString) return "N/A";
    return new Date(dateString).toLocaleDateString();
};
</script>

<template>
    <SidebarLayout>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div
                    class="px-6 py-4 bg-gray-200 border-b border-gray-200 font-semibold text-gray-700"
                >
                    <div class="flex justify-between items-center">
                        <h2>Project List</h2>
                        <Link
                            href="/dashboard/projects/create"
                            class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400"
                        >
                            Create Project
                        </Link>
                    </div>
                </div>
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table
                            class="min-w-full divide-y divide-gray-200 border border-gray-300"
                        >
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-300"
                                    >
                                        #
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-300"
                                    >
                                        Name
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-300"
                                    >
                                        Status
                                    </th>

                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr
                                    v-if="projects && projects.length > 0"
                                    v-for="(project, index) in projects"
                                    :key="project.id"
                                    class="hover:bg-gray-50"
                                >
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r border-gray-300"
                                    >
                                        {{ index + 1 }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-r border-gray-300"
                                    >
                                        {{ project.name }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-r border-gray-300"
                                    >
                                        {{ project.status }}
                                    </td>

                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2"
                                    >
                                        <button
                                            @click="editProject(project.id)"
                                            class="px-3 py-1 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                        >
                                            Edit
                                        </button>
                                        <button
                                            @click="deleteProject(project.id)"
                                            class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                                        >
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr v-else>
                                    <td
                                        colspan="6"
                                        class="px-6 py-4 text-center text-sm text-gray-500"
                                    >
                                        No projects found.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </SidebarLayout>
</template>

<style scoped></style>
