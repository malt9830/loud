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
		padding: 0;
		margin: 0;
	}

	#primary {
		margin-top: 0 !important;
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
	}

</style>

<section>
	<main class="single_main">
		<article class="single_article">
			<img class="single_billede" src="" alt="">
			<div class="single_indhold">
				<h3></h3>
				<p class="lang_info"></p>
			</div>
		</article>

		<section id="episoder">
			<h2>Alle episoder</h2>
			<template>
				<article class="epi_container">
					<div class="cover">
						<img src="" alt="">
					</div>
					<div class="info1">
						<h3></h3>
						<p></p>
					</div>
					<div class="info2">
						<p class="dato"></p>
						<p class="tid"></p>
						<div class="play"></div>
					</div>

				</article>
			</template>
		</section>
	</main>

</section>

<script>
	let podcast;
	let episoder;
	let aktuelpodcast = <?php echo get_the_ID() ?>;

	const url = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/podcast/" + aktuelpodcast;
	const epiUrl = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/episode?per_page=100";
	const container = document.querySelector("#episoder");

	document.addEventListener("DOMContentLoaded", getJson)

	async function getJson() {
		const data = await fetch(url);
		podcast = await data.json();

		const data2 = await fetch(epiUrl);
		episoder = await data2.json();
		console.log("episoder: ", episoder);

		visPodcast();
		visEpisoder();
	}


	function visPodcast() {
		console.log(podcast.title.rendered);
		document.querySelector(".single_billede").src = podcast.billede.guid;
		document.querySelector("div h3").innerHTML = podcast.title.rendered;
		document.querySelector("div .lang_info").innerHTML = podcast.lang;
	};

	function visEpisoder() {
		console.log("function hvisEpisoder");
		let template = document.querySelector("template");
		episoder.forEach(episode => {
			console.log("loop kører id :", aktuelpodcast);
			if (episode.belongs_to_podcast == aktuelpodcast) {
				console.log("hej");
				let klon = template.cloneNode(true).content;

				klon.querySelector(".cover img").src = episode.billede.guid;
				klon.querySelector(".info1 h3").innerHTML = episode.title.rendered;
				klon.querySelector(".info1 p").innerHTML = episode.kort_beskrivelse;
				klon.querySelector(".dato").innerHTML = episode.dato;
				klon.querySelector(".tid").innerHTML = episode.varighed;

				klon.querySelector(".epi_container").addEventListener("click", () => {
					location.href = episode.link;
				});

				container.appendChild(klon);
			}
		});
	}

</script>



<?php

get_template_part( 'template-parts/footer/player' );
get_footer();
