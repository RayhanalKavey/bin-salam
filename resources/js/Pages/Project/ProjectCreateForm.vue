<script setup>
import SidebarLayout from "../../Layouts/SidebarLayout.vue";
import { Link, useForm, usePage, Head } from "@inertiajs/vue3";
import { createToaster } from "@meforma/vue-toaster";
import { computed } from "vue";

const toaster = createToaster({ position: "top-right" });
const page = usePage();

const props = defineProps({
    categories: Array, // Categories passed from controller
});

const form = useForm({
    name: "",
    description: "",
    location: "",
    value: "",
    monitoring_body: "",
    image: null, // For file input
    status: "pending", // Default status
    category_id: null,
    user_id: null,
});
const projectStatuses = [{ value: "cancelled", label: "Cancelled" }];
const availableCategories = computed(() => props.categories || []);
const submit = () => {
    if (form.name.trim().length === 0) {
        toaster.warning("Project Name is required");
        return;
    }

    form.post("/dashboard/projects", {
        onSuccess: () => {
            const flash = page.props.flash;
            if (flash && flash.status) {
                toaster.success(
                    flash.message || "Project created successfully!"
                );
                form.reset();
            } else if (flash) {
                toaster.error(flash.message || "Failed to create project.");
            } else {
                toaster.success("Project created successfully!");
                form.reset();
            }
        },
        onError: (errors) => {
            // Display errors if needed
            console.error("Form submission errors:", errors);
            toaster.error("An error occurred during submission.");
        },
    });
};
</script>

<template>
    <Head title="Create Project" />
    <SidebarLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-2xl font-bold mb-4">
                            Create New Project
                        </h1>
                        <form
                            @submit.prevent="submit"
                            enctype="multipart/form-data"
                        >
                            <!-- Project Name -->
                            <div class="mb-4">
                                <label
                                    for="name"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Project Name:</label
                                >
                                <input
                                    v-model="form.name"
                                    type="text"
                                    id="name"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Enter project name"
                                />
                                <div
                                    v-if="form.errors.name"
                                    class="text-red-500 text-xs mt-1"
                                >
                                    {{ form.errors.name }}
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="mb-4">
                                <label
                                    for="description"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Description:</label
                                >
                                <textarea
                                    v-model="form.description"
                                    id="description"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Enter project description"
                                    rows="3"
                                ></textarea>
                                <div
                                    v-if="form.errors.description"
                                    class="text-red-500 text-xs mt-1"
                                >
                                    {{ form.errors.description }}
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="mb-4">
                                <label
                                    for="location"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Location:</label
                                >
                                <input
                                    v-model="form.location"
                                    type="text"
                                    id="location"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Enter project location"
                                />
                                <div
                                    v-if="form.errors.location"
                                    class="text-red-500 text-xs mt-1"
                                >
                                    {{ form.errors.location }}
                                </div>
                            </div>

                            <!-- Value -->
                            <div class="mb-4">
                                <label
                                    for="value"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Value:</label
                                >
                                <input
                                    v-model="form.value"
                                    type="number"
                                    id="value"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Enter project value"
                                />
                                <div
                                    v-if="form.errors.value"
                                    class="text-red-500 text-xs mt-1"
                                >
                                    {{ form.errors.value }}
                                </div>
                            </div>

                            <!-- Monitoring Body -->
                            <div class="mb-4">
                                <label
                                    for="monitoring_body"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Monitoring Body:</label
                                >
                                <input
                                    v-model="form.monitoring_body"
                                    type="text"
                                    id="monitoring_body"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Enter monitoring body"
                                />
                                <div
                                    v-if="form.errors.monitoring_body"
                                    class="text-red-500 text-xs mt-1"
                                >
                                    {{ form.errors.monitoring_body }}
                                </div>
                            </div>
                            <!-- Image Upload -->
                            <div class="mb-4">
                                <label
                                    for="image"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Project Image:</label
                                >
                                <input
                                    type="file"
                                    id="image"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    @input="form.image = $event.target.files[0]"
                                />
                                <div
                                    v-if="form.errors.image"
                                    class="text-red-500 text-xs mt-1"
                                >
                                    {{ form.errors.image }}
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="mb-4">
                                <label
                                    for="status"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Status:</label
                                >
                                <select
                                    v-model="form.status"
                                    id="status"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                >
                                    <option value="pending">Pending</option>
                                    <option value="in_progress">
                                        In Progress
                                    </option>
                                    <option value="completed">Completed</option>
                                    <option
                                        v-for="status in projectStatuses"
                                        :key="status.value"
                                        :value="status.value"
                                    >
                                        {{ status.label }}
                                    </option>
                                </select>
                                <div
                                    v-if="form.errors.status"
                                    class="text-red-500 text-xs mt-1"
                                >
                                    {{ form.errors.status }}
                                </div>
                            </div>

                            <!-- Category -->
                            <div class="mb-4">
                                <label
                                    for="category_id"
                                    class="block text-gray-700 text-sm font-bold mb-2"
                                    >Category:</label
                                >
                                <select
                                    v-model="form.category_id"
                                    id="category_id"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                >
                                    <option value="">Select a category</option>
                                    <option
                                        v-for="category in availableCategories"
                                        :key="category.id"
                                        :value="category.id"
                                    >
                                        {{ category.name }}
                                    </option>
                                </select>
                                <div
                                    v-if="form.errors.category_id"
                                    class="text-red-500 text-xs mt-1"
                                >
                                    {{ form.errors.category_id }}
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex items-center justify-between">
                                <button
                                    type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    :disabled="form.processing"
                                >
                                    <span v-if="form.processing"
                                        >Creating...</span
                                    >
                                    <span v-else>Submit</span>
                                </button>

                                <Link
                                    href="/dashboard/projects"
                                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                                >
                                    Cancel
                                </Link>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </SidebarLayout>
</template>

<style scoped></style>
