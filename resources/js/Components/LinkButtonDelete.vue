<script setup>
import { Link } from "@inertiajs/vue3";

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faTrash } from '@fortawesome/free-solid-svg-icons'

/* add icons to the library */
library.add(faTrash)

defineProps({
    href: String,
    value: String,
});
</script>

<template>
    <Link
        :href="href"
        class="px-4 py-2 font-semibold text-sm bg-red-500 text-white rounded-md shadow-sm hover:bg-red-800 ease-in-out delay-150 duration-300"
    >
        <font-awesome-icon icon="fa-solid fa-trash" />
        {{ value }}
    </Link>
</template>
