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

    .single-indhold-top i p {
        display: inline-block;
        margin: 0.7rem 0;
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
        padding: 0.7rem 1.5rem !important;
    }

    .podcasts-media .fab,
    .podcasts-media .fas {
        font-size: 2.5rem !important;
        color: white !important;
        margin: 0 !important;
    }

    .podcasts-media img {
        height: 40px;
        width: 40px;
    }

    /*--------pod-backgrounds--------*/

    .bg-spotify {
        background: #1DB954;
    }

    .bg-apple {
        background: #D56DFB;
    }

    /*--------episode-formatting--------*/

    .play-button {
        display: none;
    }

    .play-mobile {
        font-size: 2.3rem !important;
    }

    @media (min-width:650px) {
        .play-button {
            display: block;
        }

        .play-mobile {
            display: none;
        }
    }

</style>

<section>
    <a class="custom-button bg-peach" onclick="window.history.back()">Back</a>
    <main class="episode_main">
        <section id="section-single" class="section-padding">
            <article class="single_article">
                <img class="single_billede" src="" alt="">
                <div class="single_indhold">
                    <div class="single-indhold-top">
                        <h3></h3>
                        <p class="text-desc"></p>
                        <i>
                            <p class="text-dato"></p>
                            <p>|</p>
                            <p class="text-time"></p>
                        </i>
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
            <h2>Andre episoder</h2>
            <div class="container"></div>
        </section>
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
                        <i class="far fa-play-circle play-mobile"></i>
                    </div>
                    <div class="play-button">
                        <i class="far fa-play-circle"></i>
                        <p>Hør podcast</p>
                    </div>
                </div>
            </article>
        </template>
    </main>
</section>

<script>
    let episode;
    let aktuelepisode = <?php echo get_the_ID() ?>;

    const url = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/episode/" + aktuelepisode;
    const epiUrl = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/episode?per_page=100";
    const container = document.querySelector("#section-episodes .container");

    document.addEventListener("DOMContentLoaded", getJson);

    async function getJson() {
        const data = await fetch(url);
        episode = await data.json();

        const data2 = await fetch(epiUrl);
        andreEpisoder = await data2.json();
        console.log("episoder: ", andreEpisoder);

        visEpisode();
        visAndreEpisoder();
    }

    function visEpisode() {
        document.querySelector(".single_billede").src = episode.billede.guid;
        document.querySelector(".single-indhold-top h3").textContent = episode.title.rendered;
        document.querySelector(".text-desc").textContent = episode.lang_beskrivelse;
        document.querySelector(".text-dato").textContent = episode.dato;
        document.querySelector(".text-time").textContent = episode.varighed;
    };

    function visAndreEpisoder() {
        console.log("function visAndreEpisoder");
        let template = document.querySelector("template");
        andreEpisoder.forEach(andenEpisode => {
            console.log("loop kører id :", aktuelepisode);
            //Tjek om de hører til samme podcast og udelader samme episoder med samme ID, i.e. sig selv
            if (andenEpisode.belongs_to_podcast == episode.belongs_to_podcast && andenEpisode.id !== aktuelepisode) {
                console.log("hej");
                let klon = template.cloneNode(true).content;

                klon.querySelector("img").src = andenEpisode.billede.guid;
                klon.querySelector("h4").textContent = andenEpisode.title.rendered;
                klon.querySelector(".text-desc").textContent = andenEpisode.kort_beskrivelse;
                klon.querySelector(".text-dato").textContent = andenEpisode.dato;
                klon.querySelector(".text-time").textContent = andenEpisode.varighed;
                klon.querySelector("article").addEventListener("click", () => {
                    location.href = andenEpisode.link;
                });

                container.appendChild(klon);
            }
        });
    }

</script>





<?php

get_template_part( 'template-parts/footer/player' );
get_footer();
