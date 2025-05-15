<script setup></script>

<template>
    <form @submit.prevent="submit">
        <div>
            <label for="name">Project Name:</label>
            <input type="text" id="name" v-model="form.name" required />
            <div v-if="form.errors.name">{{ form.errors.name }}</div>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" v-model="form.description"></textarea>
            <div v-if="form.errors.description">
                {{ form.errors.description }}
            </div>
        </div>

        <button type="submit" :disabled="form.processing">
            Create Project
        </button>
    </form>
</template>

<style scoped></style>
