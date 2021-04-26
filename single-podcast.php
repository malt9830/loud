<?php
/**
 * The template for displaying all single posts
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>

<style>
    .section-padding {
        padding: 2rem 0;
    }

    /*--------episodes--------*/
    section h2 {
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    .text-flex {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        grid-gap: 0.5rem;
        margin: 0.5rem 1rem;
    }

    .inline-text {
        display: inline-block;
    }

    .play-button {
        text-align: center;
    }

    .single_indhold {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    @media (min-width:650px) {
        .single_article {
            display: grid;
            grid-template-columns: 1fr 2fr;
            grid-gap: 1rem;
        }
    }

    .podcasts-media {
        display: flex;
        flex-wrap: wrap;
        place-items: center;
    }

    .podcasts-media .custom-button {
        display: inline-block;
        cursor: pointer;
        margin: 1rem !important;
    }

    .podcasts-media .fab {
        margin: 0 !important;
    }

    .fas {
        font-size: 3.5rem !important;
        color: white !important;
        margin: 0 !important;
    }

    .podcasts-media img {
        height: 56px;
        width: 56px;
    }

    /*--------pod-backgrounds--------*/

    .bg-spotify {
        background: #1DB954;
    }

    .bg-apple {
        background: #D56DFB;
    }

</style>

<section>
    <main class="single_main">
        <section id="section-single" class="section-padding">
            <article class="single_article">
                <img class="single_billede" src="" alt="">
                <div class="single_indhold">
                    <div class="single_indhold-top">
                        <h3></h3>
                        <p class="lang_info"></p>
                    </div>
                    <div class="single-indhold-bottom">
                        <h4>Lyt her</h4>
                        <div class="podcasts-media">
                            <div class="custom-button bg-red">
                                <img src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/cropped-radio-loud_2f112a81-1-1.png" alt="loud logo">
                            </div>
                            <div class="custom-button bg-spotify">
                                <i class="fab fa-spotify"></i>
                            </div>
                            <div class="custom-button bg-apple">
                                <i class="fas fa-podcast"></i>
                            </div>
                            <div class="custom-button bg-yellow">
                                <img src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/icon-google-podcasts-01.png" alt="google podcast logo">
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section id="section-episodes" class="section-padding">
            <h2>Alle episoder</h2>
            <div class="container"></div>
            <template>
                <article class="podcasts-article">
                    <div class="top">
                        <img class="image">
                        <div class="text">
                            <h4></h4>
                            <p class="text-desc"></p>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="text-flex">
                            <p class="text-dato inline-text"></p>
                            <p class="text-time inline-text"></p>
                        </div>
                        <div class="play-button">
                            <i class="far fa-play-circle"></i>
                            <p>Hør podcast</p>
                        </div>

                    </div>
                </article>
            </template>
        </section>
    </main>

</section>

<script>
    let podcast;
    let episoder;
    let aktuelpodcast = <?php echo get_the_ID() ?>;

    const url = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/podcast/" + aktuelpodcast;
    const epiUrl = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/episode?per_page=100";
    const container = document.querySelector("#section-episodes .container");

    document.addEventListener("DOMContentLoaded", getJson)

    async function getJson() {
        const data = await fetch(url);
        podcast = await data.json();

        const data2 = await fetch(epiUrl);
        episoder = await data2.json();
        console.log("episoder: ", episoder);

        visPodcast();
        visEpisoder();
    }


    function visPodcast() {
        console.log(podcast.title.rendered);
        document.querySelector(".single_billede").src = podcast.billede.guid;
        document.querySelector("div h3").innerHTML = podcast.title.rendered;
        document.querySelector("div .lang_info").innerHTML = podcast.lang;
    };

    function visEpisoder() {
        console.log("function hvisEpisoder");
        let template = document.querySelector("template");
        episoder.forEach(episode => {
            console.log("loop kører id :", aktuelpodcast);
            if (episode.belongs_to_podcast == aktuelpodcast) {
                console.log("hej");
                let klon = template.cloneNode(true).content;

                klon.querySelector("img").src = episode.billede.guid;
                klon.querySelector("h4").textContent = episode.title.rendered;
                klon.querySelector(".text-desc").textContent = episode.kort_beskrivelse;
                klon.querySelector(".text-dato").textContent = episode.dato;
                klon.querySelector(".text-time").textContent = episode.varighed;
                klon.querySelector("article").addEventListener("click", () => {
                    location.href = episode.link;
                });

                container.appendChild(klon);
            }
        });
    }

</script>



<?php

get_template_part( 'template-parts/footer/player' );
get_footer();
