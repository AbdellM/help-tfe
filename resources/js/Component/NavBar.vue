<template>
    <header class="text-white body-font">
        <div
            class="
                container
                flex flex-wrap
                p-2
                flex-col
                md:flex-row
                items-center
                fixed
                top-0
                right-0
                left-0
                w-full
                bg-white
                z-40
                bg-blue-800
            "
        >
            <a
                class="
                    flex
                    title-font
                    font-medium
                    items-center
                    text-white
                    mb-4
                    md:mb-0
                "
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    class="w-10 h-10 text-white p-2 rounded-full bg-blue-900"
                    viewBox="0 0 24 24"
                >
                    <path
                        d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"
                    ></path>
                </svg>

                <span class="ml-3 font-semibold text-xl">TFEE HELP</span>
            </a>
            <nav
                class="
                    md:ml-auto
                    flex flex-wrap
                    items-center
                    text-base
                    justify-center
                "
            >
                <a class="mr-5 font-semibold hover:text-gray-200" href="/"
                    >Accueil</a
                >
                <a
                    class="mr-5 font-semibold hover:text-gray-200"
                    href="/#about"
                >
                    À propos
                </a>
                <a
                    class="mr-5 font-semibold hover:text-gray-200"
                    href="/#service"
                >
                    Nos Service
                </a>
                <a
                    class="mr-5 font-semibold hover:text-gray-200"
                    href="/contacts"
                >
                    Contacts
                </a>
            </nav>
        </div>
    </header>
</template>

<script>
export default {};
</script>

<style></style>
