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
    <h1></h1>
</section>
<section id="popu_podcast">
    <h2>Mest populære</h2>
</section>
<section id="section-podcasts">
    <h2>Alle</h2>
    <div class="container"></div>
</section>

<template>
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
        let template = document.querySelector("template");
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

    getJson();

</script>

<?php
get_template_part( 'template-parts/footer/player' );
get_footer();
