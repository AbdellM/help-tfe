<template>
    <div style="overflow-y: hidden">
        <NavBar />
        <Header />
        <About id="about" />
        <ParallaxScroll
            Url="https://source.unsplash.com/1080x721/?study"
            Height="250"
        />
        <Services id="service" />
        <ParallaxScroll
            Url="https://source.unsplash.com/1081x721/?study"
            Height="250"
        />
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
import ParallaxScroll from "../Component/ParallaxScroll.vue";
import Header from "../Component/Header.vue";
import About from "../Component/About.vue";
import Services from "../Component/Services.vue";
import Form from "../Component/Form.vue";
import Footer from "../Component/Footer.vue";
import WhatsappBtn from "../Component/WhatsappBtn.vue";

export default {
    components: {
        NavBar,
        ParallaxScroll,
        Header,
        About,
        Services,
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
            MainNumber: "321234567889",
        };
    },
};
</script>
