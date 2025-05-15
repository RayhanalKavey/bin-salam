<script setup>
import { useForm } from "@inertiajs/vue3";
import SidebarLayout from "../../Layouts/SidebarLayout.vue";

const props = defineProps({
    category: {
        type: Object,
        required: true,
    },
});

const category = props.category;

const form = useForm({
    name: category.name,
    slug: category.slug,
    description: category.description,
});
</script>

<template>
    <SidebarLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form
                            @submit.prevent="
                                form.put(`/dashboard/categories/${category.id}`)
                            "
                        >
                            <div>
                                <label
                                    for="name"
                                    class="block font-medium text-sm text-gray-700"
                                    >Name</label
                                >
                                <input
                                    type="text"
                                    v-model="form.name"
                                    id="name"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                                <div
                                    v-if="form.errors.name"
                                    class="text-red-600 text-sm"
                                >
                                    {{ form.errors.name }}
                                </div>
                            </div>
                            <div class="mt-4">
                                <label
                                    for="slug"
                                    class="block font-medium text-sm text-gray-700"
                                    >Slug</label
                                >
                                <input
                                    type="text"
                                    v-model="form.slug"
                                    id="slug"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                                <div
                                    v-if="form.errors.slug"
                                    class="text-red-600 text-sm"
                                >
                                    {{ form.errors.slug }}
                                </div>
                            </div>
                            <div class="mt-4">
                                <label
                                    for="description"
                                    class="block font-medium text-sm text-gray-700"
                                    >Description</label
                                >
                                <textarea
                                    v-model="form.description"
                                    id="description"
                                    rows="3"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                ></textarea>
                                <div
                                    v-if="form.errors.description"
                                    class="text-red-600 text-sm"
                                >
                                    {{ form.errors.description }}
                                </div>
                            </div>
                            <div class="mt-4">
                                <button
                                    type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                >
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </SidebarLayout>
</template>

<style scoped></style>
