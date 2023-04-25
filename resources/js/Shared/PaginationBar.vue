<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    links: Object,
});
</script>

<template>
    <div>
        <template v-for="l in links.links" :key="l">
            <Link v-if="!l.active" class="px-2 py-1" :href="l.url" v-html="l.label"/>
            <span v-else class="px-2 py-1 cursor-pointer text-gray-500"  v-html="l.label"  />
        </template>
        <!--component
            v-for="l in links.links"
            :key="l"
            :is="!l.active ? 'Link' : 'span'"
            class="px-2 py-1"
            :class="!l.active ? '' : 'text-gray-500 cursor-pointer'"
            :href="l.url"
            v-html="l.label"
        /-->
    </div>
</template>
