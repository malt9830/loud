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
    section {
        max-width: 1200px;
        margin: 1rem;
    }

    @media (min-width: 1200px) {
        section {
            margin: 0 auto;
        }
    }

    #primary,
    #main {
        margin-top: 0;
        padding-top: 0;
    }

    /*------------landing------------*/

    #landing {
        width: 100%;
        height: 100vh;
    }

    #landing-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    #landing-text-top h1 {
        margin-bottom: 3rem;
    }

    #landing-text-bottom a {
        display: inline-block;
        background: #DB0038;
        color: white;
        padding: 1rem 2rem;
        border-radius: 1rem;
        font-family: Montserrat;
        font-weight: 700;
        box-shadow: 4px 4px 0 #000;
        text-decoration: none;
        margin: 1rem 1.5rem;
        transition-timing-function: cubic-bezier(.4, 0, .2, 1);
        transition-duration: .15s;
    }

    #landing-text-bottom a:hover {
        box-shadow: 0 0 0;
        transform: translate(1px, 1px);
    }

    #landing-text-bottom a:last-child {
        background: #F19C7A;
    }

    /*------------feed------------*/

    #section-feed .container {
        display: grid;
        grid-gap: 1rem;
    }

    @media (min-width: 650px) {
        #section-feed .container {
            grid-template-columns: repeat(2, 1fr),
        }
    }

    @media (min-width: 950px) {
        #section-feed .container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /*------------podcasts------------*/

    #section-podcasts h2 {
        margin-bottom: 2.5rem;
    }

    #section-podcasts .container {
        display: grid;
        grid-gap: 1rem;
    }

    @media (min-width:650px) {
        #section-podcasts .container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width:950px) {
        #section-podcasts .container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    article {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    article .top .text h3 {
        margin-top: 1rem;
    }

    article .top .text p {
        line-height: 1.7rem;
        margin-bottom: 1.3rem;
    }

    article .play-button p {
        display: inline-block;
    }

</style>
<div>
    <div id="landing">
        <div id="landing-text">
            <div id="landing-text-top">
                <h1>LOUD</h1>
            </div>
            <div id="landing-text-bottom">
                <a>LYT LIVE</a>
                <a href="/kea/loud/wordpress/podcasts/">HØR PODCASTS</a>
            </div>
        </div>
    </div>
    <section id="section-feed">
        <h2>Louds feed</h2>
        <div class="container"></div>
    </section>
    <section id="section-podcasts">
        <h2>Udvalgte podcasts</h2>
        <div class="container"></div>
    </section>
    <section id="section-infographic"></section>
    <section id="section-partners"></section>
    <template>
        <article>
            <div class="top">
                <img class="image">
                <div class="text">
                    <h3></h3>
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
            const container = document.querySelector("#section-podcasts .container");

            /*  container.textContent = " ";*/ // HTML containeren tømmes for eksisterende indhold, og kan nu få tilført nyt indhold.

            rngCasts.forEach(podcast => {
                console.log("looping");

                let clone = template.cloneNode(true).content; //Her klones template og udfyldes  med data fra json

                clone.querySelector("img").src = podcast.billede.guid;
                clone.querySelector("img").alt = podcast.kort;
                clone.querySelector("h3").textContent = podcast.title.rendered;
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
