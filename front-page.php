<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();
?>
<style>
    #landing {
        width: 100%;
        height: 100vh;
    }

</style>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div id="landing"></div>
        <div id="section-feed">

        </div>
        <div id="section-podcasts">
            <h2>Udvalgte podcasts</h2>
            <div class="container"></div>
        </div>
        <div id="section-infographic"></div>
        <div id="section-partners"></div>

    </main>
    <!-- #main -->
    <template>
        <article>
            <div class="top">
                <img class="image">
                <div class="text">
                    <h2></h2>
                    <p></p>
                </div>
            </div>
            <div class="bottom">
                <div class="play-button">
                    <i class="far fa-play-circle"></i>
                    <p>Hør seneste podcast</p>
                </div>
            </div>
        </article>
    </template>
    <script>
        document.addEventListener("DOMContentLoaded", loadJSON);

        let podcasts;
        let podcast;

        //Her defineres konstanter til senere brug for fetch af json
        const url = "http://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/podcast?per_page=100";

        // Her hentes json ind fra restdb, og sendes vider til funktionen showPodcasts
        async function loadJSON() {
            //Henter json og gemmer det som art
            const JSONData = await fetch(url);
            podcasts = await JSONData.json();
            showPodcasts();
        }

        // I funktionen showPodcasts, sættes hvert enkelt kunstværk ind i HTML
        function showPodcasts() {
            console.log("showingPodcasts");
            console.log(podcasts);
            const rng1 = podcasts[Math.floor(Math.random() * podcasts.length)];
            const rng2 = podcasts[Math.floor(Math.random() * podcasts.length)];
            const rng3 = podcasts[Math.floor(Math.random() * podcasts.length)];
            const rngCasts = [rng1, rng2, rng3];
            console.log(rngCasts);

            //Her definerers konstanter til senere brug i kloningen af template
            const template = document.querySelector("template");
            const container = document.querySelector(".container");

            /*  container.textContent = " ";*/ // HTML containeren tømmes for eksisterende indhold, og kan nu få tilført nyt indhold.

            rngCasts.forEach(podcast => {
                console.log("looping");

                let clone = template.cloneNode(true).content; //Her klones template og udfyldes  med data fra json

                clone.querySelector("img").src = podcast.billede.guid;
                clone.querySelector("img").alt = podcast.kort;
                clone.querySelector("h2").textContent = podcast.title.rendered;
                clone.querySelector("p").textContent = podcast.kort;
                clone.querySelector("article").addEventListener("click", () => {
                    location.href = podcast.link;
                });
                container.appendChild(clone); //Klonerne tilføres til DOM

            })
        }

    </script>
</div><!-- #primary -->

<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_template_part( 'template-parts/footer/player' );
get_footer();
?>
