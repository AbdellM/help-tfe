<template>
    <div class="parallax" :style="imgBg"></div>
</template>

<script>
export default {
    props: {
        Url: "",
        Height: "",
    },
    computed: {
        imgBg: function () {
            return (
                "background-image: url(" +
                this.Url +
                ");min-height: " +
                this.Height +
                "px;"
            );
        },
    },
};
</script>

<style scoped>
.parallax {
    /* background-image: url("https://source.unsplash.com/1080x721/?study"); */

    /* Set a specific height */
    min-height: 200px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
