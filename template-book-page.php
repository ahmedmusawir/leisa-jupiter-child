<?php
/* Template Name: Book Page Template
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

<!--=======================================
=   Da Moose is Loose Work With Me Page   =
========================================-->


<section id="book-page-block-1" class="">

	<figure class="content-wrapper">

		<div class="headline text-center wow zoomIn" data-wow-duration="2s" data-wow-delay="0s">
		<i class="fa fa-stack-overflow" aria-hidden="true"></i>
			<h1 class="title">Books to Inspire!</h1>
			<h1 class="details">
				Several FREE resources to help you break free of <br>
				the past and create the life and business of your dreams.
			</h1>

		</div>

	</figure>	

</section>

<section id="book-page-block-2" class="">

    <div class="download-box-container container-fluid">
	    	
		<div class="row">
			<article class="download-box-1 col-sm-4 col-md-4 col-lg-4">
				<figure>
					<!-- <a class="" href=""> -->
						<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/Wealth-Flower-Assessment-304x500.png" alt="" data-wow-duration="1s" data-wow-delay="0s">
					<!-- </a> -->
				</figure>
				<h2>
					THE WEALTH FLOWER ASSESSMENT 
				</h2>
				<h4>
					<a href="http://www.wealthclinic.com/wealth-flower-opt-in/" target="_blank"  class="btn btn-success btn-lg">DOWNLOAD NOW</a>
				</h4>					
			</article>
			<article class="download-box-1 col-sm-4 col-md-4 col-lg-4">
				<figure>
					<!-- <a class="" href="/books/"> -->
						<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/Money-Blocks-v2-326x500.png" alt="" data-wow-duration="1s" data-wow-delay=".5s">
					<!-- </a> -->
				</figure>
				<h2>
					BREAKING FREE OF YOUR MONEY BLOCKS
				</h2>
				<h4>
					<a href="https://sp185.infusionsoft.com/app/page/break-free-of-money-blocks"  target="_blank" class="btn btn-success btn-lg">DOWNLOAD NOW</a>
				</h4>					
			</article>
			<article class="download-box-1 col-sm-4 col-md-4 col-lg-4">
				<figure>
					<!-- <a class="" href="/books/"> -->
						<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/How-to-Break-Free-325x500.png" alt="" data-wow-duration="1s" data-wow-delay="1s">
					<!-- </a> -->
				</figure>
				<h2>
					HOW TO BREAK FREE OF YOUR MONEY FEARS
				</h2>
				<h4>
					<a href="https://sp185.infusionsoft.com/app/form/complimentary-e-book-request4" target="_blank"  class="btn btn-success btn-lg">DOWNLOAD NOW</a>
				</h4>					
			</article>		
		</div>
		<div class="row second-row">
			<article class="download-box-1 col-sm-4 col-md-4 col-lg-4">
				<figure>
					<!-- <a class="" href="/books/"> -->
						<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/8-Steps-v2-329x500.png" alt="" data-wow-duration="1s" data-wow-delay="0s">
					<!-- </a> -->
				</figure>
				<h2>
					8 STEPS TO MASTERING THE INNER GAME OF WEALTH 
				</h2>
				<h4>
					<a href="https://sp185.infusionsoft.com/app/form/8stepstomasteringinnergameofwealth" target="_blank"  class="btn btn-success btn-lg">DOWNLOAD NOW</a>
				</h4>					
			</article>
			<article class="download-box-1 col-sm-4 col-md-4 col-lg-4">
				<figure>
					<!-- <a class="" href="/books/"> -->
						<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/7-Ways-332x500.png" alt="" data-wow-duration="1s" data-wow-delay=".5s">
					<!-- </a> -->
				</figure>
				<h2>
					7 WAYS ENTREPRENEURS SABOTAGE THEIR BUSINESS 
				</h2>
				<h4>
					<a href="https://sp185.infusionsoft.com/app/form/complimentary-e-book-request"  target="_blank" class="btn btn-success btn-lg">DOWNLOAD NOW</a>
				</h4>					
			</article>
			<article class="download-box-1 col-sm-4 col-md-4 col-lg-4">
				<figure>
					<!-- <a class="" href="/books/"> -->
						<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/5-Simple-Steps-307x500.png" alt="" data-wow-duration="1s" data-wow-delay="1s">
					<!-- </a> -->
				</figure>
				<h2>
					FIVE SIMPLE STEPS TO CREATING WEALTH, MINDFULLY <br>
					<span class="label label-warning">Amazon #1 Bestseller</span>
				</h2>
				<h4>
					<a href="https://sp185.infusionsoft.com/app/form/default-campaign-form21"  target="_blank" class="btn btn-success btn-lg">DOWNLOAD NOW</a>
				</h4>					
			</article>		
		</div>
	</div>


</section>



<!--====  End of Da Moose is Loose  ====-->

<?php

get_footer();


