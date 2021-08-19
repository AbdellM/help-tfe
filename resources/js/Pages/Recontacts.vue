<template>
    <div>
        <NavBar />
        <Recontacts />
        <Footer :MainNumber="MainNumber" />
        <WhatsappBtn :MainNumber="MainNumber" />
    </div>
</template>

<style scoped></style>

<script>
import NavBar from "../Component/NavBar.vue";
import Recontacts from "../Component/Recontacts.vue";
import Footer from "../Component/Footer.vue";
import WhatsappBtn from "../Component/WhatsappBtn.vue";

export default {
    components: {
        NavBar,
        Recontacts,
        Footer,
        WhatsappBtn,
    },
    props: {
        subjects: [],
        serviceTypes: [],
        projectTypes: [],
    },
    data() {
        return {
            MainNumber: "32000000",
        };
    },
};
</script>
