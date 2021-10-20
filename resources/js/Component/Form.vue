<template>
    <section class="text-gray-600 body-font relative bg-blue-50">
        color
        <div class="container px-5 pt-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1
                    class="
                        sm:text-3xl
                        text-2xl
                        font-medium
                        title-font
                        mb-4
                        text-gray-900
                    "
                >
                    Contactez-Nous
                </h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                    Utilisez notre formulaire pour préciser votre demande, il
                    n’y a plus de temps à perdre, contactez-moi.
                </p>
            </div>
            <div class="lg:w-2/3 md:w-2/3 mx-auto">
                <form class="flex flex-wrap -m-2" @submit.prevent="Submit">
                    <div class="p-2 w-1/3">
                        <div class="relative">
                            <label
                                for="name"
                                class="leading-7 text-sm text-gray-600"
                                >Nom</label
                            >
                            <input
                                required
                                type="text"
                                v-model="form.name"
                                name="name"
                                class="
                                    w-full
                                    bg-gray-100 bg-opacity-50
                                    rounded
                                    border border-gray-300
                                    focus:border-blue-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-blue-200
                                    text-base
                                    outline-none
                                    text-gray-700
                                    py-1
                                    px-3
                                    leading-8
                                    transition-colors
                                    duration-200
                                    ease-in-out
                                "
                            />
                        </div>
                    </div>
                    <div class="p-2 w-1/3">
                        <div class="relative">
                            <label
                                for="email"
                                class="leading-7 text-sm text-gray-600"
                                >Email</label
                            >
                            <input
                                required
                                type="email"
                                v-model="form.email"
                                name="email"
                                class="
                                    w-full
                                    bg-gray-100 bg-opacity-50
                                    rounded
                                    border border-gray-300
                                    focus:border-blue-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-blue-200
                                    text-base
                                    outline-none
                                    text-gray-700
                                    py-1
                                    px-3
                                    leading-8
                                    transition-colors
                                    duration-200
                                    ease-in-out
                                "
                            />
                        </div>
                    </div>
                    <div class="p-2 w-1/3">
                        <div class="relative">
                            <label
                                for="number"
                                class="leading-7 text-sm text-gray-600"
                                >Téléphone</label
                            >
                            <input
                                required
                                type="text"
                                v-model="form.phone"
                                name="number"
                                class="
                                    w-full
                                    bg-gray-100 bg-opacity-50
                                    rounded
                                    border border-gray-300
                                    focus:border-blue-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-blue-200
                                    text-base
                                    outline-none
                                    text-gray-700
                                    py-1
                                    px-3
                                    leading-8
                                    transition-colors
                                    duration-200
                                    ease-in-out
                                "
                            />
                        </div>
                    </div>
                    <div class="p-2 w-1/3">
                        <div class="relative">
                            <label
                                for="projectType"
                                class="leading-7 text-sm text-gray-600"
                                >Type de projet</label
                            >
                            <select
                                required
                                name="projectType"
                                v-model="form.project_type_id"
                                class="
                                    w-full
                                    bg-gray-100 bg-opacity-50
                                    rounded
                                    border border-gray-300
                                    focus:border-blue-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-blue-200
                                    text-base
                                    outline-none
                                    text-gray-700
                                    py-1
                                    px-3
                                    leading-8
                                    transition-colors
                                    duration-200
                                    ease-in-out
                                "
                            >
                                <option selected disabled>
                                    Choisissez une option
                                </option>
                                <option
                                    v-for="item in projectTypes"
                                    :key="item"
                                    :value="item.id"
                                >
                                    {{ item.projectType }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="p-2 w-1/3">
                        <div class="relative">
                            <label
                                for="serviceType"
                                class="leading-7 text-sm text-gray-600"
                                >Type de service</label
                            >
                            <select
                                name="serviceType"
                                v-model="form.service_type_id"
                                class="
                                    w-full
                                    bg-gray-100 bg-opacity-50
                                    focus:border-blue-500
                                    rounded
                                    border border-gray-300
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-blue-200
                                    text-base
                                    outline-none
                                    text-gray-700
                                    py-1
                                    px-3
                                    leading-8
                                    transition-colors
                                    duration-200
                                    ease-in-out
                                "
                            >
                                <option selected disabled>
                                    Choisissez une option
                                </option>
                                <option
                                    v-for="item in serviceTypes"
                                    :key="item"
                                    :value="item.id"
                                >
                                    {{ item.serviceType }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="p-2 w-1/3">
                        <div class="relative">
                            <label
                                for="subject"
                                class="leading-7 text-sm text-gray-600"
                                >Discipline</label
                            >
                            <select
                                name="subject"
                                v-model="form.subject_id"
                                class="
                                    w-full
                                    bg-gray-100 bg-opacity-50
                                    rounded
                                    border border-gray-300
                                    focus:border-blue-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-blue-200
                                    text-base
                                    outline-none
                                    text-gray-700
                                    py-1
                                    px-3
                                    leading-8
                                    transition-colors
                                    duration-200
                                    ease-in-out
                                "
                            >
                                <option selected disabled>
                                    Choisissez une option
                                </option>
                                <option
                                    v-for="item in subjects"
                                    :key="item"
                                    :value="item.id"
                                >
                                    {{ item.subject }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="p-2 w-1/3">
                        <div class="relative">
                            <label
                                for="pageNbr"
                                class="leading-7 text-sm text-gray-600"
                                >Nombre de pages</label
                            >
                            <input
                                required
                                type="text"
                                v-model="form.pageNbr"
                                name="pageNbr"
                                class="
                                    w-full
                                    bg-gray-100 bg-opacity-50
                                    rounded
                                    border border-gray-300
                                    focus:border-blue-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-blue-200
                                    text-base
                                    outline-none
                                    text-gray-700
                                    py-1
                                    px-3
                                    leading-8
                                    transition-colors
                                    duration-200
                                    ease-in-out
                                "
                            />
                        </div>
                    </div>
                    <div class="p-2 w-1/3">
                        <div class="relative">
                            <label
                                for="limitdate"
                                class="leading-7 text-sm text-gray-600"
                                >Date limite</label
                            >
                            <input
                                required
                                type="text"
                                v-model="form.limitdate"
                                name="limitdate"
                                class="
                                    w-full
                                    bg-gray-100 bg-opacity-50
                                    rounded
                                    border border-gray-300
                                    focus:border-blue-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-blue-200
                                    text-base
                                    outline-none
                                    text-gray-700
                                    py-1
                                    px-3
                                    leading-8
                                    transition-colors
                                    duration-200
                                    ease-in-out
                                "
                            />
                        </div>
                    </div>
                    <div class="p-2 w-1/3">
                        <div class="relative">
                            <label
                                for="topic"
                                class="leading-7 text-sm text-gray-600"
                                >Sujet</label
                            >
                            <input
                                required
                                type="text"
                                v-model="form.topic"
                                name="topic"
                                class="
                                    w-full
                                    bg-gray-100 bg-opacity-50
                                    rounded
                                    border border-gray-300
                                    focus:border-blue-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-blue-200
                                    text-base
                                    outline-none
                                    text-gray-700
                                    py-1
                                    px-3
                                    leading-8
                                    transition-colors
                                    duration-200
                                    ease-in-out
                                "
                            />
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label
                                for="remark"
                                class="leading-7 text-sm text-gray-600"
                                >Commentaires</label
                            >
                            <textarea
                                v-model="form.remark"
                                name="remark"
                                class="
                                    w-full
                                    bg-gray-100 bg-opacity-50
                                    rounded
                                    border border-gray-300
                                    focus:border-blue-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-blue-200
                                    h-32
                                    text-base
                                    outline-none
                                    text-gray-700
                                    py-1
                                    px-3
                                    resize-none
                                    leading-6
                                    transition-colors
                                    duration-200
                                    ease-in-out
                                "
                            ></textarea>
                        </div>
                    </div>
                    <div class="p-2 m-auto">
                        <label
                            for="file-upload"
                            class="leading-7 text-sm text-gray-600"
                            >Télécharger vos fichiers</label
                        >
                        <div
                            @click="open()"
                            class="
                                flex
                                cursor-pointer
                                mx-auto
                                text-white
                                bg-blue-800
                                border-0
                                py-2
                                px-8
                                focus:outline-none
                                hover:bg-bleu-900
                                rounded
                                text-lg
                            "
                        >
                            Télécharger
                        </div>
                    </div>
                    <div
                        :class="disable"
                        class="container items-center lg:px-20"
                    >
                        <div
                            class="
                                w-full
                                text-red-600
                                border
                                rounded-lg
                                shadow-xl
                            "
                        >
                            <div
                                class="
                                    flex
                                    items-center
                                    justify-between
                                    px-6
                                    py-4
                                    mx-auto
                                "
                            >
                                <div class="flex">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            mr-4
                                            icon
                                            icon-tabler
                                            icon-tabler-alert-triangle
                                        "
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            stroke="none"
                                            d="M0 0h24v24H0z"
                                            fill="none"
                                        ></path>
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <line
                                            x1="12"
                                            y1="8"
                                            x2="12.01"
                                            y2="8"
                                        ></line>
                                        <polyline
                                            points="11 12 12 12 12 16 13 16"
                                        ></polyline>
                                    </svg>
                                    <p
                                        class="
                                            text-sm
                                            font-semibold
                                            tracking-wide
                                            uppercase
                                        "
                                    >
                                        <strong>Erreur:</strong> Merci de
                                        remplir tous les champs.
                                    </p>
                                </div>
                                <div
                                    class="
                                        p-1
                                        transition-colors
                                        duration-200
                                        transform
                                        rounded-md
                                        hover:bg-opacity-25
                                        hover:bg-blueGray-600
                                        focus:outline-none
                                    "
                                    aria-label="Close"
                                    aria-hidden="true"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            icon
                                            icon-tabler
                                            icon-tabler-circle-x
                                        "
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            stroke="none"
                                            d="M0 0h24v24H0z"
                                            fill="none"
                                        ></path>
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <path d="M10 10l4 4m0 -4l-4 4"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 w-full mb-5">
                        <button
                            type="submit"
                            class="
                                flex
                                mx-auto
                                text-white
                                bg-blue-800
                                border-0
                                py-2
                                px-8
                                focus:outline-none
                                hover:bg-bleu-900
                                rounded
                                text-lg
                            "
                        >
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
import * as filestack from "filestack-js";

export default {
    props: {
        subjects: [],
        serviceTypes: [],
        projectTypes: [],
        MainNumber: "",
    },
    data() {
        return {
            form: {
                name: "",
                email: "",
                phone: "",
                project_type_id: "Choisissez une option",
                service_type_id: "Choisissez une option",
                subject_id: "Choisissez une option",
                pageNbr: "",
                limitdate: "",
                topic: "",
                remark: "",
                files: [],
            },
            disable: "disable",
        };
    },
    methods: {
        open() {
            const client = filestack.init("AmMwmviSQICKgE0KTv4mwz");
            const options = {
                onUploadDone: (file) => {
                    file.filesUploaded.forEach((element) => {
                        this.form.files.push(element.url);
                    });
                },
                fromSources: ["local_file_system", "url", "googledrive"],
                maxFiles: 5,
            };
            client.picker(options).open();
        },
        Submit() {
            if (
                this.form.project_type_id == "Choisissez une option" ||
                this.form.service_type_id == "Choisissez une option" ||
                this.form.subject_id == "Choisissez une option"
            ) {
                this.disable = "enable";
            } else {
                this.$inertia.post("/form", this.form);
            }
        },
    },
};
</script>

<style>
.disable {
    opacity: 0;
}
.enable {
    opacity: 1;
}
</style>
