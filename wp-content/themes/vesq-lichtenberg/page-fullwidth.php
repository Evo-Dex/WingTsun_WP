<?php
/* Template Name: Full-width Template */	
		
$thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
get_header();
?>

<!-- FEATURE IMAGE
================================================== -->

<?php if ( has_post_thumbnail() ) { ?>

<section class="feature-image feature-image-default" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background">
	<h1 class="page-title"><?php the_title(); ?></h1>
</section>

<?php } else { // Fallback image ?>

<section class="feature-image feature-image-default" data-type="background">
	<h1 class="page-title"><?php the_title(); ?></h1>
</section>

<?php } ?>

<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			
			<section class="main-content">
				
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php the_content(); ?>
					
				<?php endwhile; // end of the loop ?>
				
			</section><!-- main-content -->
			
		</div><!-- content -->
	</div><!-- row -->
</div><!-- container -->

<!-- MAPS
	================================================== -->
	<section id="maps" data-type="background" data-speed="7">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2" id="maps-window">
					<div class="col-sm-6">
					<h3><strong>VESQ Kampfkunstschule Lichtenberg</strong></h3>
					<p>Adresse: Treskowallee 78 <br>10318 Berlin <br><br>
					Anfahrt: S-Bahn Karslhorst (ca 10min Fußweg) / U-Bahn Tierpark (ca 15min Fußweg)</p>
					<p><a href="tel:+4917672174908" class="btn btn-lg btn-block btn-success">jetzt anrufen!</a>
					</p>
					</div>
					
				<div class="col-sm-6" id="googlemaps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6824.649646342221!2d13.522264676986826!3d52.485245240020426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a848d7de609e8f%3A0xd05cbb09430e89d9!2sVESQ-Schule+Lichtenberg!5e0!3m2!1sde!2sde!4v1557737521730!5m2!1sde!2sde" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div><!-- googlemaps -->
				
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- maps -->


<?php get_footer(); ?>