<script setup>
import { Link } from "@inertiajs/vue3";

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faPlus } from '@fortawesome/free-solid-svg-icons'

/* add icons to the library */
library.add(faPlus)

defineProps({
    href: String,
    value: String,
});
</script>

<template>
    <div class="text-right">
        <Link
            :href="href"
            class="px-4 py-2 font-semibold text-sm bg-blue-500 text-white rounded-md shadow-sm hover:bg-indigo-500 ease-in-out delay-150 duration-300"
        >
            <font-awesome-icon icon="fa-solid fa-plus" />
            {{ value }}
        </Link>
    </div>
</template>
