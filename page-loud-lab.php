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

	.alg_back_button_input {
		margin-top: -13rem;
	}

    .lab-event-row {
        border: 1px solid black;
		background-color: #588b8b;
    }

	.lab-button {
		margin: 0 !important; 
	}

	.underrubrik {
		
	}

.event-text {
	padding: 5px 10px 0 3vw !important;
	margin-bottom: 0 !important;
	background-color: white;
}

	p .event-text {
	margin-bottom: 0 !important;
	margin-block-end: 0;
}

	#lab-events-all {
		max-width: 750px;
	}

@media (min-width: 600px)
	margin-left: 7vw;
}
	.lab-event-green {
			padding: 10vw;
	}

	#section-podcasts {
    max-width: 1140px !important;
    margin: 0 1rem !important;
}

    /* responsiv infografik - byt mellem to billeder i mobile vs. desktop	 */

    @media (min-width: 651px) {
        .mobile-infografik {
            display: none;
        }

        .desktop-infografik {
            display: block;
        }
    }

    /* show mobile hide desktop */
    @media (max-width: 650px) {
        .mobile-infografik {
            display: block;
        }

        .desktop-infografik {
            display: none;
        }
    }

</style>

<template>
    <article class="podcasts-article">
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

<!-- <section id="section-podcasts">
        <div class="container"></div>
    </section> -->

<script>
    document.addEventListener("DOMContentLoaded", loadJSON);

    let podcasts;
    let podcast;

    //Her defineres konstanter til senere brug for fetch af json
    const url = "http://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/podcast?per_page=100";

    // Her hentes json ind, og sendes vider til funktionen showPodcasts
    async function loadJSON() {
        //Henter json og gemmer det som podcasts
        console.log("loadJSON");
        const JSONData = await fetch(url);
        podcasts = await JSONData.json();
        showPodcasts();
    }

    // I funktionen showPodcasts, sættes hver enkelt podcast ind i HTML
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
            //Her definerers konstanter til senere brug i kloningen af template
            const template = document.querySelector("template");
            const containerlab = document.querySelector("#section-podcasts .container");

            let clone = template.cloneNode(true).content; //Her klones template og udfyldes med data fra json

            clone.querySelector("img").src = podcast.billede.guid;
            clone.querySelector("img").alt = podcast.kort;
            clone.querySelector("h3").textContent = podcast.title.rendered;
            clone.querySelector("p").textContent = podcast.kort;
            clone.querySelector("article").addEventListener("click", () => {
                location.href = podcast.link;
            });
            containerlab.appendChild(clone); //Klonerne tilføres til DOM

        })
    }

</script>



<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// // If comments are open or there is at least one comment, load up the comment template.
	// if ( comments_open() || get_comments_number() ) {
	// 	comments_template();
	// }
endwhile; // End of the loop.

get_template_part( 'template-parts/footer/player' );
get_footer();

?>
