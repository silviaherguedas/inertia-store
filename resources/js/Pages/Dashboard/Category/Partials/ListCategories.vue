<script setup>
import { inject } from "vue";

import PaginationBar from "@/Shared/PaginationBar.vue";
import LinkButtonCreate from "@/Components/LinkButtonCreate.vue";
import TableList from "@/Components/TableList.vue";

const categories = inject("categories");
</script>

<template>
    <LinkButtonCreate :href="route('category.create')" :value="'Create'" />

    <TableList :items="categories" :colums="['id','title', 'slug', 'actions']"/>

    <PaginationBar :links="categories" />
</template>
