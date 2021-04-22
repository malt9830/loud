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
	* {
		margin: 0;
		box-sizing: border-box;
		font-family: 'Montserrat', sans-serif;
	}

	h2 {
		font-size: 19px;
	}

	p {
		font-size: 16px;
	}

	img {
		width: 100%;
		vertical-align: middle;
	}

	.popu_podcast {
		display: flex;
		gap: 20px;
		padding: 20px;
	}

	.pod_article {
		flex-grow: 1;
	}

	@media (max-width: 600px) {

		.popu_podcast {
			overflow-x: scroll;
			scroll-snap-type: x mandatory;
		}

		.pod_article {
			flex-basis: 90%;
			flex-shrink: 0;
			scroll-snap-align: center;
		}

		.popu_podcast img {
			margin-right: 20px;
		}
	}

</style>

<template>
	<article class="pod_article">
		<img class="pod_billede" src="" alt="">
		<div class="pod_indhold">
			<h2></h2>
			<p class="kort_info"></p>
		</div>
	</article>
</template>

<section>
	<main class="pod_main">
		<div class="popu_podcast"></div>
		<div class="kategorier">
			<h2>Kategorier</h2>
			<button type="button">Alle</button>
			<button type="button">True crime</button>
			<button type="button">Samfund/ Kultur</button>
			<button type="button">Nyheder/ Politik</button>
			<button type="button">Musik</button>
			<button type="button">Komedie</button>
			<button type="button">Bsuiness</button>
			<button type="button">Livsstil</button>
			<button type="button">Kig indad</button>
			<button type="button">Kunst</button>

		</div>
	</main>

	<script>
		const url = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/podcast?per_page=8"

		async function getJson() {
			const data = await fetch(url);
			podcasts = await data.json();
			console.log(podcasts);
			visPodcasts();
		}


		function visPodcasts() {
			let template = document.querySelector("template");
			let container = document.querySelector(".popu_podcast");

			podcasts.forEach(podcast => {
				let klon = template.cloneNode(true).content;

				//				let stream = podcast.streaming
				//				stream.sort(function(a, b) {
				//					return b - a;
				//				});

				klon.querySelector("img").src = podcast.billede.guid;
				klon.querySelector("div h2").innerHTML = podcast.title.rendered;
				klon.querySelector("div .kort_info").innerHTML = podcast.kort;
				klon.querySelector(".pod_article").addEventListener("click", () => {
					location.href = podcast.link;
				});
				container.appendChild(klon);

			});
		}

		getJson();

	</script>


</section>

<?php

get_template_part( 'template-parts/footer/player' );
get_footer();
