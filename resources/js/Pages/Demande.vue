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
                    <div class="w-full overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full m-auto">
                                <tbody class="bg-white">
                                    <tr class="text-gray-700">
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label> Nom </label>
                                        </td>
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label>
                                                {{ demand.name }}
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label> Email </label>
                                        </td>
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label>
                                                {{ demand.email }}
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label> Telephone </label>
                                        </td>
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label>
                                                {{ demand.phone }}
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label> Projet </label>
                                        </td>
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label>
                                                {{ project.projectType }}
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label> Service </label>
                                        </td>
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label>
                                                {{ service.serviceType }}
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label> Discipline </label>
                                        </td>
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label>
                                                {{ subject.subject }}
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label> Nombre Page </label>
                                        </td>
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label>
                                                {{ demand.pageNbr }}
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label> Date limite </label>
                                        </td>
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label>
                                                {{ demand.limitdate }}
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label> Sujet </label>
                                        </td>
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label>
                                                {{ demand.topic }}
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label> Remarque </label>
                                        </td>
                                        <td
                                            class="
                                                px-4
                                                py-3
                                                text-ms
                                                font-semibold
                                                border
                                            "
                                        >
                                            <label>
                                                {{ demand.remark }}
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
    components: {
        AppLayout,
    },
    props: {
        demand: {},
        service: {},
        project: {},
        subject: {},
    },
};
</script>

<style></style>
