<script setup>
import NavLayout from "../../Layouts/NavLayout.vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster({ position: "top-right" });
const page = usePage();

const form = useForm({
    name: "",
    email: "",
    message: "",
});

const submitForm = () => {
    form.post("/contact/store", {
        // Assuming your store route is named 'contact.store' or simply '/contact'
        onSuccess: () => {
            const flash = page.props.flash;
            if (flash && flash.status) {
                // Check for the 'status' field from your controller
                toaster.success(flash.message || "Message sent successfully!");
                form.reset(); // Reset form fields on success
            } else if (flash) {
                toaster.error(flash.message || "Failed to send message.");
            }
        },
        onError: (errors) => {
            toaster.error("Please correct the errors in the form.");
            // You can loop through errors and display them if needed
            // For example: Object.values(errors).forEach(error => toaster.error(error));
            console.error("Form submission errors:", errors);
        },
    });
};
</script>

<template>
    <NavLayout>
        <div class="bg-gray-100 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">
                        Get in Touch
                    </h1>
                    <p class="text-gray-600 text-lg">
                        We'd love to hear from you. Please fill out the form
                        below or reach out through our contact details.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                            Send us a message
                        </h2>
                        <form @submit.prevent="submitForm">
                            <div class="mb-6">
                                <label
                                    for="name"
                                    class="block text-gray-700 font-medium mb-2"
                                    >Name</label
                                >
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    v-model="form.name"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required
                                />
                                <div
                                    v-if="form.errors.name"
                                    class="text-red-500 text-sm mt-1"
                                >
                                    {{ form.errors.name }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="email"
                                    class="block text-gray-700 font-medium mb-2"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    v-model="form.email"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required
                                />
                                <div
                                    v-if="form.errors.email"
                                    class="text-red-500 text-sm mt-1"
                                >
                                    {{ form.errors.email }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="message"
                                    class="block text-gray-700 font-medium mb-2"
                                    >Message</label
                                >
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="6"
                                    v-model="form.message"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required
                                ></textarea>
                                <div
                                    v-if="form.errors.message"
                                    class="text-red-500 text-sm mt-1"
                                >
                                    {{ form.errors.message }}
                                </div>
                            </div>
                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300"
                                :class="{
                                    'opacity-50 cursor-not-allowed':
                                        form.processing,
                                }"
                            >
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                            Contact Information
                        </h2>
                        <div class="space-y-6 text-gray-700">
                            <div class="flex items-start">
                                <svg
                                    class="flex-shrink-0 h-6 w-6 text-blue-600 mr-3"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                    />
                                </svg>
                                <div>
                                    <h3 class="font-semibold">Address</h3>
                                    <p>
                                        House-11, Road-12, Sector-10, Uttara,
                                        Dhaka-1230
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg
                                    class="flex-shrink-0 h-6 w-6 text-blue-600 mr-3"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                    />
                                </svg>
                                <div>
                                    <h3 class="font-semibold">Email</h3>
                                    <p>info@binsalamlogistics.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg
                                    class="flex-shrink-0 h-6 w-6 text-blue-600 mr-3"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                    />
                                </svg>
                                <div>
                                    <h3 class="font-semibold">Phone</h3>
                                    <p>+880 1234 567890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </NavLayout>
</template>
