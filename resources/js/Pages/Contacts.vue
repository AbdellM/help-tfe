<template>
    <div>
        <NavBar />
        <Form
            :subjects="subjects"
            :serviceTypes="serviceTypes"
            :projectTypes="projectTypes"
            :MainNumber="MainNumber"
        />
        <Footer :MainNumber="MainNumber" />
        <WhatsappBtn :MainNumber="MainNumber" />
    </div>
</template>

<style scoped></style>

<script>
import NavBar from "../Component/NavBar.vue";
import Form from "../Component/Form.vue";
import Footer from "../Component/Footer.vue";
import WhatsappBtn from "../Component/WhatsappBtn.vue";

export default {
    components: {
        NavBar,
        Form,
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
