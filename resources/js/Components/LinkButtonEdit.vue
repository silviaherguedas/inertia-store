<script setup>
import { Link } from "@inertiajs/vue3";

import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { faPenFancy } from "@fortawesome/free-solid-svg-icons";

/* add icons to the library */
library.add(faPenFancy);

defineProps({
    href: String,
    value: String,
});
</script>

<template>
    <Link
        :href="href"
        class="px-4 py-2 mr-2 font-semibold text-sm bg-green-500 text-white rounded-md shadow-sm hover:bg-green-800 ease-in-out delay-150 duration-300"
    >
        <font-awesome-icon icon="fa-solid fa-pen-fancy" />
        {{ value }}
    </Link>
</template>
