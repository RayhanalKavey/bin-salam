<script setup>
import SidebarLayout from "../../Layouts/SidebarLayout.vue";
import { Link, useForm, usePage } from "@inertiajs/vue3";
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster({ position: "top-right" });
const page = usePage();

// ফর্ম ডাটা ইনিশিয়ালাইজ
const form = useForm({
    name: "",
    description: "",
});

// ফর্ম সাবমিট হ্যান্ডলার
const submit = () => {
    if (form.name.trim().length === 0) {
        toaster.warning("Category Name is necessary");
        return;
    }

    const url = "/dashboard/categories";
    const method = "post";

    form.submit(method, url, {
        preserveScroll: true,
        onSuccess: () => {
            const flash = page.props.flash;
            if (flash && flash.status) {
                toaster.success(
                    flash.message || "Category created successfully!"
                );
                form.reset();
            } else if (flash) {
                toaster.error(flash.message || "Failed to create category.");
            } else {
                // Fallback if flash message is not properly sent
                toaster.success("Category created successfully!");
                form.reset();
            }
        },
    });
};
</script>

<template>
    <SidebarLayout>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex justify-center">
                <div class="w-full md:w-2/3 lg:w-1/2">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <!-- হেডার সেকশন -->
                        <div class="px-6 py-4 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <h4 class="text-lg font-semibold text-gray-700">
                                    New Category
                                </h4>
                                <Link
                                    href="/dashboard/categories"
                                    class="px-4 py-2 bg-green-500 text-white text-xs font-medium rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400"
                                >
                                    Back
                                </Link>
                            </div>
                        </div>

                        <!-- ফর্ম সেকশন -->
                        <form @submit.prevent="submit">
                            <div class="p-6 space-y-6">
                                <!-- নাম ইনপুট -->
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700 mb-1"
                                    >
                                        Category Name
                                    </label>
                                    <input
                                        v-model="form.name"
                                        type="text"
                                        placeholder="Write Category Name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        :class="{
                                            'border-red-500 focus:border-red-500 focus:ring-red-500':
                                                form.errors.name,
                                        }"
                                    />
                                    <div
                                        v-if="form.errors.name"
                                        class="text-red-600 text-sm mt-1"
                                    >
                                        {{ form.errors.name }}
                                    </div>
                                </div>

                                <!-- বর্ণনা ইনপুট -->
                                <div>
                                    <label
                                        class="block text-sm font-medium text-gray-700 mb-1"
                                    >
                                        বিস্তারিত বর্ণনা
                                    </label>
                                    <textarea
                                        v-model="form.description"
                                        rows="3"
                                        placeholder="Write Category Description"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        :class="{
                                            'border-red-500 focus:border-red-500 focus:ring-red-500':
                                                form.errors.description,
                                        }"
                                    ></textarea>
                                    <div
                                        v-if="form.errors.description"
                                        class="text-red-600 text-sm mt-1"
                                    >
                                        {{ form.errors.description }}
                                    </div>
                                </div>

                                <!-- সাবমিট বাটন -->
                                <div class="flex justify-end">
                                    <button
                                        type="submit"
                                        class="w-full sm:w-auto inline-flex justify-center items-center px-6 py-2.5 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring-2 focus:ring-green-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150"
                                        :disabled="form.processing"
                                    >
                                        {{
                                            form.processing
                                                ? "Saving..."
                                                : "Create Category"
                                        }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </SidebarLayout>
</template>
