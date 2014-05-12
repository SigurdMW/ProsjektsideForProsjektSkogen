<!doctype html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php the_title();  ?> | prosjektskogen.no</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">   
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/custom.css">
</head>
<body>
<div class="ps_container">
	<div class="row header">
			<a class="ps-logo" href="http://prosjektskogen.no">
					<img src="<?php bloginfo('template_directory') ?>/assets/skogen3d4.png" /> Prosjekt Skogen
			</a>
	</div>
<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
		<h1><?php the_title(); ?></h1>
	</div>
	

	<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
		<p class="post-author">Skrevet av <?php the_author();?><br />
		<i><?php the_time('d.m.y') ?></i></p>
	</div>
	
	<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
		<p class="post-content"><?php the_content(); ?></p>
	</div>

<?php wp_link_pages(array('before' => '<p><strong>Sider:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<!--- the_tags( '<p>Tags: ', ', ', '</p>'); --->

<?php if(function_exists('wp_print')) { print_link(); } ?>

</div>

<div class="row">
<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
<?php comments_template(); ?>

<?php endwhile; else: ?>

<p>Ingen kommentarer.</p>

<?php endif; ?>
</div>
</div>
</div>
</body>
</html>