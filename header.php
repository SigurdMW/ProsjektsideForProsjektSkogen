<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Prosjekt Skogen</title>
	<meta name="author" content="Sigurd Moland Wahl" />
	<meta name="description" content="Prosjekt Skogen skal gjøre pensumbøker billigere for studenter flest. Lær mer her!" />
	<meta name="keywords"  content="pensumbøker,skolebøker,student,billig" />
	<meta name="Resource-type" content="Document" />
	 <meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/fonts/awesome/css/font-awesome.min.css" />

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
	
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/jquery.fullPage.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.fn.fullpage({
				slidesColor: ['#2ecc71', '#3498db', '#ffffff','#3498db','whitesmoke', '#9b59b6'],
				anchors: ['Hjem', 'Prosjektet', 'Fremgang', 'Blogg', 'Om-Oss', 'Kontakt'],
				menu: '#menu',
				resize: false,
				scrollingSpeed: 800,
				slideAnchor: ['slide1', 'slide2', 'slide3', 'slide4', 'slide5'],
				loopTop: true,
				loopBottom: true,
				css3: true,
				'onLeave': function(index){
					if(index == 5){
						$('#menu, #moveright, #moveleft').removeClass('DisplayNoneSig');
						$('#omossoverskr').removeClass('VisabilityHiddenSig');
						$('#moveright').removeClass('skyvtilhoyre');
						$('#moveleft').removeClass('skyvtilvenstre');
						$('#detaljerRoy, #detaljerSig').removeClass('detaljerVis');
						$('#detaljerRoy, #detaljerSig').removeClass('zindexshow');
					}	
					if(index == 6){
						$('#kontakt-holder').removeClass('skyv-kontakt-holder');
						$('#detaljerIntressert').removeClass('detaljerInteressertVis');
						$('#detaljerIntressert').removeClass('detaljerInteressertBunn1');
						$('#menu').removeClass('DisplayNoneSig');
					}
				},
			});
		});
	</script>
	
	<style type="text/css">
	.fixedmeny {
		position:fixed;
		top:0;
		left:0;
		width:100%;
		z-index:9999;
	}
	
	/* dette skjuler menylinen */
	.menuTopskjult {
		position:absolute;
		top:-460px;
	}

	/* dette skjuler "om roy" og "om sigurd" */
	.zindexhidden {
		z-index:-999;
	}
	
	/* dette vise "om roy" og "om sigurd" */
	.zindexshow {
		z-index:999 !important;
	}

	/* dette skjuler detaljerinteressert */
	.detaljerskjul {	
		position:absolute;
		bottom:-400px;
	}
	</style>
</head>
<body>
<div id="menu" class="fixedmeny">