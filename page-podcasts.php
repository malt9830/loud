<?php
/**
 * The template for displaying all single posts
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
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
				klon.querySelector("div h2").textContent = podcast.title.rendered;
				klon.querySelector("div .kort_info").textContent = podcast.kort;
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
