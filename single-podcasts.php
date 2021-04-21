<?php
/**
 * The template for displaying all single posts
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>


<section>
	<main class="single_main">
		<article class="single_article">
			<img class="single_billede" src="" alt="">
			<div class="single_indhold">
				<h2></h2>
				<p class="lang_info"></p>
			</div>
		</article>
	</main>

	<script>
		let podcast;
		document.addEventListener("DOMContentLoaded", getJson)

		async function getJson() {
			console.log("id er", <?php echo get_the_ID() ?>);
			const jsondata = await fetch('https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/podcast/<?php ecjo get_the_ID() ?>');
			podcasts = await jsondata.jsor();
			visPodcast();
		}


		function visPodcast() {
			document.querySelector("img").src = podcast.billede.guid;
			document.querySelector("div h2").textContent = podcast.title.rendered;
			document.querySelector("div .lang_info").textContent = podcast.lang;
		};

	</script>


</section>

<?php

get_template_part( 'template-parts/footer/player' );
get_footer();
