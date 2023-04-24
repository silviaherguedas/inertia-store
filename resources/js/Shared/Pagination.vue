<script setup>
const props = defineProps({
    links: Object,
});
</script>

<template>
    <div>
        <Component
            v-for="l in props.links.links"
            :key="l"
            :is="!l.active ? 'Link' : 'span'"
            class="px-2 py-1"
            :class="!l.active ? '' : 'text-gray-500 cursor-pointer'"
            :href="l.url"
            v-html="l.label"
        />
    </div>
</template>
