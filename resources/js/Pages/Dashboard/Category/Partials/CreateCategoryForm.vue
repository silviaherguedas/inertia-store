<script setup>
import { useForm } from "@inertiajs/vue3";

import FormSection from "@/Components/FormSection.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

const form = useForm({
    title: null,
    slug: null,
});

const createCategory = () => {
    form.post(route("category.store"), {
        errorBag: "createCategory",
        preserveScroll: true,
    });
};
</script>

<template>
    <FormSection
        @submitted="createCategory"
        class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"
    >
        <template #title> Create Category </template>
        <template #description> Add a new category to be able to associate it to an article. </template>
        <template #form>
            <div class="col-span-6">
                <InputLabel for="title" value="Title" />
                <TextInput
                    id="title"
                    class="w-full"
                    type="text"
                    v-model="form.title"
                />
                <InputError :message="form.errors.title" class="mt-2" />
            </div>

            <div class="col-span-6">
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
            <PrimaryButton> Send </PrimaryButton>
        </template>
    </FormSection>
</template>
