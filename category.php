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
	/*-----------popu podcast-----------*/

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


<section>
	<h1></h1>
</section>
<section>
	<h2>Mest populære</h2>
	<section id="popu_podcast">
	</section>
	<section id="section-podcasts">
		<h2>Alle</h2>
		<div class="container"></div>
	</section>
</section>

<template id="template1">
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
				<p>Hør seneste podcast</p>
			</div>
		</div>
	</article>
</template>

<template id="template2">
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
	const url = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/podcast?per_page=100";
	const catUrl = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/categories";

	const pathname = window.location.pathname;
	const catID = pathname.substring(pathname.lastIndexOf('category/') + 9).split('/').join('');

	window.addEventListener("DOMContentLoaded", () => {
		console.log("DOMContentLoaded");


	})

	async function getJson() {
		const data = await fetch(url);
		podcasts = await data.json();
		console.log(podcasts);

		const catdata = await fetch(catUrl);
		categories = await catdata.json();
		console.log(categories);

		visTitel();
		visPodcasts();
		visPodcasts2();
	}

	function visTitel() {
		console.log("viser titel");

		categories.forEach(category => {
			if (category.slug == catID) {
				console.log("looping categories");
				document.querySelector("h1").textContent = category.name;
			}
		})
	}

	function visPodcasts() {
		let template = document.querySelector("#template1");
		let container = document.querySelector("#section-podcasts .container");
		let filter = "alle";

		console.log(catID);

		podcasts.forEach(podcast => {
			if (podcast.kategori == catID || filter == catID) {
				let clone = template.cloneNode(true).content; //Her klones template og udfyldes  med data fra json

				clone.querySelector("img").src = podcast.billede.guid;
				clone.querySelector("img").alt = podcast.kort;
				clone.querySelector("h3").textContent = podcast.title.rendered;
				clone.querySelector("p").textContent = podcast.kort;
				clone.querySelector("article").addEventListener("click", () => {
					location.href = podcast.link;
				});
				container.appendChild(clone); //Klonerne tilføres til DOM
			}
		});
	}

	function visPodcasts2() {
		let template2 = document.querySelector("#template2");
		let container2 = document.querySelector("#popu_podcast");
		let filter = "alle";

		console.log(catID);

		podcasts.forEach(podcast2 => {
			if (podcast2.kategori == catID || filter == catID) {
				let clone2 = template2.cloneNode(true).content; //Her klones template og udfyldes  med data fra json

				clone2.querySelector("img").src = podcast2.billede.guid;
				clone2.querySelector("div h3").innerHTML = podcast2.title.rendered;
				clone2.querySelector("div .kort_info").innerHTML = podcast2.kort;
				clone2.querySelector(".pod_article").addEventListener("click", () => {
					location.href = podcast2.link;
				});
				container2.appendChild(clone2); //Klonerne tilføres til DOM
			}
		});
	}

	getJson();

</script>

<?php
get_template_part( 'template-parts/footer/player' );
get_footer();
