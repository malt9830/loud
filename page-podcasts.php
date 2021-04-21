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
	<article class="article">
		<img class="ret_billede" src="" alt="">
		<div class="text_indhold">
			<h2></h2>
			<p class="kort_info"></p>
			<p class="pris"></p>
		</div>
	</article>
</template>

<section>
	<main>

	</main>

	<script>
		const url = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/podcast?per_page=100"

		async function getJson() {
			const data = await fetch(url);
			podcasts = await data.json();
			console.log("podcasts", retter);
			// visPodcasts();
		}


		function visPodcasts() {
			let template = document.querySelector("template");
			let container = document.querySelector("main");


			podcasts.forEach(podcast => {
				let klon = template.cloneNode(true);

				klon.querySelector("img").src = podcast.billede;
				klon.querySelector("img").alt = podcast.navn;
				klon.querySelector("div h2").textContent = podcast.navn;
				klon.querySelector("div .kort_info").textContent = podcast.kortbeskrivelse;
				klon.querySelector("div .pris").textContent = `Pris: ${podcast.pris} kr.`;
				container.appendChild(klon);

			});
		}

	</script>


</section>

<?php

get_template_part( 'template-parts/footer/player' );
get_footer();
