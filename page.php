<?php
/*
Template Name: BloggCustomPage
*/
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>blogg | prosjektskogen.no</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">   
		
	<!-- STYLESHEETS -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/bootstrap.min.css">		
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/custom.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/fonts/awesome/css/font-awesome.min.css">
</head>
<body>
<div class="ps_container">
	<div class="row header">
			<a class="ps-logo" href="http://prosjektskogen.no">
					<img src="<?php bloginfo('template_directory') ?>/assets/skogen3d4.png" /> Prosjekt Skogen
			</a>
	</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<h1>Prosjektbloggen</h1>
		<p>Velkommen til bloggen for Prosjekt Skogen. Her vil vi poste innlegg om alt fra utvikling og fremgang i prosjektet, til saker som vi er engasjert i. God lesning!
		</p>
		<hr />
	</div>
</div>

	<div class="row">
		<?php $the_query = new WP_Query( 'showposts=999' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<div class="col-md-4 col-sm-6 col-xs-12 ps-post">
					<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
					<p><i><?php the_time('d.m.Y'); ?></i></p>
					<p><?php the_excerpt(__('(…)')); ?></p>
				</div>	
			<?php endwhile;?>
	</div>
</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
	<script src="<?php bloginfo('template_directory') ?>/assets/main.js"></script>
    </body>
</html>


