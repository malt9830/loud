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
	/*-----------wp design-----------*/

	.site-header,
	.site-main,
	.widget-area,
	.site-footer {
		padding: 0 !important;
		margin: 0 !important;
	}

	#primary {
		margin: 0 !important;
	}

	.site-main>* {
		margin: 0 !important;
	}

	.wp-block-columns .wp-block-column>* {
		margin: 0;
	}

	.site-main>article>*:first-child,
	.site-main>.not-found>*:first-child,
	.entry-content>*:first-child,
	[class*=inner-container]>*:first-child,
	.wp-block-template-part>*:first-child {
		margin: 0;
		padding: 0;
	}


	/*-----------generel-----------*/

	* {
		margin: 0;
		box-sizing: border-box;
		font-family: 'Montserrat', sans-serif;
	}

	h1 {
		font-size: 30px;
	}

	h2 {
		font-size: 21px;
		padding-top: 25px;
	}

	h3 {
		font-size: 16px;
		margin-bottom: 0;
		margin-top: 5px;
	}

	p {
		font-size: 14px;
	}

	img {
		width: 100%;
		vertical-align: middle;
		border-radius: 15px;
	}

	/*-----------knapper-----------*/

	.cat_knap {
		border-radius: 10px;
		text-align: start;
		padding-top: 5px;
		padding-left: 10px;
		font-size: 14px;
		text-transform: uppercase;
		height: 3.7rem;
	}

	#alle {
		background-color: #DB0038;
	}

	#crime,
	#musik,
	#indad {
		background-color: #F19C7A;
	}

	#kultur,
	#livsstil {
		background-color: #588B8B;
	}

	#politik,
	#kunst {
		background-color: #FABA42;
	}

	#komedie,
	#business {
		background-color: #ED6A1D;
	}




	/*-----------podcast-----------*/

	#popu_podcast {
		display: flex;
		gap: 20px;
		padding: 10px 0px;
	}

	.pod_article {
		flex-grow: 1;
	}

	#kategorier {
		display: grid;
		grid-template-columns: 1fr 1fr;
		gap: 20px;
	}

	/*-----------mobil-----------*/

	@media (max-width: 600px) {

		#popu_podcast {
			overflow-x: scroll;
			scroll-snap-type: x mandatory;
		}

		.pod_article {
			flex-basis: 50%;
			flex-shrink: 0;
			scroll-snap-align: center;
		}

	}

</style>

<template>
	<article class="pod_article">
		<img class="pod_billede" src="" alt="">
		<div class="pod_indhold">
			<h3></h3>
			<p class="kort_info"></p>
		</div>
	</article>
</template>

<!--
<section>
	<main class="pod_main">
		<h1>PODCAST</h1>
		<h2>Populære podcasts</h2>
		<div class="popu_podcast"></div>
		<h2>Kategorier</h2>
		<div class="kategorier">
			<button type="button" id="alle">Alle</button>
			<button type="button" id="crime">True crime</button>
			<button type="button" id="kultur">Samfund/ Kultur</button>
			<button type="button" id="politik">Nyheder/ Politik</button>
			<button type="button" id="musik">Musik</button>
			<button type="button" id="komedie">Komedie</button>
			<button type="button" id="business">Business</button>
			<button type="button" id="livsstil">Livsstil</button>
			<button type="button" id="indad">Kig indad</button>
			<button type="button" id="kunst">Kunst</button>

		</div>
	</main>
</section>
-->

<script>
	let podcasts;
	let categories;
	const url = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/podcast?per_page=8";
	const catUrl = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/categories";

	async function getJson() {
		const data = await fetch(url);
		podcasts = await data.json();
		console.log(podcasts);

		const catdata = await fetch(catUrl);
		categories = await catdata.json();
		console.log(categories);

		visPodcasts();
		opretKnapper();
	}

	function opretKnapper() {
		categories.forEach(cat => {
			document.querySelector("#kategorier").innerHTML += `<button class="cat_knap" = "${cat.id}">${cat.name}</button>`;
		});

	}


	function visPodcasts() {
		let template = document.querySelector("template");
		let container = document.querySelector("#popu_podcast");

		podcasts.forEach(podcast => {
			let klon = template.cloneNode(true).content;


			//				let stream = podcast.streaming
			//				stream.sort(function(a, b) {
			//					return b - a;
			//				});

			klon.querySelector("img").src = podcast.billede.guid;
			klon.querySelector("div h3").innerHTML = podcast.title.rendered;
			klon.querySelector("div .kort_info").innerHTML = podcast.kort;
			klon.querySelector(".pod_article").addEventListener("click", () => {
				location.href = podcast.link;
			});
			container.appendChild(klon);

		});
	}

	getJson();

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
