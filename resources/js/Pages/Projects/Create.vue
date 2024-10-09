<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import { reactive } from 'vue';

const form = reactive({
  code: null,
  name: null,
  description: null,
});

function submit() {
  router.post('/projects', form);
}
</script>

<template>
  <Head title="Projects" />
  <AuthenticatedLayout>
    <template #header>
      <h2
        class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
      >
        Create New Project
      </h2>
    </template>

    <div class="mx-auto my-12 max-w-xl">
      <form @submit.prevent="submit" class="grid grid-cols-12 gap-4">
        <div class="col-span-12">
          <label
            for="code"
            class="block text-sm font-medium text-gray-700 dark:text-gray-200"
          >
            Code
          </label>
          <input
            type="text"
            id="code"
            name="code"
            v-model="form.code"
            class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200"
          />
        </div>

        <div class="col-span-12">
          <label
            for="name"
            class="block text-sm font-medium text-gray-700 dark:text-gray-200"
          >
            Name
          </label>
          <input
            type="text"
            id="name"
            name="name"
            v-model="form.name"
            class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200"
          />
        </div>

        <div class="col-span-12">
          <label
            for="description"
            class="block text-sm font-medium text-gray-700 dark:text-gray-200"
          >
            Description
          </label>
          <textarea
            type="text"
            id="description"
            name="description"
            v-model="form.description"
            class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200"
          />
        </div>

        <button
          type="submit"
          class="btn btn-primary col-span-12 m-auto mt-12 w-fit rounded border border-solid px-4 py-2 text-white"
        >
          Create Project
        </button>
      </form>
    </div>
  </AuthenticatedLayout>
</template>
