<template>
    <footer class="text-white body-font bg-blue-800" style="margin-top: 8px">
        <div
            class="
                container
                px-5
                py-8
                mx-auto
                flex
                items-center
                sm:flex-row
                flex-col
            "
        >
            <a
                class="
                    flex
                    title-font
                    font-medium
                    items-center
                    md:justify-start
                    justify-center
                    text-white
                "
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    class="w-10 h-10 text-white bg-blue-900 p-2 rounded-full"
                    viewBox="0 0 24 24"
                >
                    <path
                        d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"
                    ></path>
                </svg>
                <span class="ml-3 text-xl">TFE HELP</span>
            </a>
            <p
                class="
                    text-sm text-white
                    sm:ml-4
                    sm:pl-4
                    sm:border-l-2
                    sm:border-gray-200
                    sm:py-2
                    sm:mt-0
                    mt-4
                "
            >
                © {{ year }} TFE HELP —
                <a
                    :href="'https://wa.me/' + MainNumber"
                    class="text-white ml-1 underline"
                    rel="noopener noreferrer"
                    target="_blank"
                    >+{{ MainNumber }}</a
                >
            </p>
        </div>
    </footer>
</template>

<script>
export default {
    props: {
        MainNumber: "",
    },
    data() {
        return {
            year: "",
        };
    },
    beforeMount() {
        this.year = new Date().getFullYear();
    },
};
</script>

<style></style>
