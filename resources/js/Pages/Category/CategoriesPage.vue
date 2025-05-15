<script setup>
import SidebarLayout from "../../Layouts/SidebarLayout.vue";
import { usePage, router, Link } from "@inertiajs/vue3"; // usePage এবং router ইম্পোর্ট করুন
import { computed } from "vue"; // computed ইম্পোর্ট করুন
import { Head } from "@inertiajs/vue3";
const page = usePage();
// page.props থেকে categories অ্যাক্সেস করুন এবং categories না থাকলে একটি খালি অ্যারে দিন
const categories = computed(() => page.props.categories || []);

// অ্যাকশনের জন্য প্লেসহোল্ডার মেথড (এগুলো পরে ইমপ্লিমেন্ট করতে হবে)
const editCategory = (id) => {
    console.log("ক্যাটেগরি এডিট করার চেষ্টা, আইডি:", id);
    router.get(`/dashboard/categories/${id}/edit`);
};

const deleteCategory = (id) => {
    // ডিলিট করার আগে একটি কনফার্মেশন ডায়ালগ দেখানো ভালো
    // উদাহরণ: if (confirm('আপনি কি এই ক্যাটেগরিটি ডিলিট করতে নিশ্চিত?')) { router.delete(`/dashboard/categories/${id}`); }
    // নিশ্চিত করুন আপনার রাউট এবং কন্ট্রোলার মেথড তৈরি করা আছে।
    if (confirm("আপনি কি এই ক্যাটেগরিটি ডিলিট করতে নিশ্চিত?")) {
        // console.log("ক্যাটেগরি ডিলিট করার চেষ্টা, আইডি:", id);
        router.delete(`/dashboard/categories/${id}`);
    }
};
</script>

<template>
    <Head title="All Categories" />
    <SidebarLayout>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div
                    class="px-6 py-4 bg-gray-200 border-b border-gray-200 font-semibold text-gray-700"
                >
                    <div class="flex justify-between items-center">
                        <h2>Category List</h2>
                        <!-- :href="route('categories.create')" -->
                        <!-- href="/dashboard/categories/create" -->
                        <Link
                            :href="`/dashboard/categories/create`"
                            class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                        >
                            Create Category
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
                                        Created At
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
                                    v-if="categories && categories.length > 0"
                                    v-for="(category, index) in categories"
                                    :key="category.id"
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
                                        {{ category.name }}
                                    </td>

                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-r border-gray-300"
                                    >
                                        {{
                                            new Date(
                                                category.created_at
                                            ).toLocaleDateString()
                                        }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2"
                                    >
                                        <button
                                            @click="editCategory(category.id)"
                                            class="px-3 py-1 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                        >
                                            এডিট
                                        </button>
                                        <button
                                            @click="deleteCategory(category.id)"
                                            class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                                        >
                                            ডিলিট
                                        </button>
                                    </td>
                                </tr>
                                <tr v-else>
                                    <td
                                        colspan="5"
                                        class="px-6 py-4 text-center text-sm text-gray-500"
                                    >
                                        কোনো ক্যাটেগরি খুঁজে পাওয়া যায়নি।
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
