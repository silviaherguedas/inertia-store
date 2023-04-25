<script setup>
import LinkButtonEdit from "@/Components/LinkButtonEdit.vue";
import LinkButtonDelete from "@/Components/LinkButtonDelete.vue";

defineProps({
    items: Object,
    colums: Array,
});
</script>

<template>
    <table
                class="border-collapse mt-4 mb-3 rounded-md table-auto w-full text-sm bg-stone-50"
            >
                <thead>
                    <th
                        class="border-b dark:border-slate-600 font-medium p-4 pl-8 pb-3 dark:text-slate-200 text-left"
                    >
                        Id
                    </th>
                    <th
                        class="border-b dark:border-slate-600 font-medium p-4 pb-3 dark:text-slate-200 text-left"
                    >
                        Title
                    </th>
                    <th
                        class="border-b dark:border-slate-600 font-medium p-4 pb-3 dark:text-slate-200 text-left"
                    >
                        Slug
                    </th>
                    <th
                        class="border-b dark:border-slate-600 font-medium p-4 pr-8 pb-3 dark:text-slate-200 text-left"
                    >
                        Actions
                    </th>
                </thead>
                <tbody class="bg-white dark:bg-slate-800">
                    <tr v-for="item in items.data" :key="item.id">
                        <td
                            class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"
                        >
                            {{ item.id }}
                        </td>
                        <td
                            class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400"
                        >
                            {{ item.title }}
                        </td>
                        <td
                            class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400"
                        >
                            {{ item.slug }}
                        </td>
                        <td
                            class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400"
                        >
                                <LinkButtonEdit :href="route('category.edit', item.id)" :value="'Edit'" />
                                <LinkButtonDelete :href="route('category.destroy', item.id)" :value="'Delete'" />
                        </td>
                    </tr>
                </tbody>
            </table>
</template>
