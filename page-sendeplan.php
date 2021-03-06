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
<h3>Mandag</h3>
<p class="dato_container"></p>
</div>
<div class="dagsplan content">

<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/eventyr-2.jpg" alt="eventyr podcast">
    </article>
    <article>
        <p class="podcast">eventyr</h3>
        <p class="dato">3 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">Lad dig forføre og fortrylle af Gunvor Bjerres fløjlsbløde stemme, når hun uge efter uge læser de bedste eventyr op. </p>
        <p class="genre">Kunst</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/historierfrahistorien-2.jpg" alt="historier fra historien podcast">
    </article>
    <article>
        <p class="podcast">historier fra historien</h3>
        <p class="dato">3 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Et Danmarkshistorisk podcast om små og store fortællinger fra vores fælles fortid, som du måske ikke har hørt endnu.</p>
        <p class="genre">Samfund og kultur</p>
        </article>

<article>
    <div class="tidspunkt">09:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/kontur-2.jpg" alt="kontur podcast">
    </article>
    <article>
        <p class="podcast">kontur</h3>
        <p class="dato">3 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Kontur dykker hver uge dybt ned i en aktuel kunstner på den danske eller internationale musikscene. </p>
        <p class="genre">Musik</p>
        </article>

<article>
    <div class="tidspunkt">11:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/georgefloyd-2.jpg" alt="george floyd podcast">
    </article>
    <article>
        <p class="podcast">george floyd</h3>
        <p class="dato">3 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Black Lives Matters fik i den grad en verdensomspændende revival i forbindelse med George Floyds brutale død, og mennesker over hele verden gik på gaden i sympati.</p>
        <p class="genre">Samfund og kultur</p>
        </article>
    
<article>
    <div class="tidspunkt">12:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/hvadialverden-2.jpg" alt="hvad i alverden podcast">
    </article>
    <article>
        <p class="podcast">hvad i alverden</h3>
        <p class="dato">3 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">I Hvad I Alverden tager vi aktuelle samfundsbegivenheder op og spørger helt grundlæggende: Hvad foregår der, og hvorfor er det vigtigt?</p>
        <p class="genre">Samfund og kultur</p>
        </article>
        
<article>
    <div class="tidspunkt">13:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/klubpodcast-2.jpg" alt="klub podcadst podcast">
    </article>
    <article>
        <p class="podcast">klub podcast</h3>
        <p class="dato">3 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Velkommen til KLUB Podcast. Her kan du mæske dig i lun kultur direkte fra køkkenet. Der er ingen smalle steder, kun stor lyd og store oplevelser.</p>
        <p class="genre">Samfund og kultur</p>
        </article>

</div>

<div id="tirsdag" class="dag collapsible">
    <h3>Tirsdag</h3>
</div>
<div class="dagsplan content">
    
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/detgodeselskab-2.jpg" alt="det gode selskab podcast">
    </article>
    <article>
        <p class="podcast">det gode selskab</h3>
        <p class="dato">4 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">De gode venner, Emil Kondrup og Kristoffer Bonde, har intet tilfælles ud over at de elsker den gode stemning.</p>
        <p class="genre">Komedie</p>
        </article>

<article>
    <div class="tidspunkt">08:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/freundschaft-2.jpg" alt="freundschaft podcast">
    </article>
    <article>
        <p class="podcast">freundschaft</h3>
        <p class="dato">4 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Hos Ida-Sophia og Lasse er du med som fluen på væggen i en telefonsamtale mellem to gode venner. </p>
        <p class="genre">Komedie</p>
        </article>

<article>
    <div class="tidspunkt">10:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/spejlet-2.jpg" alt="spejlet podcast">
    </article>
    <article>
        <p class="podcast">spejlet</h3>
        <p class="dato">4 maj 21</p>
        <p class="tid">1 t. </p>
        <p class="beskrivelse">Vi ser det samme spejlbillede igen og igen i små øjeblikke af få sekunder eller lidt mere. Men hvad sker der, hvis vi tager os tid til at se os selv i spejlet?</p>
        <p class="genre">Livsstil</p>
        </article>

<article>
    <div class="tidspunkt">11:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/lydfabrik.jpg" alt="bibelklubben podcast">
    </article>
    <article>
        <p class="podcast">bibelklubben</h3>
        <p class="dato">4 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">kLivet som ung kan være opslidende. For er jeg overhovedet god nok, som jeg er? Og hvem holder egentlig af mig? Disse tanker kan fylde så meget, at man nogle gange kan have svært ved at få luft. </p>
        <p class="genre">Livsstil</p>
        </article>
    
<article>
    <div class="tidspunkt">12:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/kongeriet-2.jpg" alt="kongeriget podcast">
    </article>
    <article>
        <p class="podcast">kongeriget</h3>
        <p class="dato">4 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Kongeriget er stedet, hvor nyheder bliver til en samtale. </p>
        <p class="genre">Nyhder og politik</p>
        </article>
        
<article>
    <div class="tidspunkt">13:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/deungevedverdensende-2.jpg" alt="de unge ved verdens ende podcast">
    </article>
    <article>
        <p class="podcast">de unge ved verdens ende</h3>
        <p class="dato">4 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Det er de færreste, som har en idé om, hvilket liv den unge grønlænder lever. Men i dette program kan du få et øjebliksbillede på den grønlandske ungdom.</p>
        <p class="genre">Samfund og kultur</p>
        </article>
    </div>

<div id="onsdag" class="dag collapsible">
    <h3>Onsdag</h3>
</div>
    <div class="dagsplan content">
    
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/spejlet-2.jpg" alt="spejlet podcast">
    </article>
    <article>
        <p class="podcast">spejlet</h3>
        <p class="dato">5 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">Vi ser det samme spejlbillede igen og igen i små øjeblikke af få sekunder eller lidt mere. Men hvad sker der, hvis vi tager os tid til at se os selv i spejlet?</p>
        <p class="genre">Livsstil</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/drommefanger-2.jpg" alt="drømmefanger podcast">
    </article>
    <article>
        <p class="podcast">drømmefanger</h3>
        <p class="dato">5 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse"> Drømmerfanger drager vi ud i landet for at fange unges drømme og finde ud af, hvordan drømme bliver til virkelighed. Her er plads til både succeshistorier og store bommerter.</p>
        <p class="genre">Business</p>
        </article>

<article>
    <div class="tidspunkt">09:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/dennyeverden-2.jpg" alt="den nye verden podcast">
    </article>
    <article>
        <p class="podcast">den nye verden</h3>
        <p class="dato">5 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Den Nye Verden er et Radio LOUD produceret Dungeons & Dragons 5e real play podcast, hvor 4 af LOUDs mere nørdede værter samles om source books og terninger.</p>
        <p class="genre">Kunst</p>
        </article>

<article>
    <div class="tidspunkt">11:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/aldrigmor-2.jpg" alt="aldrig mor podcast">
    </article>
    <article>
        <p class="podcast">aldrig mor</h3>
        <p class="dato">5 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">Agnes vil aldrig være mor – hør hvorfor.</p>
        <p class="genre">Samfund og kultur</p>
        </article>
    
<article>
    <div class="tidspunkt">12:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/nattely-2.jpg" alt="nattely podcast">
    </article>
    <article>
        <p class="podcast">nattely</h3>
        <p class="dato">5 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">I Nattely giver vi dig en tænkepause til refleksion med plads til fordybelse. </p>
        <p class="genre">Kig indad</p>
        </article>
        
<article>
    <div class="tidspunkt">13:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/denyderstegraense-2.jpg" alt="den yderste grænse podcast">
    </article>
    <article>
        <p class="podcast">den yderste grænse</h3>
        <p class="dato">5 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Den yderste grænse handler om mænd og kvinder, hvis nysgerrighed overvinder farer og formaninger. </p>
        <p class="genre">Samfund og kultur</p>
        </article>
    </div>

<div id="torsdag" class="dag collapsible">
    <h3>Torsdag</h3>
    </div>
    <div class="dagsplan content">
    
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/hvaskerder-2.jpg" alt="hva' sker der podcast">
    </article>
    <article>
        <p class="podcast">hva' sker der?</h3>
        <p class="dato">6 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">Programmet der leverer nyheder og virkeligheden i den perfekte dosis. Ikke for meget, ikke for lidt. Altid helt perfekt.</p>
        <p class="genre">Nyheder og politik</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/klubrundbordet-2.jpg" alt="klub rundbordet podcast">
    </article>
    <article>
        <p class="podcast">klub rundbordet</h3>
        <p class="dato">6 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">KLUB inviterer dig til at tage plads ved rundbordet, når vi sammen med vores gæster dykker ned i den kultur, der skaber og former os. </p>
        <p class="genre">Samfund og kultur</p>
        </article>

<article>
    <div class="tidspunkt">09:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/gameboys-2.jpg" alt="gameboys podcast">
    </article>
    <article>
        <p class="podcast">gameboys</h3>
        <p class="dato">6 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">GameBoys er den danske ungdoms helt egen gaming-kultur og aktualitets podcast. </p>
        <p class="genre">Livsstil</p>
        </article>

<article>
    <div class="tidspunkt">10:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/vierdata-2.jpg" alt="vi er data podcast">
    </article>
    <article>
        <p class="podcast">vi er data</h3>
        <p class="dato">6 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">Et ugentligt program som handler om vores drøm om teknologien som vores tjener og vores frygt for teknologien som vores betvinger.</p>
        <p class="genre">Samfund og kultur</p>
        </article>
    
<article>
    <div class="tidspunkt">11:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/jegplejedeattropåforevigt-2.jpg" alt="jeg plejede at tro på for evigt podcast">
    </article>
    <article>
        <p class="podcast">jeg plejede at tro på for evigt</h3>
        <p class="dato">6 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Livet er skrøbeligt. Og døden er lige så vigtig at tale om inden som efter.</p>
        <p class="genre">Kig indad</p>
        </article>
        
<article>
    <div class="tidspunkt">13:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/aloha-2.jpg" alt="aloha! podcast">
    </article>
    <article>
        <p class="podcast">aloha!</h3>
        <p class="dato">6 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Danmarks mest overvurderede drag queen, Betty Bitschlap, og selvudnævnt handsome man, Ramez Mhaanna, forsøger at sprede lidt godt humør på din lidt triste hverdag ved at tale om lige præcist det de har lyst til.</p>
        <p class="genre">Samfund og kultur</p>
        </article>
    </div>

<div id="fredag" class="dag collapsible">
    <h3>Fredag </h3></div>
    <div class="dagsplan content">
    
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/dagensnyheder-2.jpg" alt="dagens nyheder podcast">
    </article>
    <article>
        <p class="podcast">dagens nyheder</h3>
        <p class="dato">7 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">Dagens Nyheder udkommer hver morgen med et nuanceret overblik over historier, du kan tage med på farten. </p>
        <p class="genre">Nyheder og politik</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/alisstemmer-2.jpg" alt="alis stemmer podcast">
    </article>
    <article>
        <p class="podcast">alis stemmer</h3>
        <p class="dato">7 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse"> Ali Aminali er LOUDs stemme i natten, som lytter, taler og inviterer natteravnene ind i studiet.</p>
        <p class="genre">Samfund og kultur</p>
        </article>

<article>
    <div class="tidspunkt">09:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/aula-2.jpg" alt="aula podcast">
    </article>
    <article>
        <p class="podcast">aula</h3>
        <p class="dato">7 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">Debatprogrammet om vores uddannelsessystem.</p>
        <p class="genre">Business</p>
        </article>

<article>
    <div class="tidspunkt">10:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/aktierfornoobies-2.jpg" alt="aktier for noobies podcast">
    </article>
    <article>
        <p class="podcast">aktier for noobies</h3>
        <p class="dato">7 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">I podcastserien Aktier for noobies undersøger Camilla Michelle Mikkelsen, hvordan man kommer godt i gang, hvis man vil investere sine penge.</p>
        <p class="genre">Business</p>
        </article>
    
<article>
    <div class="tidspunkt">11:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/frås-2.jpg" alt="frås podcast">
    </article>
    <article>
        <p class="podcast">frås</h3>
        <p class="dato">7 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Kan man købe nyt med god samvittighed?</p>
        <p class="genre">Livsstil</p>
        </article>
        
<article>
    <div class="tidspunkt">13:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/ifårbornjegfårkemo-2.jpg" alt="i får børn - jeg får kemo podcast">
    </article>
    <article>
        <p class="podcast">i får børn – jeg får kemo</h3>
        <p class="dato">7 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">En intens historie om at finde sig selv i myriader af sort uheld og turde tage skæbnesvangre valg for fremtiden.</p>
        <p class="genre">Samfund og kultur</p>
        </article>
    </div>

<div id="loerdag" class="dag collapsible">
<h3>Lørdag </h3></div>
    <div class="dagsplan content">
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/indsigt-2.jpg" alt="indsigt podcast">
    </article>
    <article>
        <p class="podcast">indsigt</h3>
        <p class="dato">8 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">Mandag til fredag giver vi dig den dagsaktuelle historie, som vi mener, du bør få et nuanceret overblik over. </p>
        <p class="genre">Nyheder og politik</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/kollegiekokkenet-2.jpg" alt="kollegiekøkkenet podcast">
    </article>
    <article>
        <p class="podcast">kollegiekøkkenet</h3>
        <p class="dato">8 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Vi kaster et blik ind i den tid i ens liv, hvor man bor sammen i en familie, man ikke selv har valgt og det sammenhold, der opstår.</p>
        <p class="genre">Livsstil</p>
        </article>

<article>
    <div class="tidspunkt">09:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/udråb-2.jpg" alt="udråb podcast">
    </article>
    <article>
        <p class="podcast">udråb</h3>
        <p class="dato">8 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Udråb giver én gæst med en markant holdning mulighed for at uddybe, forklare og forsvare sin holdning fra alle leder og kanter.</p>
        <p class="genre">Nyheder og politik</p>
        </article>

<article>
    <div class="tidspunkt">11:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/spellerk-2.jpg" alt="s, p eller k podcast">
    </article>
    <article>
        <p class="podcast">s, p eller k</h3>
        <p class="dato">8 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">Formålet er klart: at give krænkelsesdebatten et frisk pust og drysse masser glimmer på undervejs. </p>
        <p class="genre">Samfund og kultur</p>
        </article>
    
<article>
    <div class="tidspunkt">12:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/scenelos-2.jpg" alt="sceneløs podcast">
    </article>
    <article>
        <p class="podcast">sceneløs</h3>
        <p class="dato">8 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Sceneløs er teater på lyd. Vi bruger virkeligheden som scenografi og virkelige historier som udgangspunkt for dramatik.</p>
        <p class="genre">Kunst</p>
        </article>
        
<article>
    <div class="tidspunkt">13:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/dagensnyheder-2.jpg" alt="dagens nyheder podcast">
    </article>
    <article>
        <p class="podcast">dagens nyheder</h3>
        <p class="dato">8 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse"> I podcastserien Ofrene tager Sandie Westh udgangspunkt i pårørende til drab.</p>
        <p class="genre">True crime</p>
        </article>

</div>

<div id="soendag" class="dag collapsible">
<h3>Søndag </h3></div>
    <div class="dagsplan content">
    
<article>
    <div class="tidspunkt">07:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/sexhundredetallet-2.jpg" alt="sexhundredetallet podcast">
    </article>
    <article>
        <p class="podcast">sexhundredetallet</h3>
        <p class="dato">9 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">I ’Sexhundredetallet’ undersøger den unge journalist Louise Lindblad, hvordan hendes generations forhold til sex, seksualitet og skam er blevet formet til, hvad det er i dag.</p>
        <p class="genre">Samfund og kultur</p>
        </article>

<article>
    <div class="tidspunkt">08:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/allcaps-2.jpg" alt="all caps podcast">
    </article>
    <article>
        <p class="podcast">all caps</h3>
        <p class="dato">9 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">I ALL CAPS tager Anton Gade-Nielsen internetkulturen og -humoren alvorligt når han sammen med gæster og lyttere undersøger, hvor tendenser og trends opstår og hvordan vi navigerer i dem.</p>
        <p class="genre">Samfund og kultur</p>
        </article>

<article>
    <div class="tidspunkt">09:00</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/talent-2.jpg" alt="talent podcast">
    </article>
    <article>
        <p class="podcast">talent</h3>
        <p class="dato">9 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Er du nysgerrig på hvad Danmarks næste radiotalenter kan? TALENT giver ordet til unge med lyst til at fortælle. </p>
        <p class="genre">Samfund og kultur</p>
        </article>

<article>
    <div class="tidspunkt">10:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/tourbussen-2.jpg" alt="tourbussen podcast">
    </article>
    <article>
        <p class="podcast">tourbussen</h3>
        <p class="dato">9 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">Kom med i tourbussen, hvor Ekspressen turnerer landet rundt og fortæller røverhistorier fra musikerlivet på landevejen.</p>
        <p class="genre">Kunst</p>
        </article>
    
<article>
    <div class="tidspunkt">11:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/boblen-2.jpg" alt="boblen podcast">
    </article>
    <article>
        <p class="podcast">boblen</h3>
        <p class="dato">9 maj 21</p>
        <p class="tid">1 t.</p>
        <p class="beskrivelse">Hvordan kan økonomi, litteratur og jura give os svar på hvordan verden hænger sammen? I Boblen vil vi ikke lade eksperterne sidde alene med svarene.</p>
        <p class="genre">Samfund og kultur</p>
        </article>
        
<article>
    <div class="tidspunkt">12:30</div>
</article>
<article>
        <img class="billede" src="http://malthekusk.one/kea/loud/wordpress/wp-content/uploads/2021/04/deltpånettet-2.jpg" alt="delt på nettet podcast">
    </article>
    <article>
        <p class="podcast">delt på nettet</h3>
        <p class="dato">9 maj 21</p>
        <p class="tid">1 t. og 30 min.</p>
        <p class="beskrivelse">Camilla Michelle Mikkelsen og Kevin Shakir har sat sig for at undersøge, hvem det er, der deler og hvorfor, de gør det. </p>
        <p class="genre">Samfund og kultur</p>
        </article>
    </div>

</div>






<style>

.alg_back_button_input {
    margin-top: -13.5rem;
    margin-left: -1rem;
}


/*** styling af header ***/
#primary{
    margin-top:0;
}

.singular .entry-header{
border: none;
margin: 0 auto;
padding:0;
}

.site-main article .entry-footer {
    margin-top: 0;
    padding-top: 0;
    padding-bottom:0;
    border-bottom:none;
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
    display: flex;
    justify-content: space-between;
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
    /* transition: max-height 1s ease-out; */

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

/* .dagsplan article{
    border-bottom:1px solid black;
}  */

.dagsplan article:nth-child(3n+1){
	place-self:center !important;
}

.dagsplan article:nth-child(3n+2){
	place-self:center !important;
}

.tidspunkt{
    grid-column:1/span 1;
    letter-spacing:.07rem;
    font-size: .9rem;
    font-weight: 400;
}

.billede{
    width:100%;
    grid-column:2/span 1;
	padding: 10px 0 10px;
}

.podcast, .dato, .genre{
    grid-column:3/span 1;
    padding-left: 10px;
    font-size:.8rem;
}

.podcast{
    padding-top:10px;
    text-decoration:bold;
    letter-spacing:.07rem;
    font-weight: 600 !important;
}

.tid, .beskrivelse{
    /* tid+beskrivelse skal ikke vises i mobil */
    display:none;
}

.genre{
    padding: 15px 0 15px 10px;
    color:#a9a9a9;
    font-weight: 500 !important;
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
    margin:0 320px 50px !important;
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

.active h3{
    color:white;
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

.dagsplan article:nth-child(3n+3){
	padding-right: 30px;
}

.billede{
    grid-column:2/span 1;
    width: 90%;
	padding: 20px;
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
    display:block;
    font-size:.8rem;
    padding-left:10px;
    text-transform:none;
}

} /* end of @media */


</style>









<script>

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

// var dato = new Date();
// document.querySelector(".dag").textContent += dato.toDateString();

</script>



<?php
get_template_part( 'template-parts/footer/player' );
get_footer();
?>
