<script setup lang="ts">
import NavLink from '@/Components/NavLink.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps<{
  projects: Array<{
    id: string;
    code: string;
    name: string;
    description: string;
    owner: {
      id: number;
      name: string;
    };
  }>;
}>();
</script>

<template>
  <Head title="Projects" />
  <AuthenticatedLayout>
    <template #header>
      <div class="flex justify-between">
        <h2
          class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
        >
          Projects
        </h2>
        <NavLink
          :href="route('projects.create')"
          :active="route().current('projects.create')"
        >
          Create Project
        </NavLink>
      </div>
    </template>

    <div
      v-if="projects && projects.length === 0"
      class="mt-10 p-2 text-center text-2xl text-gray-500 dark:text-gray-400"
    >
      No projects found.
    </div>

    <div
      v-if="projects && projects.length > 0"
      class="mx-auto my-10 max-w-4xl rounded border"
    >
      <div
        class="grid grid-cols-12 items-center border-b p-2 font-medium dark:text-orange-700"
      >
        <div class="col-span-2">Project ID</div>
        <div class="col-span-6">Name</div>
        <div class="col-span-2">Owner</div>
      </div>

      <Link
        v-for="(project, index) in projects"
        :key="project.id"
        :href="route('projects.edit', project.id)"
      >
        <div
          :class="{
            'grid grid-cols-12 items-center p-2 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-800': true,
            'border-b': index !== projects.length - 1,
          }"
        >
          <div
            class="col-span-2 hover:cursor-pointer hover:underline dark:text-orange-700"
          >
            {{ project.code }}
          </div>
          <div class="col-span-6">{{ project.name }}</div>
          <div class="col-span-2">{{ project.owner.name }}</div>
        </div>
      </Link>
    </div>
  </AuthenticatedLayout>
</template>
