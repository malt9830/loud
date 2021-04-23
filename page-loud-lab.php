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
	margin-top: 1vw;
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
/* .lab-event-row {
	height: 100%;
} */

@media (min-width: 1200px)
 {
	.wp-block-column .lab-event-row {
	width: 60vw;
}
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
padding: 0 5px 2px 5px;
}


	/*------------podcasts------------*/
	#section-podcasts {
        max-width: 1200px;
        margin: 1rem;
    }

    @media (min-width: 1200px) {
        #section-podcasts {
            margin: 0 auto;
        }
    }

    .podcast-container {
        display: grid;
        grid-gap: 1rem;
    }

    @media (min-width:650px) {
        .podcast-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width:950px) {
        .podcast-container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .podcasts-article {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        cursor: pointer;
    }

	.podcasts-article .top {
        display: grid;
        grid-template-columns: 3fr 8fr;
        grid-gap: 0.5rem;
    }

	.podcasts-article .top .text h3 {
        margin: 0;
    }

	.podcasts-article .top .text p {
        line-height: 1.7rem;
        margin-bottom: 1.3rem;
    }

	.podcasts-article .play-button {
        font-size: 1.3rem;
    }

	.podcasts-article .play-button p {
        display: inline-block;
    }

    @media (min-width: 650px) {

		.podcasts-article .top {
            grid-template-columns: 1fr;
        }

		.podcasts-article .top .text h3 {
            margin-top: 1rem;
        }
    }

    @media (max-width: 650px) {

		.podcasts-article .top .text h3 {
            font-size: 1.1rem;
        }

		.podcasts-article .top .text p {
            font-size: 1rem;
            margin-bottom: 0 !important;
        }

		.podcasts-article .play-button {
            text-align: center;
        }
    }

.text {
	margin-bottom: 10px;
}

p .play-button {
        font-size: 1rem;
    }

    article .play-button p {
        display: inline-block;
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
            const container = document.querySelector("#section-podcasts .podcast-container");

            /*  container.textContent = " ";*/ // HTML containeren tømmes for eksisterende indhold, og kan nu få tilført nyt indhold.

            rngCasts.forEach(podcast => {
                console.log("looping");
                //Her definerers konstanter til senere brug i kloningen af template
                const template = document.querySelector("template");
                const container = document.querySelector("#section-podcasts .podcast-container");

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
