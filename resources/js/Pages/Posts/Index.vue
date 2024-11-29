<template>
    <AppLayout>
        <template v-for="post in posts.data" :key="post.id">
            <div class="m-6 divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow">
                <div class="px-4 py-5 sm:px-6 font-bold">
                    {{ post.title }}
                </div>
                <div class="px-4 py-5 sm:p-6">
                    {{ post.body }}
                </div>
            </div>
        </template>
        <Pagination :meta="posts.meta" />
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Pagination from "@/Components/Pagination.vue";

defineProps(['posts']);
</script>

