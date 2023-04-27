<script setup>
import LinkButtonEdit from "@/Components/LinkButtonEdit.vue";
import LinkButtonDelete from "@/Components/LinkButtonDelete.vue";

defineProps({
    items: Object,
    headers: Array,
});

const capitalized = (string) => {
    const capitalizedFirst = string[0].toUpperCase();
    const rest = string.slice(1);

    return capitalizedFirst + rest;
};
</script>

<template>
    <table
        class="border-collapse mt-4 mb-3 rounded-md table-auto w-full text-sm bg-stone-50"
    >
        <thead>
            <template v-for="(header, id) in headers" :key="header">
                <th
                    class="border-b dark:border-slate-600 font-medium p-3 dark:text-slate-200 text-left"
                    v-html="capitalized(header)"
                    :class="id == 0 ? 'pl-4' : ''"
                />
            </template>
            <th
                class="border-b dark:border-slate-600 font-medium p-3 dark:text-slate-200 text-left pr-8 "
            >
                Actions
            </th>
        </thead>
        <tbody class="bg-white dark:bg-slate-800">
            <tr v-for="item in items.data" :key="item.id">
                <template v-for="(header, id) in headers" :key="header">
                    <td
                    class="border-b border-slate-100 dark:border-slate-700 p-3 text-slate-500 dark:text-slate-400"
                    :class="id == 0 ? 'pl-4' : ''"
                    >
                        {{ item[header] }}
                    </td>
                </template>
                <td
                    class="border-b border-slate-100 dark:border-slate-700 p-3 text-slate-500 dark:text-slate-400 pr-8"
                >
                    <LinkButtonEdit
                        :href="route('category.edit', item.id)"
                        :value="''"
                    />
                    <LinkButtonDelete
                        :href="route('category.destroy', item.id)"
                        :value="''"
                    />
                </td>
            </tr>
        </tbody>
    </table>
</template>
