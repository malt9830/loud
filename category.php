<?php
/**
 * The template for displaying all single posts
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();

?>
<section id="popu_podcast"></section>

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
    const url = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/podcast?per_page=100";
    const catUrl = "https://malthekusk.one/kea/loud/wordpress/wp-json/wp/v2/categories";

    const pathname = window.location.pathname;
    const catID = pathname.substring(pathname.lastIndexOf('category/') + 9).split('/').join('');


    async function getJson() {
        const data = await fetch(url);
        podcasts = await data.json();
        console.log(podcasts);

        const catdata = await fetch(catUrl);
        categories = await catdata.json();
        console.log(categories);

        visPodcasts();
    }

    function visPodcasts() {
        let template = document.querySelector("template");
        let container = document.querySelector("#popu_podcast");
        let filter = "alle";

        console.log(catID);

        podcasts.forEach(podcast => {
            if (podcast.kategori == catID || filter == catID) {
                let klon = template.cloneNode(true).content;
                klon.querySelector("img").src = podcast.billede.guid;
                klon.querySelector("div h3").innerHTML = podcast.title.rendered;
                klon.querySelector("div .kort_info").innerHTML = podcast.kort;
                klon.querySelector(".pod_article").addEventListener("click", () => {
                    location.href = podcast.link;
                });
                container.appendChild(klon);
            }
        });
    }

    getJson();

</script>

<?php
get_template_part( 'template-parts/footer/player' );
get_footer();
