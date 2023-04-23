<template>
          <FormSection @submitted="submit" class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <template #title> Create Category </template>
            <template #description> Create a Category </template>
            <template #form>
              <div class="col-span-6">
                <InputLabel>Title</InputLabel>
                <TextInput class="w-full" type="text" v-model="form.title" />
                <InputError :message="errors.title" />
              </div>

              <div class="col-span-6">
                <InputLabel value="Slug" />
                <TextInput class="w-full" type="text" v-model="form.slug" />
                <InputError :message="errors.slug" />
              </div>
            </template>
            <template #actions>
                <PrimaryButton>
                    Send
                </PrimaryButton>
            </template>
          </FormSection>
</template>

<script>
import { router, useForm } from "@inertiajs/vue3";

import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

export default {
    components: {
        TextInput,
        InputError,
        InputLabel,
        PrimaryButton,
        FormSection,
    },
    props: {
        errors: Object
    },
    setup() {
        const form = useForm({
            title: null,
            slug: null,
        });
        function submit() {
            router.post(route("category.store"), form);
        }
        return { form, submit };
    },
};
</script>
