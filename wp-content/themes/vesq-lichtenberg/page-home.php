<?php
/*
    Template Name: Home Page
 */

// Advanced Custom Fields


$testimonial_titel			= get_field ('testimonial_titel');
$testimonial_beschreibung	= get_field ('testimonial_beschreibung');

get_header(); ?>

<?php get_template_part('content','hero'); ?>
    
<?php get_template_part('content','optin'); ?>
    
<?php get_template_part('content','general'); ?>

<?php get_template_part('content','who'); ?>

<?php get_template_part('content','community'); ?>

<?php get_template_part('content','video'); ?>


	
	
	
	
	
	<!-- TESTIMONIALS
	================================================== -->
	<section id="kudos">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8 col-sm-offset-2">
					<h2><span style="color: #fdcd1c;"><?php echo $testimonial_titel; ?></span><br><br>
					<?php echo $testimonial_beschreibung; ?></h2>
					
					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-6">
							<iframe width="560" height="200" src="https://www.youtube.com/embed/F6x-2lWAU9M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><!-- end video -->
						</div><!-- end col -->
						
					<div class="col-sm-6">
							<iframe width="560" height="200" src="https://www.youtube.com/embed/mSSMc0WL0no" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><!-- end video -->
						</div><!-- end col -->	
					</div><!-- row -->
					
					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-6">
							<iframe width="560" height="200" src="https://www.youtube.com/embed/3WQ3UV_KDDE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><!-- end video -->
						</div>
						<div class="col-sm-6">
							<iframe width="560" height="200" src="https://www.youtube.com/embed/EBSDKmnOJ8o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><!-- end video -->
						</div><!-- end col -->
					</div><!-- row -->
					
					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-6">
							<iframe width="560" height="200" src="https://www.youtube.com/embed/zesCxgpZFwA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><!-- end video -->
						</div>
						<div class="col-sm-6">
							<iframe width="560" height="200" src="https://www.youtube.com/embed/0TEbJgIBC1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><!-- end video -->
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- kudos -->
	
	
	<!-- SCROLL TO TOP
	================================================== -->
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
 

<?php get_footer();?>
