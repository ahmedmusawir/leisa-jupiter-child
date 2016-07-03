<!DOCTYPE html>
<html <?php echo language_attributes();?> >
<head>
    <?php wp_head(); ?>
</head>

<header id="header" class="">

	<img class="img-responsive large" src="/wp-content/uploads/2016/07/header-img-1920x890.jpg" alt="">
	<img class="img-responsive medium" src="/wp-content/uploads/2016/07/header-img-1920x1200.jpg" alt="">
	<!-- <img class="img-responsive" src="/wp-content/uploads/2016/04/Cover-Photo.jpg" alt=""> -->

	<section class="header-txt-block">
		
		<article class="txt-content">
			<h1>Want to Create the <br>
			 Business of Your <br>
			 Dreams?</h1>

			 <h3>If so, I will show you how ...</h3>
			 <h2><a class="btn btn-success btn-lg btn-block" href="http://www.wealthclinic.com/wealth-flower-opt-in/" target="_blank">FIND OUT MORE</a></h2>

		</article>

	</section>
	
</header><!-- /header -->

<body <?php body_class(mk_get_body_class(global_get_post_id())); ?> <?php echo get_schema_markup('body'); ?> data-adminbar="<?php echo is_admin_bar_showing() ?>">

	<?php
		// Hook when you need to add content right after body opening tag. to be used in child themes or customisations.
		do_action('theme_after_body_tag_start');
	?>

	<!-- Target for scroll anchors to achieve native browser bahaviour + possible enhancements like smooth scrolling -->
	<div id="top-of-page"></div>

		<div id="mk-boxed-layout">

		<!-- <h1>The lovely Moose</h1> -->

			<div id="mk-theme-container" <?php echo is_header_transparent('class="trans-header"'); ?>>

				<?php mk_get_header_view('styles', 'header-'.get_header_style());