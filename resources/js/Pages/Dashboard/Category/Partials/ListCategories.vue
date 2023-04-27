<script setup>
import { inject } from "vue";

import PaginationBar from "@/Shared/PaginationBar.vue";
import LinkButtonCreate from "@/Components/LinkButtonCreate.vue";
import TableList from "@/Components/TableList.vue";

const categories = inject("categories");
</script>

<template>
    <div class="container">
        <LinkButtonCreate :href="route('category.create')" :value="'Create'" />
        <div class="card">
            <TableList :items="categories" :headers="['id', 'title', 'slug']" />

            <PaginationBar :links="categories" />
        </div>
    </div>
</template>
