<template>
<form @submit.prevent="submit">
    <label for="">Title</label>
    <input type="text" v-model="form.title" />
    <label for="">Slug</label>
    <input type="text" v-model="form.slug" />
    <button type="submit">Send</button>
  </form>
</template>

<script>
import { router, useForm } from "@inertiajs/vue3";
export default {
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
