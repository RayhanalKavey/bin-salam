<script setup>
import { ref, computed } from "vue";
import NavLayout from "../../Layouts/NavLayout.vue";

const props = defineProps({
    blogId: {
        type: [Number, String], // ID might come as a string from URL params
        required: true,
    },
});

const blogPosts = ref([
    {
        id: 1, // Ensure these IDs match what you expect from the controller/URL
        image: "/images/blog/school.png",
        title: "Bin Salam Completes Key Infrastructure Project in Cumilla",
        excerpt:
            "We recently concluded a major road construction project in Titas Upazila, Cumilla, enhancing connectivity and supporting regional development. Read about the challenges and successes of this significant undertaking.",
        link: "/blogDetails/1", // Replace with actual blog post link
    },
    {
        id: 2,
        image: "/images/blog/powerplant.png",
        title: "The Role of Electro-Mechanical Expertise in Modern Logistics",
        excerpt:
            "Explore how our specialized Electro-Mechanical Division contributes to efficient and reliable logistics operations, from vehicle assembly to complex power infrastructure installations.",
        link: "/blogDetails/2", // Replace with actual blog post link
    },
    {
        id: 3,
        image: "/images/blog/handshake.png",
        title: "Partnering for Progress: Our Work with Government Agencies",
        excerpt:
            "Bin Salam Logistics is proud to support national development through successful partnerships and completed projects for various government bodies, including LGED and Bangladesh Railway.",
        link: "/blogDetails/3", // Replace with actual blog post link
    },
]);

const currentPost = computed(() => {
    // Convert props.blogId to a number for comparison, as IDs in blogPosts are numbers
    const numericBlogId = parseInt(props.blogId, 10);
    return blogPosts.value.find((post) => post.id === numericBlogId);
});
</script>

<template>
    <NavLayout>
        <section class="py-16 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div
                    v-if="currentPost"
                    class="bg-white rounded-xl shadow-sm p-6 md:p-8 border border-gray-200"
                >
                    <img
                        v-if="currentPost.image"
                        :src="currentPost.image"
                        :alt="currentPost.title"
                        class="w-full h-auto max-h-96 object-cover rounded-md mb-6"
                    />
                    <h1
                        class="text-3xl md:text-4xl font-bold text-gray-900 mb-4"
                    >
                        {{ currentPost.title }}
                    </h1>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        {{ currentPost.excerpt }}
                    </p>

                    <!-- Placeholder for more detailed content -->
                    <!-- You would typically fetch this full content based on the ID -->
                    <div
                        class="prose prose-lg max-w-none text-gray-700 space-y-4"
                    >
                        <p>
                            This is where the full blog post content would go.
                            For now, we're re-using the excerpt as a
                            placeholder. In a real application, you'd fetch or
                            define more detailed content for each blog post.
                        </p>
                        <p>
                            For example, if this were the "Key Infrastructure
                            Project in Cumilla" post, you might elaborate on:
                        </p>
                        <ul>
                            <li>Specifics of the road network.</li>
                            <li>
                                The impact on local communities and businesses.
                            </li>
                            <li>
                                Challenges faced during construction (terrain,
                                logistics).
                            </li>
                            <li>How the team overcame these challenges.</li>
                            <li>Future outlook and benefits of the project.</li>
                        </ul>
                        <p>
                            The structure and depth of this content would depend
                            on your specific blog requirements.
                        </p>
                    </div>
                </div>
                <div v-else class="text-center py-12">
                    <h2 class="text-2xl font-semibold text-gray-700 mb-4">
                        Blog Post Not Found
                    </h2>
                    <p class="text-gray-500">
                        Sorry, we couldn't find the blog post you were looking
                        for.
                    </p>
                    <!-- You could add a link back to the main blog page here -->
                    <!-- <Link href="/blogs" class="mt-6 inline-block text-indigo-600 hover:text-indigo-800">Go to Blog List</Link> -->
                </div>
            </div>
        </section>
    </NavLayout>
</template>

<style scoped></style>
