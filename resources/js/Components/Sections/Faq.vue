<script setup>
import { ref } from "vue";

const faqs = ref([
    {
        id: 1,
        question:
            "What types of construction projects does Bin Salam undertake?",
        answer: "Bin Salam specializes in a diverse range of construction projects. This includes building construction such as flood shelters and government primary schools, as well as extensive road construction projects including new road development and bridge construction. We have a proven track record with clients like the Department of Disaster Management and LGED.",
        isOpen: false,
    },
    {
        id: 2,
        question:
            "Can Bin Salam handle large-scale supply and installation works?",
        answer: "Absolutely. Our Electro-Mechanical Division is adept at managing significant supply and installation contracts. We've successfully supplied engine oil and coolants for Bangladesh Railway, installed electric street lights, provided freezing vans for vaccine programs, set up 1200 KVA electrical substations, and supplied critical equipment for power plants like the BPDB 100MW Gopalganj Plant.",
        isOpen: false,
    },
    {
        id: 3,
        question: "What is the typical project value Bin Salam works with?",
        answer: "We handle projects of varying scales. For instance, our building projects have ranged up to ৳15 Crores, road constructions up to ৳34 Crores, and individual supply contracts can be several crores, such as ৳5.44 Crores for power plant equipment. We are equipped to manage both medium and large-value projects.",
        isOpen: false,
    },
    {
        id: 4,
        question: "Does Bin Salam work with government entities?",
        answer: "Yes, a significant portion of our work involves contracts with various government departments and agencies in Bangladesh, including the Department of Disaster Management, LGED, Bangladesh Railway, and BPDB. We also serve private clients effectively.",
        isOpen: false,
    },
]);

const toggleFaq = (id) => {
    faqs.value = faqs.value.map((faq) => {
        if (faq.id === id) {
            faq.isOpen = !faq.isOpen;
        } else {
            faq.isOpen = false; // Optional: Close other FAQs when one is opened
        }
        return faq;
    });
};
</script>

<template>
    <section id="faq" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">
                Frequently Asked Questions
            </h2>
            <div class="max-w-3xl mx-auto space-y-4">
                <div
                    v-for="faq in faqs"
                    :key="faq.id"
                    class="bg-white rounded-lg shadow-md overflow-hidden"
                >
                    <button
                        @click="toggleFaq(faq.id)"
                        class="w-full flex justify-between items-center text-left p-5 md:p-6 focus:outline-none focus:bg-gray-50 transition-colors duration-200"
                    >
                        <h3
                            class="text-lg md:text-xl font-semibold text-gray-800"
                        >
                            {{ faq.question }}
                        </h3>
                        <span
                            class="text-gray-500 transform transition-transform duration-300"
                            :class="{ 'rotate-180': faq.isOpen }"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19 9l-7 7-7-7"
                                />
                            </svg>
                        </span>
                    </button>
                    <div
                        v-if="faq.isOpen"
                        class="px-5 md:px-6 pb-5 md:pb-6 border-t border-gray-200"
                    >
                        <p
                            class="text-gray-700 mt-4 text-sm md:text-base leading-relaxed"
                        >
                            {{ faq.answer }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped></style>
