<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();
?>
<style>
    #landing {
        width: 100%;
        height: 100vh;
    }

</style>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div id="landing"></div>
        <div id="section-feed">

        </div>
        <div id="section-podcasts"></div>
        <div id="section-infographic"></div>
        <div id="section-partners"></div>

    </main>
    <!-- #main -->
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
        document.addEventListener("DOMContentLoaded", loadJSON);

        let podcasts;
        let podcast;

        //Her defineres konstanter til senere brug for fetch af json
        const url = "http://malthekusk.one/kea/passion/wordpress/wp-json/wp/v2/artwork?per_page=100";

        // Her hentes json ind fra restdb, og sendes vider til funktionen showArt
        async function loadJSON() {
            //Henter json og gemmer det som art
            const JSONData = await fetch(url);
            otherArt = await JSONData.json();
            showOtherArt();
        }

        // I funktionen showArt, sættes hvert enkelt kunstværk ind i HTML
        function showOtherArt() {
            console.log("showingArt");
            console.log(art);
            const other1 = otherArt[Math.floor(Math.random() * otherArt.length)];
            const other2 = otherArt[Math.floor(Math.random() * otherArt.length)];
            const other3 = otherArt[Math.floor(Math.random() * otherArt.length)];
            const randomArt = [other1, other2, other3];
            console.log(randomArt);

            //Her definerers konstanter til senere brug i kloningen af template
            const template = document.querySelector("template");
            const container = document.querySelector("#galleri");
            container.innerHTML = "";

            /*  container.textContent = " ";*/ // HTML containeren tømmes for eksisterende indhold, og kan nu få tilført nyt indhold.

            randomArt.forEach(randomArtwork => {
                console.log("looping");

                let clone = template.cloneNode(true).content; //Her klones template og udfyldes  med data fra json

                clone.querySelector("img").src = randomArtwork.image.guid;
                clone.querySelector("img").alt = randomArtwork.short;
                clone.querySelector("h2").textContent = randomArtwork.work;
                clone.querySelector("h3").textContent = `Af ${randomArtwork.artist}`;
                clone.querySelector("p").textContent = randomArtwork.short;
                clone.querySelector("article").addEventListener("click", () => {
                    location.href = randomArtwork.link;
                });
                container.appendChild(clone); //kolene tilføres til DOM

            })
        }

    </script>
</div><!-- #primary -->
<div class="footer-nav-widgets-wrapper header-footer-group">
    <div class="footer-inner section-inner">
        <aside class="footer-widgets-outer-wrapper" role="complementary">
            <div class="footer-widgets-wrapper">
                <div class="footer-widgets column-one grid-item">
                    <div class="widget_text widget widget_custom_html">
                        <div class="widget_text widget-content">
                            <div class="textwidget custom-html-widget">
                                <div class="footer-flex">
                                    <div class="footer-left">
                                        <h4>Kontakt os</h4>
                                        <p>
                                            VNDU
                                        </p>
                                        <p>Telefon: <a>+45 20 18 88 77</a></p>
                                        <p>
                                            E-mail: <a>hello@vndu.dk</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-widgets column-two grid-item">
                    <div class="widget_text widget widget_custom_html">
                        <div class="widget_text widget-content">
                            <div class="textwidget custom-html-widget">
                                <div class="footer-right">
                                    <i class="fab fa-instagram"></i>
                                    <i class="fab fa-linkedin-in"></i>
                                    <i class="fab fa-facebook-square"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .footer-widgets-wrapper -->
        </aside><!-- .footer-widgets-outer-wrapper -->
    </div><!-- .footer-inner -->
</div>

<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_template_part( 'template-parts/footer/player' );
get_footer();
?>
