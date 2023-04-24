<script setup>
import { inject } from "vue";
import { useForm } from "@inertiajs/vue3";

import FormSection from "@/Components/FormSection.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

const category = inject("category");

const form = useForm({
    id: category.id,
    title: category.title,
    slug: category.slug,
});

const updateCategory = () => {
    form.put(route("category.update", form.id), {
        errorBag: "updateCategory",
        preserveScroll: true,
    });
};
</script>
<template>
    <FormSection
        @submitted="updateCategory"
        class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"
    >
        <template #title> Edit Category </template>
        <template #description> Edit a Category </template>
        <template #form>
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="title" value="Title" />
                <TextInput
                    id="title"
                    class="w-full"
                    type="text"
                    v-model="form.title"
                />
                <InputError :message="form.errors.title" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="slug" value="Slug" />
                <TextInput
                    id="slug"
                    class="w-full"
                    type="text"
                    v-model="form.slug"
                />
                <InputError :message="form.errors.slug" class="mt-2" />
            </div>
        </template>
        <template #actions>
            <PrimaryButton>Send</PrimaryButton>
        </template>
    </FormSection>
</template>
