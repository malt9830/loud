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
	/*-----------podcast-----------*/

	#popu_podcast {
		display: flex;
		grid-gap: 20px;
		padding: 10px 0px;
		margin-top: 0;

		overflow-x: scroll;
		scroll-snap-type: x mandatory;
	}

	.pod_article {
		flex-grow: 1;

		flex-basis: 50%;
		flex-shrink: 0;
		scroll-snap-align: center;
	}

	.wp-block-columns .wp-block-column>* {
		margin-top: 0;
	}

	.pod_billede {
		border-radius: 10px;
	}

	::-webkit-scrollbar {
		width: 4px;
		border: 1px solid #ffffff;
		border-radius: 10px;
	}

	::-webkit-scrollbar-track {
		border-radius: 10px;
		background: #eeeeee;
	}

	::-webkit-scrollbar-thumb {
		border-radius: 10px;
		background: #b0b0b0;
	}


	/*-----------kategorier-----------*/

	#kategorier {
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-gap: 1rem;
	}

	#kategorier a {
		margin: 0 !important;
		height: 5rem;
		text-align: left;
		padding-top: 5px;
		padding-left: 10px;
	}

	#kategorier a:nth-child(1) {
		background: #DB0038 !important;
	}

	#kategorier a:nth-child(2),
	#kategorier a:nth-child(4) {
		background: #ED6A1D !important;
	}

	#kategorier a:nth-child(3),
	#kategorier a:nth-child(7),
	#kategorier a:nth-child(10) {
		background: #F19C7A !important;
	}

	#kategorier a:nth-child(5),
	#kategorier a:nth-child(8) {
		background: #FABA42 !important;
	}

	#kategorier a:nth-child(6),
	#kategorier a:nth-child(9) {
		background: #588B8B !important;
	}

	.custom-button {}

	/*-----------mobil-----------*/

	@media (min-width: 600px) {

		.pod_article {
			flex-basis: 20%;
		}

		#kategorier {
			grid-template-columns: 1fr 1fr 1fr 1fr;
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
			document.querySelector("#kategorier").innerHTML += `<a class="custom-button" data-category="${cat.id}" href="${cat.link}">${cat.name}</a>`;
			console.log(cat.link);

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
// comments_template();
// }
endwhile; // End of the loop.
get_template_part( 'template-parts/footer/player' );
get_footer();

?>
