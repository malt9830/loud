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

.has-small-font-size {
	font-size: 0.8rem;
	font-family: Montserrat;
	padding-left: 4vw;
}

#lab-story {
padding-left: 8vw;
padding-right: 8vw;
}

.post-38 {
	margin-top: 2vw;
}

.singular .entry-title {
	font-family: Montserrat;
    font-weight: 900;
	font-size: 3rem;
	margin-left: 4vw;
}

.singular .entry-header {
	border-bottom: 0px;
	margin: 0;
	padding: 0;
}

.underrubrik {
	max-width: 700px; 
	padding-left: 2vw;
	margin: 0;
}

p {
	margin-bottom: 0 !important;
	margin-block-end: 0;
	margin-block-start: 0;
}

#primary {
	margin-top: 0;
}

.lab-event-row {
	border: 1px solid black;
}
.lab-event-row {
	height: 100%;
}

.wp-block-button__link  {
	/* display: inline-block; */
    background: #F19C7A;
    color: white;
    padding: 0 !important;
    border-radius: 1rem;
	border: none;
    font-family: Montserrat;
    font-weight: 700;
    box-shadow: 4px 4px 0 #000;
    text-decoration: none;
    /* margin: 1rem 1.5rem; */
    /* transition-timing-function: cubic-bezier(.4, 0, .2, 1);
    transition-duration: .15s; */
    /* text-align: center; */
	/* height: 20px; */
	/* margin: 0 !important; */
}

.wp-block-buttons {
	margin-top: 7px !important;
}

.wp-block-button__link:hover {
	box-shadow: none;
	background: #F19C7A !important;
    color: white;
}

.event-text {
margin-top: 7px;
}

</style>

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
                    <p>Lyt til podcasts der startede i LOUD LAB</p>
                </div>
            </div>
        </article>
    </template>

	<section id="section-podcasts">
        <div class="container"></div>
    </section>

	<script>
        document.addEventListener("DOMContentLoaded", loadJSON);

        let podcasts;
        let podcast;

        //Her defineres konstanter til senere brug for fetch af json
        const url = "http://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/podcast?per_page=100";

        // Her hentes json ind, og sendes vider til funktionen showPodcasts
        async function loadJSON() {
            //Henter json og gemmer det som art
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
                const container = document.querySelector("#section-podcasts .container");

                let clone = template.cloneNode(true).content; //Her klones template og udfyldes med data fra json

                clone.querySelector("img").src = podcast.billede.guid;
                clone.querySelector("img").alt = podcast.kort;
                clone.querySelector("h3").textContent = podcast.title.rendered;
                clone.querySelector("p").textContent = podcast.kort;
                clone.querySelector("article").addEventListener("click", () => {
                    location.href = podcast.link;
                });
                container.appendChild(clone); //Klonerne tilføres til DOM

            })

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

echo do_shortcode('[metaslider id="264"]');


get_template_part( 'template-parts/footer/player' );
get_footer();

?>
