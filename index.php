<?php get_header(); ?>
 <button class="menyKnapp" id="showTop"><i class="fa fa-bars"></i></button>
		<nav class="menuTopskjult" id="menuTop">
			<ul>
				<li><div class="lukkMenyKnapp" id="lukkMeny"><i class="fa fa-times-circle"></i></div><hr /></li><!---
				---><li data-menuanchor="Hjem" class="active"><a href="#Hjem">Hjem</a><hr /></li><!---
				---><li data-menuanchor="Prosjektet"><a href="#Prosjektet">Prosjektet</a><hr /></li><!---
				---><li  data-menuanchor="Fremgang"><a href="#Fremgang">Fremgang</a><hr /></li><!---
				---><li data-menuanchor="Blogg"><a href="#Blogg">Blogg</a><hr /></li><!---
				---><li data-menuanchor="Om-Oss"><a href="#Om-Oss">Om Oss</a><hr /></li><!---
				---><li data-menuanchor="Kontakt"><a href="#Kontakt">Kontakt</a><hr /></li>
			</ul>
		</nav>
</div>

<div class="section active" id="section0">
	<div class="intro">
		<img src="<?php bloginfo('template_directory') ?>/assets/skogen3d4.png">
		<h1>Velkommen</h1>
		<p>Velkommen til prosjektsiden for Prosjekt Skogen. Ta en titt dersom du vil lese om prosjektet, fremgangen eller kontakte oss.</p>
		<a href="#Prosjektet">
			<button id="page-downSig" class="bounce-eff">
				<i class="fa fa-angle-down"></i>
			</button>
		</a>
	</div>
</div>

<div class="section" id="section1">
    <div class="slide active" data-anchor="slide1">
		<div class="intro">
			<h1><i class="fa fa-chevron-circle-right"></i></h1>
			<h2>Se hvorfor vi kommer til å lykkes</h2>
			<button class="startPresentasjon toSlide" data-index="2">Start presentasjon <i class="fa fa-angle-double-right"></i></button>
		</div>
	</div>
    
	<div class="slide" data-anchor="slide2">
		<div class="intro">	
			<h1>Våre pillarer</h1>
			<p>Prosjekt Skogen bygger på at Studentene skaffer seg pensum kjappere og billigere. Prosjektet bygger samtidig på miljø, studenters engasjement og en genuin interesse for internetts nye plattformer.				
			</p>
			<div class="slideControl">
				<button class="slideControlbtn toSlide" data-index="1"><i class="fa fa-angle-double-left"></i> Forrige</button>
				<div class="slideNo">1/4</div>
				<button class="slideControlbtn toSlide" data-index="3">Neste <i class="fa fa-angle-double-right"></i></button>
			</div>
		</div>
	</div>
    
	<div class="slide" data-anchor="slide3">
		<div class="intro">
			<h1>Innovativt</h1>
			<p>Internett utvikler seg eksponentiellt og vi tror på å utvikle en plattform som er tilpasset alle enheter og som henger med i internetts rivende utvikling. 
			</p>
			<div class="slideControl">
				<button class="slideControlbtn toSlide" data-index="2"><i class="fa fa-angle-double-left"></i> Forrige</button>
				<div class="slideNo">2/4</div>
				<button class="slideControlbtn toSlide" data-index="4">Neste <i class="fa fa-angle-double-right"></i></button>
			</div>
		</div>
	</div>
    
	<div class="slide" data-anchor="slide4">
		<div class="intro">
			<h1>Visjon</h1>
			<p>Visjonen til Prosjekt Skogen er å skape en plattform for kjøp og salg av brukte bøker som studenter i hele Skandinavia kan benytte.
			</p>
			<div class="slideControl">
				<button class="slideControlbtn toSlide" data-index="3"><i class="fa fa-angle-double-left"></i> Forrige</button>
				<div class="slideNo">3/4</div>
				<button class="slideControlbtn toSlide" data-index="5">Neste <i class="fa fa-angle-double-right"></i></button>
			</div>
		</div>
	</div>
	<div class="slide" data-anchor="slide5">
		<div class="intro">
			<h1>Rendyrking</h1>
			<p>Prosjekt Skogen har valgt å rendyrke vårt konsept og henvender seg utelukkende mot studenter og omsetter kun faglitteratur.
			</p>
			<div class="slideControl">
				<button class="slideControlbtn toSlide" data-index="4"><i class="fa fa-angle-double-left"></i> Forrige</button>
				<div class="slideNo">4/4</div>
				<button class="slideControlbtn toSlide" data-index="1">Første <i class="fa fa-repeat"></i></button>
			</div>
		</div>
	</div>
</div>

<div class="section" id="section2">
	<div class="intro">
		<h1>Fremgang</h1>
		<p>Trykk på en av fasene under for mer informasjon.</p>	
		<div class="ps-fremgang">
			<div class="ps-prosjektlinje">
				<div class="prosjektfase1" id="prosjektfase1">
				</div>
				<div class="prosjektfase2" id="prosjektfase2">
				</div>
				<div class="prosjektfase3" id="prosjektfase3">
				</div>
				<div id="psCurrentPos">|</div>
			</div>
			<p id="fase1tekst" class=""><b>Idefasen</b> - I denne fasen har vi jobbet med å formulere hva vi jobber med, samle informasjon og satt rammene for prosjektet.
			</p>
			<p id="fase2tekst" class=""><b>Utviklingsfasen</b> - Dette er fasen vi er i akkurat nå. Vi jobber med å formalisere konseptet, lage arkitekturen for løsningen, konsept for brukergrensesnitt med mer.
			</p>
			<p id="fase3tekst" class=""><b>Markedslansering</b> - Utviklingsfasen leder til markedslansering som inkludere å formalisere samarbeid med partnere, sørge for inntekter
			</p>
		</div>
	</div>
</div>

<div class="section" id="section3">
	<div class="intro">
		<?php $the_query = new WP_Query( 'showposts=1' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<p><i>Publisert: <?php the_time('d.m.y'); ?></i></p>
		<p><?php the_excerpt(__('( )')); ?><a href="<?php the_permalink() ?>">[...]</a>
		</p>
		<p><br /><a href="www.prosjektskogen.no/blogg/" style="color:#fff;">Se alle blogginnlegg her</a>
		</p>
		<?php endwhile;?>
	</div>
</div>

<div class="section" id="section4">
	<div class="intro">
		<h1 id="omossoverskr" class="">Om oss</h1>
			<div id="moveright" class="about-left">
				<img src="<?php bloginfo('template_directory') ?>/assets/roy.jpg">
				<h2>Roy</h2>
					<p class="om-visible-ms-md">Roy er initiativtaker og student. I prosjektet jobber han med business concept, user experience og strategi.
					</p>
					<p class="om-visible-mob">Initiativtaker & student
					</p>
						<button id="detaljerRoyKnapp" class="testknapp"> </button>					
			</div>
			<div id="detaljerRoy" class="detaljerVisLeft zindexhidden">
				<h2><div id="detaljerLukkRoy"><i class="fa fa-times"></i></div>Om Roy Andre</h2>
				<p>Roy studerer Byggingeniør ved Høyskolen i Oslo og Akershus,  og har en lidenskap for internett og ny teknologi. Hans bakgrunn er fra et globalt nettbasert IT- selskap, hvor han for tiden har studiepermisjon samtidig som han ønsker å bidra positivt til sine medstudenter i Norden. Roy har erfaring av oppstart og drift av nettbaserte tjenster innenfor rubrikkmarkedet i Norge og internasjonalt. Hans oppgave i Prosjekt Skogen er å støtte opp under Sigurds arbeid med utvikling av internettsidene, i tillegg til å aktivt jobbe for å innvolvere studenter og legge til rette for at prosjektet kan realiseres på en god måte.
				</p>
			</div>
				<div id="moveleft" class="about-right">
						<img src="<?php bloginfo('template_directory') ?>/assets/sigurd.jpg">
						<h2>Sigurd</h2>
						<p class="om-visible-ms-md">Sigurd er ansvarlig for webutvikling, brukerreisen, tekniske løsninger, digital strategi og mye mer.
						</p>
						<p class="om-visible-mob">Initiativtaker & utvikler
						</p>
							<button id="detaljerSigKnapp" class="testknapp"> </button>
				</div>
				<div id="detaljerSig" class="detaljerVisRight zindexhidden">
					<h2><div id="detaljerLukkSig"><i class="fa fa-times"></i></div>Om Sigurd</h2>
					<p>Sigurd har en bachelor innen markedsføring fra Handelshøyskolen BI. Han har erfaring fra en rekke prosjekter, blant annet har han vært med å starte studenthuset Den lille legende i Drammen. Han jobber for tiden i markedsavdelingen i en stor internasjonal bedrift hvor han jobber mye med digitale flater. I tillegg sitter han på kompetanse innen front end development fra personlige prosjekter. Sentrale stikkord i hans kompetanse i prosjektet er HTML, CSS, PHP, JavaScript og Wordpress.
					</p>
				</div>
	</div>
</div>	

<div class="section" id="section5">
	<div class="intro">
	<div id="kontakt-holder" class="">
		<h1>Kontakt oss</h1>
		<p>Har du ideer, inspill, tips eller ønsker å komme i kontakt med oss, er du velkommen til å bruke følgende kontaktinformasjon:
		</p><br />
		
		<p>
			<i class="fa fa-envelope-o"></i> prosjektskogen@gmail.com<br />
			<i class="fa fa-instagram"></i> @prosjektskogen<br />
			<i class="fa fa-phone"></i> 911 28 859<br />
		</p><br />
		
		<button id="detaljerInteressertKnapp" class="startPresentasjon">Interessert i å være med?</button>
		<div id="detaljerIntressert" class="detaljerInteressert detaljerInteressertBunn detaljerskjul">
				<h2><div id="detaljerLukkInteressert"><i class="fa fa-times"></i></div>Takk for din interesse!</h2>
				<p>Vi ønsker å involvere enda fler og ønsker både studenter og andre med på laget. Vår største utfordring for tiden er oppbygging og utforming av en database og tilhørende funksjoner knyttet til behandling av bruker- og annonseinformasjon. Deler du vår interesse for personlig utvikling, gründerskap og ønsker å skape en tjeneste som forbedrer andres hverdag ønsker vi gjerne at du tar kontakt med oss!
				</p>
		</div>
	</div>
	</div>
</div>
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>