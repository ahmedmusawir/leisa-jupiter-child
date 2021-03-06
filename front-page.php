<?php
/*
** page.php
** mk_build_main_wrapper : builds the main divisions that contains the content. Located in framework/helpers/global.php
** mk_get_view gets the parts of the pages, modules and components. Function located in framework/helpers/global.php
*/

get_header();


// Mk_Static_Files::addAssets('mk_button'); 
// Mk_Static_Files::addAssets('mk_audio');
// Mk_Static_Files::addAssets('mk_swipe_slideshow');

// mk_build_main_wrapper( mk_get_view('singular', 'wp-page', true) );

?>

<?php 
/*======================================
=            ACf Varialbles            =
======================================*/

/* Block 1 : I love Enerprenures */
$block_1_text = get_field( 'block_1_text' );


/* Block 2 : 3 Boxes */
$left_box = get_field( 'left_box' );
$middle_box = get_field( 'middle_box' );
$right_box = get_field( 'right_box' );

/* Block 3 : Testimonial 1 */
$block3_testimonial_text = get_field( 'block3_testimonial_text' );
$block3_img = get_field( 'block3_img' );

/* Block 4 : How to success  */
$block_4_top_box = get_field( 'block_4_top_box' );
$block_4_bottom_box = get_field( 'block_4_bottom_box' );

/* Block 5 : Testimonial 2 */
$block_5_image = get_field( 'block_5_image' );
$block_5_testimonial_text = get_field( 'block_5_testimonial_text' );

/* Block 6 Bio  */
$block6_bio_text = get_field( 'block6_bio_text' );

/* Block 7 : Tesimonial 3 */
$block_7_image = get_field( 'block_7_image' );
$block_7_testimonial_text = get_field( 'block_7_testimonial_text' );

/* Block 8 : Book Block */
$block_8_left_content = get_field( 'block_8_left_content' );
$block_8_image = get_field( 'block_8_image' );
/*=====  End of ACf Varialbles  ======*/




?>

<!--=======================================
=            Da Moose is Loose Frontpage           =
========================================-->


<section id="block-1" class="block-1">
	<img class="img-responsive" src="http://www.leisapeterson.com/wp-content/uploads/2016/07/BLOCK-1.jpg" alt="">
</section>

<section id="block-2" class="block-2">

 <figure class="video-container">

	    <div class="text-content text-center featured-poem-1">

			<div class="container">
				<!-- <h3 style="text-align: center;">I 
				<i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>

				<em>Entrepreneurs</em></h3>
				<p style="text-align: center;">You’re in the right place if… <br>
					you want to stop craving the results you desire and start creating them.<br>
					including ...<br>
					peace of mind about the trajectory of your business<br>
					confidence to continue leading and inspiring others<br>
					and time to control your schedule and pursue your passions without worrying<br>
					about what’s going to happen next.<br>
				</p>				 -->

				<?php echo $block_1_text; ?>


			</div>
	   
	    </div>

	    <div class="download-box-container container-fluid">
	    	
			<div class="row">
				<article class="download-box-1 col-sm-4 col-md-4 col-lg-4">
		<!-- 					<figure>
						<a class="" href="/work-with-me/">
							<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/fp-block-1-img-1-with-txt.jpg" alt="" data-wow-duration="1s" data-wow-delay="0s">
						</a>
					</figure>
					<h4>
						I’m here to walk alongside you in discovering new ways of creating more wealth and abundance in your life and business. 
						
					</h4>
					
					<a class="btn btn-link btn-block text-center" href="/work-with-me/">Work With Me</a> -->


					<?php echo $left_box; ?>

					
				</article>
				<article class="download-box-1 col-sm-4 col-md-4 col-lg-4">
					
		<!-- 					<figure>
						<a class="" href="/retreat/">
							<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/fp-block-1-img-2-with-txt.jpg" alt="" data-wow-duration="1s" data-wow-delay=".5s">
						</a>
					</figure>
					<h4>
						Moving beyond a scarcity mindset allows you to be present to the truth that exists in each moment.  
						This fresh perspective allows you to let go of the fears and what ifs. 
						

					</h4>
					
					<a class="btn btn-link btn-block text-center" href="/retreat/">Join Me On Retreat</a>
					 -->
					<?php echo $middle_box; ?>	



				</article>
				<article class="download-box-1 col-sm-4 col-md-4 col-lg-4">

		<!-- 					<figure>
						<a class="" href="/books/">
							<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/fp-block-1-img-3-with-txt.jpg" alt="" data-wow-duration="1s" data-wow-delay="1s">
						</a>
					</figure>
					<h4>
						Through exploring your greatest expression of gifts, dreams and goals, 
						I assist you in uncovering new ways to contribute to your highest potential. 

					</h4>
					
					<a class="btn btn-link btn-block text-center" href="/books/">Start With a Free eBook</a> -->

					<?php echo $right_box; ?>
					
				</article>		
			</div>


	    </div>

  
  </figure>

	
</section>

<section id="block-3" class="block-3">

	<div class="container clearfix">
		
		<div class="col-sm-6 col-md-7 col-lg-7">

		<!-- 			<h2>
				T. HARV EKER, AUTHOR NEW YORK TIMES #1 BESTSELLER <span class="book-name">SECRETS OF THE MILLIONAIRE MIND</span>
			</h2>

			<i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
			
			<h4>
				Leisa lives a life of abundance. Her unique insights on bringing money and self-realization together into practical application empowers people to take big strides toward creating abundance in their own lives.
			</h4>

			<i class="fa fa-quote-right pull-right" aria-hidden="true"></i> -->

			<?php echo $block3_testimonial_text; ?>
			
		</div>

		<div class="col-sm-6 col-md-5 col-lg-5">
			
			<figure>
				
				<img class="img-responsive img-circle center-block zoomIn" src="<?php echo $block3_img; ?>" alt=""  data-wow-duration="2s" data-wow-delay="0s">
				<!-- <img class="img-responsive img-circle center-block zoomIn" src="/wp-content/uploads/2016/04/T-Harv.jpg" alt=""  data-wow-duration="2s" data-wow-delay="0s"> -->
				
			</figure>

		</div>

	</div>
	
</section>

<section id="block-4" class="block-4">

	<div class="container-fluid">
		
		<div class="col-sm-6 col-md-6 col-lg-6 content-block">
			<!-- 
			<article class="text-block text-left">
	
				<h2>HOW TO SUCCEED AT BUSINESS</h2>
				<h4>(WHEN REALLY TRYING…)</h4>

				<h5>Do you want to feel an ever-increasing sense of fulfillment, clarity and joy? (Who doesn't?)</h5>

				<h5>
					If you’re like most of my clients you’re striving to squeeze every ounce of satisfaction from your life.  But running a successful 
					business means you’re constantly hustling to keep up the momentum and reach you’ve earned.  You keep pushing because you know there is more.
				</h5>
				<br>
				<h5>
					<em>
					More potential in your business.<br>
					More potential in your relationships.<br>
					More potential within yourself.<br>
					</em>
				</h5>
				<br>
				<h5>
					So you set goal after goal.  Knock down one milestone after the next without ever stopping long enough to gain clarity on the best path forward.  
					Without ever actually getting closer to feeling the satisfaction, joy and fulfillment you desire.
				</h5>

			</article>
			<figure>
				
				<img class="img-responsive img-left zoomIn" src="/wp-content/uploads/2016/07/bottom-right.jpg" alt="" data-wow-duration="2s" data-wow-delay="0s">
				
			</figure> -->


				<?php echo $block_4_top_box; ?>

		</div>
		<div class="col-sm-6 col-md-6 col-lg-6 content-block">

			<!-- 			<figure>
				
				<img class="img-responsive img-right zoomIn" src="/wp-content/uploads/2016/07/top-left-950.jpg" alt="" data-wow-duration="2s" data-wow-delay="0s">
				
			</figure>
			<article class="text-block text-right">
				
				<h2>HAVE YOU EVER FELT ...</h2>

				<h5>That your list of things to accomplish actually grows with every item you scratch off?</h5>

				<h5>That the entire reason you became an entrepreneur was to create your own schedule and you rarely find time to spend with family, friends or heaven forbid...for yourself?</h5>

				<h5>That every financial milestone you’ve achieved doesn’t actually leave you feeling more secure?  In fact, managing money usually 
				leaves you with a knot in your stomach or a throbbing head.</h5>

				<h5>That you need a mentor who can guide you along the path to even greater fulfillment and success?  One who knows how to run 
				a million dollar company and cultivate a mindset that will help you achieve the peace of mind and freedom you desire?</h5>

			</article>		 -->

				<?php echo $block_4_bottom_box ?>

		</div>		


	</div>
	
</section>
<section id="block-3" class="block-3">

	<div class="container clearfix">

		<div class="col-sm-6 col-md-5 col-lg-5">
			
			<figure>
				
				<img class="img-responsive img-circle center-block zoomIn" src="<?php echo $block_5_image ?>" alt=""  data-wow-duration="2s" data-wow-delay="0s">
				<!-- <img class="img-responsive img-circle center-block zoomIn" src="/wp-content/uploads/2016/04/Bruce-Van-Horn-2.png" alt=""  data-wow-duration="2s" data-wow-delay="0s"> -->
				
			</figure>

		</div>	
		
		<div class="col-sm-6 col-md-7 col-lg-7">

			<!-- 			<h2>
				BRUCE VAN HORN, BESTSELLING AUTHOR AND HOST OF <span class="book-name">LIFE IS A MARATHON</span> PODCAST.
			</h2>

			<i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
			
			<h4>
				I’ve had the privilege of seeing first-hand how Leisa works to support people who are seeking to re-invigorate their life and their ​business. Her insightful and authentic style helps to guide people in the direction they want to go — so they can achieve their goals and much more.
			</h4>

			<i class="fa fa-quote-right pull-right" aria-hidden="true"></i> -->

			<?php echo $block_5_testimonial_text; ?>
			
		</div>

	</div>
	
</section>

<section id="block-5" class="block-5">

	<div class="container">
		<div class="col-sm-12 col-md-8 col-md-offset-4 col-lg-8 col-lg-offset-4">
			
				<!-- 			<article class="text-block">
				<h2>

					Hi. I'm <span class="orange">Leisa Peterson</span>, Entrepreneur <span class="orange">Coach</span>, Wealth <span class="orange">Mentor</span>, Mindfulness 
					<span class="orange">Teacher</span>, Best Selling <span class="orange">Author</span> and Host of the <span class="orange">Art of Mindful Wealth</span> podcast.  

				</h2>
				<h3>
					I'm really <span class="orange">glad</span> you're here.

				</h3>
			</article> -->

			<?php echo $block6_bio_text; ?>

		</div>
	</div>
	
</section>

<section id="block-3" class="block-3">

	<div class="container clearfix">
		
		<div class="col-sm-6 col-md-7 col-lg-7">

			<!-- 			<h2>
				HOLLY RILEY, BESTSELLING AUTHOR OF <span class="book-name">ALLOWING: A PORTRAIT OF FORGIVING AND LETTING LIFE LOVE YOU.</span>
			</h2>

			<i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
			
			<h4>
				Leisa is an inspiration to anyone within hearing distance.​ ​Her love for people makes it easy to open, discover, 
				and trust the clarity she shares. Leisa is a heart reader… intuitively guiding everyone to their perfect path for 
				manifesting choices.			
			</h4>

			<i class="fa fa-quote-right pull-right" aria-hidden="true"></i> -->

			<?php echo $block_7_testimonial_text; ?>
			
		</div>

		<div class="col-sm-6 col-md-5 col-lg-5">
			
			<figure>
				
				<img class="img-responsive img-circle center-block zoomIn" src="<?php echo $block_7_image; ?>" alt=""  data-wow-duration="2s" data-wow-delay="0s">
				<!-- <img class="img-responsive img-circle center-block zoomIn" src="/wp-content/uploads/2016/07/Best-sellingAuthorHollyRileywww.hollyriley.com_.jpg" alt=""  data-wow-duration="2s" data-wow-delay="0s"> -->
				
			</figure>

		</div>

	</div>
	
</section>

<section id="block-6" class="block-6">

	<div class="container-fluid clearfix">

		
		<div class="col-sm-6 col-md-8 col-lg-8">
			<!-- 
			<h2>
				<span class="book-name">SEND ME THE 7 WAYS ENTREPRENEURS SABOTAGE THEIR SUCCESS EBOOK RIGHT AWAY…</span>
			</h2>

			<a class="btn btn-success btn-block btn-lg" href="https://sp185.infusionsoft.com/app/form/complimentary-e-book-request" target="_blank">YES, SEND IT NOW!</a>	 -->

			<?php echo $block_8_left_content; ?>	
			
		</div>
		<div class="col-sm-6 col-md-4 col-lg-4">
			
			<figure>
				
				<img class="img-responsive center-block wow zoomIn" src="<?php echo $block_8_image; ?>" alt=""  data-wow-duration="2s" data-wow-delay="0s">
				<!-- <img class="img-responsive center-block wow zoomIn" src="/wp-content/uploads/2016/06/7-Ways.png" alt=""  data-wow-duration="2s" data-wow-delay="0s"> -->
				
			</figure>

		</div>			

	</div>
	
</section>


<!--====  End of Da Moose is Loose  ====-->

<?php

get_footer();


