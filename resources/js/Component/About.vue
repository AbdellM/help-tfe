<template>
    <section class="text-blueGray-700" style="background-color: #e4d4c87a">
        <div
            class="
                container
                flex flex-col
                items-start
                px-5
                py-16
                mx-auto
                lg:items-center
                md:flex-row
                lg:px-28
            "
        >
            <div class="w-full mb-10 lg:w-5/6 lg:max-w-lg md:w-1/2">
                <img
                    class="object-cover object-center rounded"
                    alt="hero"
                    loading="lazy"
                    src="https://dummyimage.com/720x600/F3F4F7/8693ac"
                />
            </div>
            <div
                class="
                    flex flex-col
                    items-start
                    text-left
                    lg:flex-grow
                    md:w-1/2
                    lg:pl-24
                    md:pl-16
                "
            >
                <h2
                    class="
                        mb-8
                        text-xs
                        font-semibold
                        tracking-widest
                        text-black
                        uppercase
                        title-font
                    "
                    style="color: #523a28"
                >
                    À propos de nous
                </h2>
                <h1
                    class="
                        mb-8
                        text-2xl
                        font-bold
                        tracking-tighter
                        text-left text-black
                        title-font
                    "
                    style="color: #a47551"
                >
                    {{ Title }}
                </h1>
                <p
                    class="
                        mb-8
                        text-base
                        leading-relaxed
                        text-left text-blueGray-700
                    "
                >
                    {{ Text }}
                </p>
                <p
                    v-for="element in Dashes"
                    :key="element"
                    class="flex mb-2 text-blueGray-600"
                >
                    <span
                        class="
                            inline-flex
                            items-center
                            justify-center
                            flex-shrink-0
                            w-6
                            h-6
                            mr-2
                            rounded-full
                        "
                    >
                        <svg
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                        >
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                fill="#523a28"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"
                            ></path></svg></span
                    >{{ element }}
                </p>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            Title: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            Text: "Je suis le plus grand spécialiste des travaux de fin d’études et des mémoires universitaires urgents en Belgique. J’en fais depuis huit ans. Tout au long de ces années, j’ai développé des trucs et astuces pour chaque phase et chaque étape de la réalisation de mes travaux, ce qui fait de moi un expert en mémoires. Ma technique est à ce jour devenue sans pareille. En tant qu’expert en mémoires, je suis d’ailleurs déjà passé une dizaine de fois dans les médias. Je n’ai en tout cas comme concurrents que des amateurs et des arnaqueurs. Les personnes qui font appel à mes services sont des étudiants hautement méritants qui pendant longtemps ont fait le sacrifice de leur vie sociale, qui ont réussi leurs examens, leurs stages, et à qui on refuse le diplôme pour un travail pour lequel ils reçoivent peu ou pas de consignes et qu’ils ne comprennent donc pas. Les superviseurs de mémoires sont, quant à eux, juste incroyablement incompétents. Au mieux ils disent à l’élève que leur écrit est bon ou qu’il n’est pas bon, au pire ils donnent des consignes incompréhensibles, lorsqu’ils ne font pas partie des abonnés absents. Il est en tout cas inadmissible pour moi qu’un tel travail puisse faire obstacle à l’obtention d’un diplôme bien mérité. C’est pourquoi j’ai décidé de créer Aide TFE.",
            Dashes: [
                "Super Hyper Mega Feature",
                "Thumbs upp baby",
                "This feature is useless",
            ],
        };
    },
};
</script>

<style></style>
