<!DOCTYPE html>
<html <?php echo language_attributes();?> >
<head>
    <?php wp_head(); ?>
</head>

<?php $page_header_image = get_field( 'page_header_image' ); ?>

<header id="header" class="">


		<?php if ( is_front_page() || is_home() || is_single() || is_archive() || is_search() || is_404() ) : ?>

			<!-- <img class="img-responsive large" src="/wp-content/uploads/2016/07/header-img-1920x890.jpg" alt=""> -->
			<!-- <img class="img-responsive medium" src="/wp-content/uploads/2016/07/header-img-1920x1200.jpg" alt=""> -->
			<!-- <img class="img-responsive" src="/wp-content/uploads/2016/04/Cover-Photo.jpg" alt=""> -->
			<style type="text/css" media="screen">
				#header {
					/*background: url("/wp-content/uploads/2016/07/frontpg-header-new-leisa-meditation.jpg") no-repeat center center fixed;*/
					background: url("<?php echo $page_header_image; ?>") no-repeat top center fixed;

				  -webkit-background-size: cover;

				  -moz-background-size: cover;

				  -o-background-size: cover;

				  background-size: cover;	
				}

				@media ( max-width: 800px ) {
		
					#header {
						background: url("/wp-content/uploads/2016/07/header-img-2-800.jpg") no-repeat top center;
					}
				}	
			</style>	

			<section class="header-txt-block">
				
				<article class="txt-content">
					<h1>Want to Create the <br>
					 Business of Your <br>
					 Dreams?</h1>

					 <h3>If so, I will show you how ...</h3>
					 <h2><a class="btn btn-success btn-lg" href="http://www.wealthclinic.com/wealth-flower-opt-in/" target="_blank">FIND OUT MORE</a></h2>

				</article>

			</section>
			
		<?php else : ?>

			<style type="text/css" media="screen">
				@media ( min-width: 1024px ) and ( max-width: 1120px ) {
					#header {

						min-height: 600px ;
					}
				}
			</style>
			
			<img class="img-responsive" src="<?php echo $page_header_image; ?>" alt="tiana img">
		<?php endif; ?>

	
</header><!-- /header -->

<body <?php body_class(mk_get_body_class(global_get_post_id())); ?> <?php echo get_schema_markup('body'); ?> data-adminbar="<?php echo is_admin_bar_showing() ?>">

	<?php
		// Hook when you need to add content right after body opening tag. to be used in child themes or customisations.
		//do_action('theme_after_body_tag_start');
	?>

	<!-- Target for scroll anchors to achieve native browser bahaviour + possible enhancements like smooth scrolling -->
	<div id="top-of-page"></div>

		<div id="mk-boxed-layout">

			<div id="mk-theme-container" <?php echo is_header_transparent('class="trans-header"'); ?>>

				<?php mk_get_header_view('styles', 'header-'.get_header_style());