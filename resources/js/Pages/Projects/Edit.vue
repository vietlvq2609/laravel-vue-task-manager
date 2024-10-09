<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps<{
  project: {
    id: string;
    name: string;
    description: string;
    owner: {
      id: number;
      name: string;
    };
  };
}>();
</script>

<template>
  <Head title="Projects" />
  <AuthenticatedLayout>
    <template #header>
      <h2
        class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
      >
        {{ project.id }}
      </h2>
    </template>
  </AuthenticatedLayout>
</template>
