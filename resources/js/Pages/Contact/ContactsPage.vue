<script setup>
import SidebarLayout from "../../Layouts/SidebarLayout.vue";
import { usePage, router } from "@inertiajs/vue3";
import { computed } from "vue";
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster({ position: "top-right" });
const page = usePage();

const contacts = computed(() => page.props.contacts || []);

const deleteContact = (id) => {
    if (confirm("Are you sure you want to delete this contact message?")) {
        router.delete(`/dashboard/contact/${id}`, {
            // Assuming you'll create this route
            onSuccess: () => {
                const flash = page.props.flash;
                if (flash && flash.status) {
                    toaster.success(
                        flash.message || "Contact message deleted successfully!"
                    );
                } else if (flash) {
                    toaster.error(
                        flash.message || "Failed to delete contact message."
                    );
                }
            },
            onError: (errors) => {
                toaster.error(
                    "An error occurred while deleting the contact message."
                );
                console.error("Delete contact errors:", errors);
            },
        });
    }
};

const formatDate = (dateString) => {
    if (!dateString) return "N/A";
    const options = {
        year: "numeric",
        month: "long",
        day: "numeric",
        hour: "2-digit",
        minute: "2-digit",
    };
    return new Date(dateString).toLocaleDateString(undefined, options);
};
</script>

<template>
    <SidebarLayout>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div
                    class="px-6 py-4 bg-gray-200 border-b border-gray-200 font-semibold text-gray-700"
                >
                    <h2>Contact Messages</h2>
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
                                        Email
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-300"
                                    >
                                        Message
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-300"
                                    >
                                        Received At
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
                                    v-if="contacts && contacts.length > 0"
                                    v-for="(contact, index) in contacts"
                                    :key="contact.id"
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
                                        {{ contact.name }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-r border-gray-300"
                                    >
                                        {{ contact.email }}
                                    </td>
                                    <td
                                        class="px-6 py-4 text-sm text-gray-700 border-r border-gray-300 max-w-xs truncate"
                                        :title="contact.message"
                                    >
                                        {{ contact.message }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-r border-gray-300"
                                    >
                                        {{ formatDate(contact.created_at) }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium"
                                    >
                                        <button
                                            @click="deleteContact(contact.id)"
                                            class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                                        >
                                            Delete
                                        </button>
                                        <!-- You could add a 'View' button here if you implement a detail view for contacts -->
                                    </td>
                                </tr>
                                <tr v-else>
                                    <td
                                        colspan="6"
                                        class="px-6 py-4 text-center text-sm text-gray-500"
                                    >
                                        No contact messages found.
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
