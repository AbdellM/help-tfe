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
                    <!-- <Table title="Les Files" :table="file" /> -->
                    <TableDemande
                        title="Les Demandes"
                        :table="demands"
                        :tableHeader="demandsHeader"
                    />
                    <Table
                        title="Les Types de Service"
                        :table="serviceTypes"
                        :tableHeader="serviceTypesHeader"
                    />
                    <Table
                        title="Les Types de Project"
                        :table="projectTypes"
                        :tableHeader="projectTypesHeader"
                    />
                    <Table
                        title="Les Disciplines"
                        :table="subjects"
                        :tableHeader="subjectsHeader"
                    />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Table from "../Component/Table.vue";
import TableDemande from "../Component/TableDemande.vue";

export default {
    components: {
        AppLayout,
        Table,
        TableDemande,
    },
    props: {
        subjects: [],
        serviceTypes: [],
        projectTypes: [],
        demands: [],
        file: [],
    },
    data() {
        return {
            demandsHeader: ["#", "Nom", "Telephone", "Sujet"],
            subjectsHeader: ["#", "Disciplines"],
            serviceTypesHeader: ["#", "Services"],
            projectTypesHeader: ["#", "Projets"],
        };
    },
    methods: {},
    created() {
        this.serviceTypes.forEach((element) => {
            delete element.created_at;
            delete element.updated_at;
        });
        this.projectTypes.forEach((element) => {
            delete element.created_at;
            delete element.updated_at;
        });
        this.subjects.forEach((element) => {
            delete element.created_at;
            delete element.updated_at;
        });
    },
};
</script>
