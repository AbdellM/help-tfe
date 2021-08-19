<template>
    <section
        class="text-gray-600 body-font relative"
        style="background-color: #e4d4c87a"
    >
        <div
            class="
                px-4
                py-16
                mx-auto
                sm:max-w-xl
                md:max-w-full
                lg:max-w-screen-xl
                md:px-24
                lg:px-8 lg:py-20
            "
        >
            <div class="flex flex-col mb-6 lg:flex-row md:mb-10">
                <div class="lg:w-1/2">
                    <h2
                        class="
                            max-w-md
                            mb-6
                            font-sans
                            text-3xl
                            font-bold
                            tracking-tight
                            text-gray-900
                            sm:text-4xl sm:leading-none
                            xl:max-w-lg
                        "
                        style="color: #523a28"
                    >
                        Nos services
                    </h2>
                </div>
                <div class="lg:w-1/2">
                    <p
                        class="text-base text-gray-700 md:text-lg"
                        style="color: #a47551"
                    >
                        Nous faisons toutes sortes de travaux universitaires
                        avec un contenu unique.
                    </p>
                </div>
            </div>
            <div class="grid gap-8 row-gap-10 sm:grid-cols-2 lg:grid-cols-3">
                <div v-for="element in Content" :key="element">
                    <div
                        class="
                            flex
                            items-center
                            justify-center
                            w-16
                            h-16
                            mb-4
                            rounded-full
                            bg-indigo-50
                        "
                    >
                        <svg
                            class="w-7 h-7 text-deep-purple-accent-400"
                            stroke-linecap="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <circle
                                cx="11"
                                cy="13"
                                fill="none"
                                r="9"
                                stroke="currentColor"
                            ></circle>
                            <path
                                d=" M21.955,18.005c1.089,2.145,1.378,3.816,0.622,4.572C20.92,24.234,14.799,20.799,9,15S-0.234,3.08,1.423,1.423 C2.18,0.666,3.853,0.956,6,2.047"
                                stroke="currentColor"
                                fill="none"
                            ></path>
                        </svg>
                    </div>
                    <h6
                        class="mb-2 font-semibold leading-5"
                        style="color: #523a28"
                    >
                        {{ element.Service }}
                    </h6>
                    <ul class="mb-4 -ml-1 space-y-2">
                        <li
                            v-for="SubElement in element.SubService"
                            :key="SubElement"
                            class="flex items-start"
                        >
                            <span class="mr-1">
                                <svg
                                    class="
                                        w-5
                                        h-5
                                        mt-px
                                        text-deep-purple-accent-400
                                    "
                                    stroke="currentColor"
                                    viewBox="0 0 52 52"
                                >
                                    <polygon
                                        stroke-width="4"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        fill="none"
                                        color="#523a28"
                                        points="29 13 14 29 25 29 23 39 38 23 27 23"
                                    ></polygon>
                                </svg>
                            </span>
                            {{ SubElement }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            Content: [
                {
                    Service: "Mémoire",
                    SubService: [
                        "Mémoire universitaire",
                        "Mémoire de fin d’études",
                        "Mémoire de recherche",
                        "Mémoire de Master, M1, M2",
                        "Mémoire de Licence",
                        "TFE",
                    ],
                },
                {
                    Service: "Rapport de stage",
                    SubService: [
                        "Rapport de stage FLE",
                        "Rapport de stage MEEF",
                        "Rapport de stage DCG",
                        "Rapport de stage de droit",
                        "Rapport de stage BTS",
                    ],
                },
                {
                    Service: "Correction",
                    SubService: [
                        "Relecture et Correction",
                        "Réécriture",
                        "Vérification de la structure",
                        "Vérification des sources",
                        "Mise en page",
                        "Détection anti-plagiat",
                    ],
                },

                {
                    Service: "CV, Lettre de motivation",
                    SubService: [
                        "CV personnalisé et sur-mesure",
                        "CV pour un stage",
                        "CV en anglais",
                        "CV en allemand",
                        "CV chronologique",
                        "CV par compétences",
                        "CV de débutant",
                    ],
                },
                {
                    Service: "Thèse",
                    SubService: [
                        "Thèse scientifique",
                        "Thèse de doctorat",
                        "Thèse de droit",
                        "Thèse de médecine",
                        "Thèse de philosophie",
                        "Thèse par VAE",
                    ],
                },
                {
                    Service: "Autre document",
                    SubService: [
                        "Dissertation",
                        "Analyse",
                        "Revus de littérature",
                        "Stata",
                        "Devoir",
                        "Etude de cas",
                        "Synthèse",
                        "Examen",
                    ],
                },
            ],
        };
    },
};
</script>

<style></style>
