<template>
    <section
        class="text-gray-600 body-font relative"
        style="background-color: #e4d4c87a"
    >
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
                                    focus:border-indigo-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-indigo-200
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
                                    focus:border-indigo-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-indigo-200
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
                                    focus:border-indigo-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-indigo-200
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
                                    focus:border-indigo-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-indigo-200
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
                                    rounded
                                    border border-gray-300
                                    focus:border-indigo-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-indigo-200
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
                                    focus:border-indigo-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-indigo-200
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
                                    focus:border-indigo-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-indigo-200
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
                                    focus:border-indigo-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-indigo-200
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
                                    focus:border-indigo-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-indigo-200
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
                                    focus:border-indigo-500
                                    focus:bg-white
                                    focus:ring-2
                                    focus:ring-indigo-200
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
                    <div class="p-2 w-full">
                        <label
                            for="file-upload"
                            class="leading-7 text-sm text-gray-600"
                            >Télécharger vos fichiers</label
                        >
                        <input
                            multiple
                            @change="onFileChange"
                            id="file-upload"
                            type="file"
                            name="file"
                            enctype="multipart/form-data"
                            accept="image/*,.pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                            class="
                                w-full
                                bg-gray-100 bg-opacity-50
                                rounded
                                border border-gray-300
                                focus:border-indigo-500
                                focus:bg-white
                                focus:ring-2
                                focus:ring-indigo-200
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

                    <div class="p-2 w-full">
                        <button
                            type="submit"
                            class="
                                flex
                                mx-auto
                                text-white
                                bg-indigo-500
                                border-0
                                py-2
                                px-8
                                focus:outline-none
                                hover:bg-yellow-200
                                rounded
                                text-lg
                            "
                            style="background-color: #523a28"
                        >
                            Envoyer
                        </button>
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

                    <div
                        class="
                            p-2
                            w-full
                            pt-8
                            mt-8
                            border-t border-gray-200
                            text-center
                        "
                    >
                        <a
                            class="text-yellow-900 underline"
                            :href="'https://wa.me/' + MainNumber"
                            >+{{ MainNumber }}</a
                        >
                        <p class="leading-normal my-5">
                            49 Smith St. <br />Saint Cloud, MN 56301
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
// import { axios } from "../../../node_modules/axios/index";
import axios from "axios";
require("../saveFIleDrive");
// import * as Drive from "../saveFIleDrive.js";

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
                files: {},
            },
            disable: "disable",
        };
    },
    methods: {
        Submit() {
            if (
                this.form.project_type_id == "Choisissez une option" ||
                this.form.service_type_id == "Choisissez une option" ||
                this.form.subject_id == "Choisissez une option"
            ) {
                this.disable = "enable";
            } else {
                // this.$inertia.post("/form", this.form);
                // let formData = new URLSearchParams();
                // formData.append("form", this.form);
                axios.post("/form", this.getData()).then((res) => {
                    console.log(res.data);
                    res.data.forEach((element) => {
                        Drive.uploadFile(element);
                    });
                });
            }
        },

        onFileChange(e) {
            this.form.files = e.target.files || e.dataTransfer.files;

            // console.log(this.form.files);
            // if (!this.form.files.length) return;
            // this.createImage(this.form.files[0]);
        },
        // createImage(file) {
        //     var reader = new FileReader();
        //     var vm = this;

        //     reader.onload = (e) => {
        //         vm.image = e.target.result;
        //     };
        //     reader.readAsDataURL(file);
        // },
        getData() {
            let formData = new FormData();
            formData.append("name", this.form.name);
            formData.append("email", this.form.email);
            formData.append("phone", this.form.phone);
            formData.append("project_type_id", this.form.project_type_id);
            formData.append("service_type_id", this.form.service_type_id);
            formData.append("subject_id", this.form.subject_id);
            formData.append("pageNbr", this.form.pageNbr);
            formData.append("limitdate", this.form.limitdate);
            formData.append("topic", this.form.topic);
            formData.append("remark", this.form.remark);

            for (let index = 0; index < this.form.files.length; index++) {
                formData.append(`files[${index}]`, this.form.files[index]);
            }

            return formData;
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
