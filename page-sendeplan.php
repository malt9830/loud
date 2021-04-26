<?php
/**
 * The template for displaying sendeplan
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
/* Start the Loop */
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/content/content-page' );

    // If comments are open or there is at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }
endwhile; // End of the loop.
?>


<div id="sendeplan_container">

<div id="mandag" class="dag collapsible">
<p>Mandag</p>
<p class="dato_container"></p>
</div>
<div class="dagsplan content">

<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/154c2eed9bfce206921a83c7b18e874b.jpg" alt="">
    </article>
    <article>
        <p class="podcast">eventyr</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/b36e79a05f2ec82e77315ffa5226c116.jpg" alt="">
    </article>
    <article>
        <p class="podcast">historier fra historien</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">09:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/5309cef706ec8037c817ff366d8545a9.jpg" alt="">
    </article>
    <article>
        <p class="podcast">kontur</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">10:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/29214f6b82f68b73c3ed1245cd1ae043.jpg" alt="">
    </article>
    <article>
        <p class="podcast">george floyd</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    
<article>
    <div class="tidspunkt">11:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/76e57dc37ceac22bf02348623497b5ff-scaled.jpg" alt="">
    </article>
    <article>
        <p class="podcast">hvad i alverden</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
        
<article>
    <div class="tidspunkt">12:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/712a88c8f4d301bcd856c500c4bf5bca.jpg" alt="">
    </article>
    <article>
        <p class="podcast">klub podcast</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">13:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/cd584822fd2b0fe2a12117e17b4c69ec.jpg" alt="">
    </article>
    <article>
        <p class="podcast">den brogede vej</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

</div>

<div id="tirsdag" class="dag collapsible">Tirsdag</div>
<div class="dagsplan content">
    
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/5ff480057f2537bf4d66b82e592e8639.jpg" alt="">
    </article>
    <article>
        <p class="podcast">det gode selskab</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/80981ad443e4adda320b01394eebc9d3.jpg" alt="">
    </article>
    <article>
        <p class="podcast">freundschaft</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">09:00</div>
</article>
<article>
        <img class="billede" src="https://is2-ssl.mzstatic.com/image/thumb/Podcasts124/v4/52/3c/04/523c0435-e709-f848-2a1a-75fc5289903a/mza_17019287945696966019.jpg/1200x1200bb.jpg" alt="">
    </article>
    <article>
        <p class="podcast">spejlet</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">10:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/0805a073993d556284e3aacb34853240.jpg" alt="">
    </article>
    <article>
        <p class="podcast">bibelklubben</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    
<article>
    <div class="tidspunkt">11:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/ddd628611c7a1698785ded87e5d35650.jpg" alt="">
    </article>
    <article>
        <p class="podcast">skongeriget</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
        
<article>
    <div class="tidspunkt">12:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/54c77aba2c4a08ecdb3625c5818115bc.jpg" alt="">
    </article>
    <article>
        <p class="podcast">de unge ved verdens ende</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    </div>

<div id="onsdag" class="dag collapsible">Onsdag</div>
    <div class="dagsplan content">
    
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="https://is2-ssl.mzstatic.com/image/thumb/Podcasts124/v4/52/3c/04/523c0435-e709-f848-2a1a-75fc5289903a/mza_17019287945696966019.jpg/1200x1200bb.jpg" alt="">
    </article>
    <article>
        <p class="podcast">spejlet</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/b0178eac6a1c08ada53e1c4595750c13.jpg" alt="">
    </article>
    <article>
        <p class="podcast">drømmefanger</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">09:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/d568a7d3db3b4dac853f5a8ac386c4a4.jpg" alt="">
    </article>
    <article>
        <p class="podcast">den nye verden</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">10:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/2b87e1f686dcea2a1ac707bac620b514.jpg" alt="">
    </article>
    <article>
        <p class="podcast">aldrig mor</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    
<article>
    <div class="tidspunkt">11:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/c269398fcbfd2f74ed611be67f006ab0.jpg" alt="">
    </article>
    <article>
        <p class="podcast">nattely</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
        
<article>
    <div class="tidspunkt">12:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/85e42136601642246362d3876f902bcd.jpg" alt="">
    </article>
    <article>
        <p class="podcast">den yderste grænse</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    </div>

<div id="torsdag" class="dag collapsible">Torsdag</div>
    <div class="dagsplan content">
    
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/c6cf12a7abc2c0543039a2ed599a5843.jpg" alt="">
    </article>
    <article>
        <p class="podcast">hva' sker der?</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/6726e6cc8d2c2285cb0109570e862248.jpg" alt="">
    </article>
    <article>
        <p class="podcast">klub rundbordet</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">09:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/ec797d094620d2586ba3a9cb1fab9173.jpg" alt="">
    </article>
    <article>
        <p class="podcast">gameboys</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">10:00</div>
</article>
<article>
        <img class="billede" src="https://is2-ssl.mzstatic.com/image/thumb/Podcasts124/v4/52/3c/04/523c0435-e709-f848-2a1a-75fc5289903a/mza_17019287945696966019.jpg/1200x1200bb.jpg" alt="">
    </article>
    <article>
        <p class="podcast">spejlet</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    
<article>
    <div class="tidspunkt">11:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/b79b3211419321330ab099788c23f5d5.jpg" alt="">
    </article>
    <article>
        <p class="podcast">jeg plejede at tro på for evigt</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
        
<article>
    <div class="tidspunkt">12:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/4aaba0e6826a4fd5db2415b9135ad6b2.jpg" alt="">
    </article>
    <article>
        <p class="podcast">aloha!</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    </div>

<div id="fredag" class="dag collapsible">Fredag</div>
    <div class="dagsplan content">
    
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/026d39d9dd7a3d3fed6e3ce3bd846178.jpg" alt="">
    </article>
    <article>
        <p class="podcast">dagens nyheder</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/e094f66e9d1d08b1016d9d87365a332e.jpg" alt="">
    </article>
    <article>
        <p class="podcast">alis stemmer</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">09:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/cd6a568c99d4342990e7b6b8fba7bc1c.jpg" alt="">
    </article>
    <article>
        <p class="podcast">aula</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">10:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/d26ae3feecac38b301ba0fcd37304ed1.jpg" alt="">
    </article>
    <article>
        <p class="podcast">aktier for noobies</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    
<article>
    <div class="tidspunkt">11:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/6d8427f81abc23b14f4e058769fdb60a.jpg" alt="">
    </article>
    <article>
        <p class="podcast">frås</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
        
<article>
    <div class="tidspunkt">12:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/d7e90513ba915c229061ae30bcb6deac.jpg" alt="">
    </article>
    <article>
        <p class="podcast">i får børn – jeg får kemo</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    </div>

<div id="loerdag" class="dag collapsible">Lørdag</div>
    <div class="dagsplan content">
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/b6b39281185ad3e174387b86935be6e3.jpg" alt="">
    </article>
    <article>
        <p class="podcast">indsigt</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/3a4baf83acef9caceda49ff2a6f1910e.jpg" alt="">
    </article>
    <article>
        <p class="podcast">kollegiekøkkenet</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">09:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/e797aba886deb77fb75777d029f0835c.jpg" alt="">
    </article>
    <article>
        <p class="podcast">udråb</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">10:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/32049b9cc77410a602794f9cc651bd2f.jpg" alt="">
    </article>
    <article>
        <p class="podcast">s, p eller k</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    
<article>
    <div class="tidspunkt">11:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/dc7fa56773c923296229096f9668b6a0.jpg" alt="">
    </article>
    <article>
        <p class="podcast">sceneløs</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
        
<article>
    <div class="tidspunkt">12:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/026d39d9dd7a3d3fed6e3ce3bd846178.jpg" alt="">
    </article>
    <article>
        <p class="podcast">dagens nyheder</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

</div>

<div id="soendag" class="dag collapsible">Søndag</div>
    <div class="dagsplan content">
    
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/f48ee088255c97ed7aa2e133d7631335.jpg" alt="">
    </article>
    <article>
        <p class="podcast">sexhundredetallet</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/d7d11ad07d51a139f395bc0088d8e696.jpg" alt="">
    </article>
    <article>
        <p class="podcast">all caps</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">09:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/a1b340e49d5238b196044c77aae76f75.jpg" alt="">
    </article>
    <article>
        <p class="podcast">talent</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>

<article>
    <div class="tidspunkt">10:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/85412bfb204b9c64881109b42440b634.jpg" alt="">
    </article>
    <article>
        <p class="podcast">tourbussen</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    
<article>
    <div class="tidspunkt">11:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/0475ea02b3c6fe20b893210cf3600cd7.jpg" alt="">
    </article>
    <article>
        <p class="podcast">boblen</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
        
<article>
    <div class="tidspunkt">12:00</div>
</article>
<article>
        <img class="billede" src="https://loud.land/wp-content/uploads/2021/04/1733fb2a30ae178db60578d4adb93bf6.jpg" alt="">
    </article>
    <article>
        <p class="podcast">delt på nettet</h3>
        <p class="dato">1 apr 19</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">kort beskrivelse af podcast</p>
        <p class="genre">genre goes here</p>
        </article>
    </div>

</div>






<style>

/*** styling af header ***/
#primary{
    margin-top:0;
}

.singular .entry-header{
border: none;
margin: 0 auto;
padding:0;
}

.singular .entry-title{
    font-family: Montserrat;
    font-weight: 900;
    font-size:1.8rem;
}

#post-40{
    margin-bottom:0;
}

.site-main article .entry-footer {
    margin-top: 0;
    padding-top: 0;
    padding-bottom:0;
    border-bottom:none;
}

.entry-content{
    font-size:.8rem;
    letter-spacing: .05rem;
    color:black;
    }

.entry-content p{
    color:black;
    font-family: Montserrat;
}


/*** style sendeplan container ***/
#sendeplan_container{
    margin:15px;
}

/*** style ugedage-knapper ***/
.dag{
    border:1px solid black;
    padding:10px 15px;
    margin-top:-1px;

    font-size:.8rem;
    letter-spacing:.2rem;
    text-transform:uppercase;
    text-align:left;
}

.active, .dag:hover{
    /* cursor:pointer; */
}

.dag:after{
content: "﹢";
float:right;
}

.active:after{
    content:"–";
}


/*** style selve dagsplan ***/
.dagsplan{
    max-height:0;
    overflow:auto;
    transition: max-height 1s ease-out;

    display:grid;
    grid-template-columns: 1fr 2fr 3fr;
    height:70vh;
    border-style:solid;
    border-width: 0 1px;
    border-color:black;
    text-transform:uppercase;
}

.dagsplan:last-child{
    border-bottom:1px solid black;
}

.tidspunkt{
    grid-column:1/span 1;
    letter-spacing:.07rem;
    font-size: .9rem;
    font-weight: 400;

/*** placerer tidspunkt i midten ***/
    padding: 40px 20px;
    text-align: center;
}

.billede{
    width:100%;
    grid-column:2/span 1;
    padding: 10px 15px 20px 0;
}

.podcast, .dato, .genre{
    grid-column:3/span 1;
    padding-left: 5px;
    font-size:.8rem;
}

.podcast{
    padding-top:10px;
    text-decoration:bold;
    letter-spacing:.07rem;
    font-weight:600;
}

.tid, .beskrivelse{
    /* tid+beskrivelse skal ikke vises i mobil */
    display:none;
}

.genre{
    padding-top:15px;
    color:#a9a9a9;
}


/*** desktop ***/
@media only screen and (min-width: 600px){

.html{
    box-sizing:border-box;
}

*, *::before, *::after {
    box-sizing: inherit;
}

#post-40 {
    margin-bottom: 50px;
}

/*** style sendeplan desktop ***/
#sendeplan_container{
    display:grid;
    grid-template-columns: repeat(7, 1fr);
    grid-template-rows:auto;
    margin:0 320px;
}

#dagsplan{
    grid-template-columns: 20% auto;
}

.dag{
    cursor:pointer;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
    text-align:center;
    margin-top:8px;
}

.dag:after{
content: none;
}

.active{
    background-color:#DB0038;
    color:white;
    transition: .2s ease-out;
    box-shadow: 8px 3px 0px -3px #6b6b6b;
    margin-top:0;
    border:none;
}

.active:after{
    content:none;
}

#mandag{
    grid-column:1/span 1;
    grid-row:1/span 1;
}

#tirsdag{
    grid-column:2/span 1;
    grid-row:1/span 1;
}

#onsdag{
    grid-column:3/span 1;
    grid-row:1/span 1;
}

#torsdag{
    grid-column:4/span 1;
    grid-row:1/span 1;
}

#fredag{
    grid-column:5/span 1;
    grid-row:1/span 1;
}

#loerdag{
    grid-column:6/span 1;
    grid-row:1/span 1;
}

#soendag{
    grid-column:7/span 1;
    grid-row:1/span 1;
}

/*** style dagsplan desktop ***/

.dagsplan{
    grid-column:1/span 7;
    grid-template-columns: 15% 25% 63%;
    /* grid-row:2/span 1; */

    height:67vh;
}

.dagsplan article{
    border-bottom:1px solid black;
}

.tidspunkt{
/*** placerer tidspunkt i midten ***/
padding: 75px 20px;
}

.billede{
    grid-column:2/span 1;
    width: 90%;
    padding: 20px 30px 20px 0px;
}

.podcast{
    grid-column:3/span 1;
    font-size:.95rem;
    padding-top:15px;
}

.dato, .tid{
    grid-column:3/span 1;
    display:inline;
    font-size:.65rem;
    text-transform:uppercase;
}

.beskrivelse{
    grid-column:3/span 1;
    /* tid+beskrivelse skal ikke vises i mobil */
    display:block;
    font-size:.8rem;
    padding-left:5px;
}

}

}


</style>









<script>

document.addEventListener("DOMContentLoaded", start);
 console.log("DOMContentLoaded");
 
 function start(){

// var ugedage = document.getElementsByClassName("dag");
// var valgtDag;

// for (valgtDag = 0; valgtDag < ugedage.length; valgtDag++) {
//  ugedage[valgtDag].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var content = this.nextElementSibling;
//     if (content.style.maxHeight){
//       content.style.maxHeight = null;
//     } else {
//      content.style.maxHeight = content.scrollHeight + "px";
//     }
//   });
// }


// toggle collapse of specified content
function toggleContent(content) {
  if (content.style.maxHeight) {
    content.style.maxHeight = null;
  } else {
    content.style.maxHeight = content.scrollHeight + 'px';
  }
}

// collapse all open content
function collapseAllOpenContent() {
  const colls = document.getElementsByClassName('collapsible');
  for (const coll of colls) {
    if (coll.classList.contains('active')) {
      coll.classList.remove('active');
      toggleContent(coll.nextElementSibling);
    }
  }
}

const colls = document.getElementsByClassName('collapsible');
for (const coll of colls) {
  coll.addEventListener('click', function() {
    if (!this.classList.contains('active')) {
      collapseAllOpenContent();
    }
    this.classList.toggle('active');
    toggleContent(this.nextElementSibling);
  });
}





var dato = new Date();
document.querySelector(".dag").textContent += dato.toDateString();



 }


</script>



<?php
get_template_part( 'template-parts/footer/player' );
get_footer();
?>
