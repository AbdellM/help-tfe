<template>
    <section class="container mx-auto p-6 font-mono">
        <h1
            class="
                mb-8
                text-2xl
                font-bold
                tracking-tighter
                text-left text-black
                lg:text-2xl
                title-font
                flex
                justify-between
            "
        >
            <div>
                {{ title }}
            </div>
        </h1>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="
                                text-md
                                font-semibold
                                tracking-wide
                                text-left text-gray-900
                                bg-gray-100
                                uppercase
                                border-b border-gray-600
                            "
                        >
                            <th
                                class="px-4 py-3"
                                v-for="elment in tableHeader"
                                :key="elment"
                            >
                                {{ elment }}
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr
                            v-for="object in table"
                            :key="object"
                            class="text-gray-700"
                        >
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <label>
                                    {{ object.id }}
                                </label>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <label>
                                    {{ object.name }}
                                </label>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <label>
                                    {{ object.phone }}
                                </label>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <label>
                                    {{ object.topic }}
                                </label>
                            </td>

                            <td class="px-4 py-3 text-ms font-semibold border">
                                <button
                                    type="button"
                                    class="
                                        mr-3
                                        text-sm
                                        bg-blue-500
                                        hover:bg-blue-700
                                        text-white
                                        py-1
                                        px-2
                                        rounded
                                        focus:outline-none focus:shadow-outline
                                    "
                                    @click="ViewMore(object.id)"
                                >
                                    Plus
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: {
        title: "",
        table: [],
        tableHeader: [],
    },
    data() {
        return {
            demands: [
                "Nom",
                "E-mail",
                "Téléphone",
                "project_type_id",
                "service_type_id",
                "subject_id",
                "pageNbr",
                "limitdate",
                "topic",
                "remark",
                "created_at",
            ],
            serviceTypes: "serviceTypes",
            projectTypes: "projectTypes",
            subjects: "subjects",
            input: [],
        };
    },
    methods: {
        ViewMore(id) {
            this.$inertia.get("/demande/" + id);
        },
    },
    created() {
        switch (this.tableHeader[1]) {
            case "Disciplines":
                this.table.forEach((element) => {
                    this.input.push(element.subject);
                });
                break;
            case "Services":
                this.table.forEach((element) => {
                    this.input.push(element.serviceType);
                });
                break;
            case "Projets":
                this.table.forEach((element) => {
                    this.input.push(element.projectType);
                });
                break;
            default:
                break;
        }
    },
};
</script>

<style></style>
