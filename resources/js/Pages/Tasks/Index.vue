<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps<{
  tasks: [
    {
      id: number;
      title: string;
      description: string;
      completed: boolean;
      created_at: string;
      updated_at: string;
      assignee: {
        id: number;
        name: string;
      };
    },
  ];
}>();
</script>

<template>
  <Head title="Tasks" />
  <AuthenticatedLayout>
    <template #header>
      <h2
        class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
      >
        Tasks
      </h2>
    </template>

    <div class="container m-auto py-12">
      <div class="grid grid-cols-12 items-center dark:text-gray-200">
        <div class="col-span-1">Type</div>
        <div class="col-span-2">Task ID</div>
        <div class="col-span-6">Title</div>
        <div class="col-span-2">Assignee</div>
        <div class="col-span-1">Completed</div>
      </div>

      <div
        v-for="task in tasks"
        :key="task.id"
        class="grid grid-cols-12 items-center dark:text-gray-200"
      >
        <div class="col-span-1">{{ task.id }}</div>
        <div class="col-span-2">{{ task.title }}</div>
        <div class="col-span-6">{{ task.description }}</div>
        <div class="col-span-2">{{ task.assignee.name }}</div>
        <div class="col-span-1">{{ task.completed }}</div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
