<!DOCTYPE html>
<html <?php echo language_attributes();?> >
<head>
    <?php wp_head(); ?>
</head>

<?php $page_header_image = get_field( 'page_header_image' ); ?>

<!-- THE HEADER MODAL CODE -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title text-center" id="myModalLabel">LEISAPETERSON.COM</h4>
	      </div>
	      <div class="modal-body">

			<section id="popup-form-click" class="">

				<div class="img-holder">
					<img class="img-responsive center-block" src="/wp-content/uploads/2016/07/Business-Flower-Assessment-Final_Img.png" alt="">
				</div>

				<article class="popup-text">
										
					<div class="title" style="text-align:left">
					   <div class="title" contentid="title" style="text-align: left;">
					      <div style="text-align: center;">
					        <h3 >The Business Flower Assessment Tool™</h3>
					      </div>
					      <div style="text-align: center;">
					         <h4 ></h4>
					      </div>
					         <p class="p1">
					            <em><span>A transformation planning process that helps you&nbsp;create exactly what you most want in your business.</span></em>
					         </p>
					         <span>&nbsp;</span>
					</div>
					<div style="text-align: center;">

						<article class="form-container">

							<form accept-charset="UTF-8" action="https://sp185.infusionsoft.com/app/form/process/4d63d81dd2b219ff9693137739b64a75" class="infusion-form" method="POST">
							    <input name="inf_form_xid" type="hidden" value="4d63d81dd2b219ff9693137739b64a75" />
							    <input name="inf_form_name" type="hidden" value="Complimentary E-Book Request" />
							    <input name="infusionsoft_version" type="hidden" value="1.55.0.63" />
							    <div class="infusion-field row">
								    <aside class="col-sm-12 col-md-12 col-lg-12 form-group">
								        <label class="text-center" for="inf_field_FirstName">First Name *</label>
								        <input class="infusion-field-input-container form-control" id="inf_field_FirstName" name="inf_field_FirstName" type="text" required />
								   	</aside>    
							    </div>
							    <div class="infusion-field row">
								    <aside class="col-sm-12 col-md-12 col-lg-12 form-group">
								        <label class="text-center" for="inf_field_Email">Email *</label>
								        <input class="infusion-field-input-container form-control" id="inf_field_Email" name="inf_field_Email" type="email" required  />
								   	</aside>    
							    </div>
							    <div class="infusion-submit row">
								    <aside class="col-sm-12 col-md-12 col-lg-12 form-group">
							        	<input id="modal-submit" class=" form-control" type="submit" value="Send Me The Toolkit" />
								   	</aside>    
							    </div>
							</form>
							<script type="text/javascript" src="https://sp185.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=e27219190973474128139cb2680ff6d0"></script>

						</article>

						</div>
					    <div style="text-align: center;">
					         <h4>In this toolkit, you'll discover:</h4>
					      </div>
					      <div style="text-align: center;">
					         <ul>
					            <li class="p1" style="text-align: left;">
					               <span data-mce-mark="1"> An easy-to-implement exercise designed to help you dig deep and create a clear vision for the business of your dreams.</span>
					            </li>
					            <li class="li1" style="text-align: left;">
					               <span data-mce-mark="1"> Used over and over to generate huge life affirming shifts in the way you run your business.</span>
					            </li>
					            <li class="li1" style="text-align: left;">
					               <span data-mce-mark="1"> A way to create alignment between your business and who you truly are.</span>
					            </li>
					            <li class="li1" style="text-align: left;">
					               <span data-mce-mark="1"> Improves your intentional powers, so you take motivated action on the projects that will bring you the greatest success.</span>
					            </li>
					            <li class="li1" style="text-align: left;">
					               <span data-mce-mark="1"> Creates the opportunity for huge expansion in your mindset, as well as, in the profitability of your business.</span>
					            </li>
					         </ul>
					      </div>
					   </div>
					</div>
	
				</article>
				
			</section>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>
	    </div>
	  </div>
	</div>					

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


				@media ( max-width: 1100px ) {
		
					#header {
						background: url("http://www.leisapeterson.com/wp-content/uploads/2016/06/header-img-2-1600.jpg") no-repeat top center;
					}
				}	
				@media ( max-width: 800px ) {
		
					#header {
						background: url("/wp-content/uploads/2016/07/header-img-2-800.jpg") no-repeat top center;
					}
				}	
			</style>	

			<section class="header-txt-block container-fluid">

				<div class="text-block-wrapper col-sm-8 col-md-6 col-lg-6">
					
					<article class="txt-content center-block">
						<h1>Want to Create the <br>
						 Business of Your <br>
						 Dreams?</h1>

						 <h3>If so, I will show you how ...</h3>
						 <br>
						 <h2>
						 	<!-- <a class="btn btn-success btn-lg" href="http://www.wealthclinic.com/wealth-flower-opt-in/" target="_blank">FIND OUT MORE</a> -->
							<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
							  FIND OUT MORE ...
							</button>				
						 </h2>

					</article>

				</div>

			</section>
			
		<?php else : ?>

			<style type="text/css" media="screen">
				@media ( min-width: 1024px ) and ( max-width: 1120px ) {
					#header {

						/*min-height: 600px ;*/
					}
				}
			</style>
			
			<img class="img-responsive" src="<?php echo $page_header_image; ?>" alt="tiana img">
		<?php endif; ?>

	
</header><!-- /header -->


<!-- THE FOOTER CONTACT MODAL CODE -->
	<!-- Modal -->
	<div class="modal fade" id="myFooterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title text-center" id="myModalLabel">LEISAPETERSON.COM</h4>
	      </div>
	      <div class="modal-body">

			<?php echo do_shortcode( '[contact-form-7 id="12531" title="Contact form 1"]' ); ?>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>
	    </div>
	  </div>
	</div>					

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