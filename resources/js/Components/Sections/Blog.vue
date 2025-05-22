<script setup>
import { ref } from "vue";

const blogPosts = ref([
    {
        id: 1,
        image: "/images/blog/school.png",
        title: "Bin Salam Completes Key Infrastructure Project in Cumilla",
        excerpt:
            "We recently concluded a major road construction project in Titas Upazila, Cumilla, enhancing connectivity and supporting regional development. Read about the challenges and successes of this significant undertaking.",
        link: "#0", // Replace with actual blog post link
    },
    {
        id: 2,
        image: "/images/blog/powerplant.png",
        title: "The Role of Electro-Mechanical Expertise in Modern Logistics",
        excerpt:
            "Explore how our specialized Electro-Mechanical Division contributes to efficient and reliable logistics operations, from vehicle assembly to complex power infrastructure installations.",
        link: "#0", // Replace with actual blog post link
    },
    {
        id: 3,
        image: "/images/blog/handshake.png",
        title: "Partnering for Progress: Our Work with Government Agencies",
        excerpt:
            "Bin Salam Logistics is proud to support national development through successful partnerships and completed projects for various government bodies, including LGED and Bangladesh Railway.",
        link: "#0", // Replace with actual blog post link
    },
]);
</script>

<template>
    <section id="blog" class="blog-section py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">
                    Latest Blog Posts
                </h2>
                <p class="text-gray-700 mt-4 max-w-2xl mx-auto">
                    Stay updated with our latest news, project highlights, and
                    insights from the logistics and construction industries.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div v-for="post in blogPosts" :key="post.id">
                    <div
                        class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 flex flex-col h-full card-hover"
                    >
                        <img
                            :src="post.image"
                            :alt="post.title"
                            class="w-full h-48 object-cover rounded-md mb-4"
                        />
                        <div class="flex flex-col flex-grow">
                            <a :href="post.link" class="block mb-2 group">
                                <h4
                                    class="text-lg font-semibold text-gray-900 group-hover:text-indigo-600 transition-colors duration-200"
                                >
                                    {{ post.title }}
                                </h4>
                            </a>
                            <p class="text-sm text-gray-600 mb-4">
                                {{ post.excerpt }}
                            </p>
                            <a
                                :href="post.link"
                                class="text-indigo-600 hover:text-indigo-800 font-medium text-sm self-start mt-auto pt-2"
                                >Read More &rarr;</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* If the card-hover class is not globally available, you can define it here or ensure it's in a global CSS file.
   Assuming it's similar to the one used for Projects: */
.card-hover {
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),
        box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.card-hover:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
        0 4px 6px -4px rgba(0, 0, 0, 0.1);
}

/* The blog-section class might be for theme-specific styles.
   If it's only for padding, the py-16 on the section tag itself is more direct.
   If it has other styles, keep it. Otherwise, you can remove it if py-16 covers its purpose.
*/
.blog-section {
    /* If you have other specific styles for blog-section, they would go here.
    Otherwise, if it was just for padding, py-16 on the <section> tag handles that. */
}
</style>
