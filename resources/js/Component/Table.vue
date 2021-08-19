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
            "
        >
            {{ title }}
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
                                v-for="elment in table"
                                :key="elment"
                            >
                                Name
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 text-ms font-semibold border">
                                <input
                                    type="text"
                                    value="user.name"
                                    class="bg-transparent"
                                />
                            </td>
                            <td class="p-3 px-5 flex justify-end">
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
                                >
                                    Save</button
                                ><button
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
                                >
                                    Delete
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
        };
    },
};
</script>

<style></style>
