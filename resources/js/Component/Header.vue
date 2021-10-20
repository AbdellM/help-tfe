<template>
    <div
        class="w-full bg-center bg-cover h-128"
        style="
            background-image: url(https://source.unsplash.com/1080x720/?study);
        "
    >
        <div
            class="
                flex
                items-center
                justify-center
                w-full
                h-full
                bg-gray-900 bg-opacity-50
            "
        >
            <div class="text-center">
                <h1
                    class="
                        text-2xl
                        font-semibold
                        text-white
                        uppercase
                        bolder
                        lg:text-3xl
                    "
                >
                    Nous vous soutenons à réaliser votre TFE dans toutes les
                    étapes.
                </h1>
                <button
                    onclick="location.href='/contacts'"
                    type="button"
                    class="
                        w-full
                        p-4
                        mt-4
                        text-sm
                        font-medium
                        text-white
                        uppercase
                        transition-colors
                        duration-200
                        transform
                        rounded-md
                        lg:w-auto
                        bg-blue-800
                        hover:bg-blue-500
                        focus:outline-none focus:bg-blue-500
                    "
                >
                    Contactez-Nous
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
