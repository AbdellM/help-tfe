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
            <button
                type="button"
                class="
                    mr-3
                    text-sm
                    bg-green-500
                    hover:bg-green-700
                    text-white
                    py-1
                    px-2
                    rounded
                    focus:outline-none focus:shadow-outline
                "
                @click="Add()"
            >
                Ajouter
            </button>
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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr
                            v-for="(object, indexRow) in table"
                            :key="object"
                            class="text-gray-700"
                        >
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <label>
                                    {{ object.id }}
                                </label>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <input
                                    v-model="input[indexRow]"
                                    type="text"
                                    class="bg-transparent rounded"
                                />
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
                                    @click="
                                        Update(
                                            indexRow,
                                            object.id,
                                            this.tableHeader[1]
                                        )
                                    "
                                >
                                    Enregistrer
                                </button>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <button
                                    type="button"
                                    class="
                                        text-sm
                                        bg-red-500
                                        hover:bg-red-700
                                        text-white
                                        py-1
                                        px-2
                                        rounded
                                        focus:outline-none focus:shadow-outline
                                    "
                                    @click="
                                        Delete(object.id, this.tableHeader[1])
                                    "
                                >
                                    Supprimer
                                </button>
                            </td>
                        </tr>
                        <tr v-if="enable" class="text-gray-700">
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <label></label>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <input
                                    v-model="toAdd"
                                    type="text"
                                    class="bg-transparent rounded"
                                />
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <button
                                    type="button"
                                    class="
                                        mr-3
                                        text-sm
                                        bg-green-500
                                        hover:bg-green-700
                                        text-white
                                        py-1
                                        px-2
                                        rounded
                                        focus:outline-none focus:shadow-outline
                                    "
                                    @click="Save(this.tableHeader[1])"
                                >
                                    Enregistrer
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
            toAdd: "",
            enable: false,
        };
    },
    methods: {
        Delete(id, tableHeader) {
            switch (tableHeader) {
                case "Disciplines":
                    this.$inertia.delete("/subject/" + id);
                    break;
                case "Services":
                    this.$inertia.delete("/service/" + id);
                    break;
                case "Projets":
                    this.$inertia.delete("/project/" + id);
                    break;
                default:
                    break;
            }
            alert("Element Supprimer");
            location.reload();
        },
        Update(indexRow, id, tableHeader) {
            switch (tableHeader) {
                case "Disciplines":
                    this.$inertia.put("/subject/" + id, {
                        subject: this.input[indexRow],
                    });
                    break;
                case "Services":
                    this.$inertia.put("/service/" + id, {
                        serviceType: this.input[indexRow],
                    });
                    break;
                case "Projets":
                    this.$inertia.put("/project/" + id, {
                        projectType: this.input[indexRow],
                    });
                    break;
                default:
                    break;
            }
            alert("Element Enregistrer");
            location.reload();
        },
        Add() {
            this.enable = true;
        },
        Save(tableHeader) {
            switch (tableHeader) {
                case "Disciplines":
                    this.$inertia.post("/subject/", {
                        subject: this.toAdd,
                    });
                    break;
                case "Services":
                    this.$inertia.post("/service/", {
                        serviceType: this.toAdd,
                    });
                    break;
                case "Projets":
                    this.$inertia.post("/project/", {
                        projectType: this.toAdd,
                    });
                    break;
                default:
                    break;
            }
            alert("Element Enregistrer");
            location.reload();
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
