<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Table title="Les Demandes" :table="demands" />
                    <Table title="Les Types de Service" :table="serviceTypes" />
                    <Table title="Les Types de Project" :table="projectTypes" />
                    <Table title="Les Disciplines" :table="subjects" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import Table from "../Component/Table.vue";

export default {
    components: {
        AppLayout,
        Welcome,
        Table,
    },
    props: {
        subjects: [],
        serviceTypes: [],
        projectTypes: [],
        demands: [],
    },
};
</script>
