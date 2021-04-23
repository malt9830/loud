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

	section {
		margin: 15px !important;
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

</style>

<section>
	<main class="episode_main">
		<article class="episode_article">
			<img class="episode_billede" src="" alt="">
			<div class="episode_indhold">
				<h2></h2>
				<p class="lang_info"></p>
			</div>
		</article>


	</main>

</section>

<script>
	let episode;
	let aktuelepisode = <?php echo get_the_ID() ?>;
	const url = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/episode/" + aktuelepisode;

	document.addEventListener("DOMContentLoaded", getJson)

	async function getJson() {
		const data = await fetch(url);
		episode = await data.json();

		visEpisode();
	}


	function visEpisode() {
		document.querySelector(".episode_billede").src = episode.billede.guid;
		document.querySelector(".episode_indhold h2").innerHTML = episode.title.rendered;
		document.querySelector(".episode_indhold p").innerHTML = episode.lang_beskrivelse;
	};

</script>





<?php

get_template_part( 'template-parts/footer/player' );
get_footer();
