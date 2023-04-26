<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    links: Object,
});

const inactive =   "px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 ml-2";
const active = "px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 hover:bg-gray-50 ml-2 text-white bg-cyan-700";
</script>

<template>
    <div class="mt-4 text-center">
        <template v-for="link in links.links" :key="link">
            <Link v-if="!link.active" :class="inactive" :href="link.url" v-html="link.label" />
            <span v-else :class="active"  v-html="link.label" />
        </template>
    </div>
</template>
