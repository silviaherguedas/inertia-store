<script setup>
import { provide } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import CreateCategoryForm from "@/Pages/Dashboard/Category/Partials/CreateCategoryForm.vue";
import EditCategoryForm from "@/Pages/Dashboard/Category/Partials/EditCategoryForm.vue";

const props = defineProps({
    type_form: String,
    category: Object,
});

provide("category", props.category);
</script>

<template>
    <AppLayout title="Category Settings">
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Category Settings
            </h2>
        </template>

        <div>
            <div
                v-if="props.type_form == 'creation'"
                class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"
            >
                <CreateCategoryForm />
            </div>

            <div
                v-if="props.type_form == 'edition'"
                class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"
            >
                <EditCategoryForm />
            </div>
        </div>
    </AppLayout>
</template>
