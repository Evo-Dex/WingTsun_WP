<?php
/* 
    Template Name: Kursangebot Page
*/

get_header();

# Warnings von PHP unterdrücken
error_reporting(0);

$thumbnail_url 	= wp_get_attachment_url ( get_post_thumbnail_id($post->ID));

$stundenplan_titel			= get_field ('stundenplan_titel');
$stundenplan_timetable		= get_field ('stundenplan_timetable');

?>
    
	<!-- FEATURE IMAGE
	================================================== -->
	<?php if(has_post_thumbnail()) {//check for feature image ?>
	
	<section id="kursangebot" class="feature-image" style="background: url('<?php echo $thumbnail_url;?>') no-repeat; background-size: cover;" data-type="background">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section>
	
	<?php } else {//fallback image ?>
	
	<section id="kursangebot" class="feature-image feature-image-default" data-type="background">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section>
    
    <?php } ?>
    
    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	
			    	<?php while ( have_posts() ) : the_post(); ?>
			    	
			    		<?php the_content(); ?>
			    	
			    	<?php endwhile; //the end of the loop ?> 
			    	
			    	
			    	<?php $loop = new WP_Query( array( 'post_type' => 'kursangebot', 'order_by' => 'post_id', 'order' => 'ASC')); ?>
			    	
			    	<hr>
			    	
			    	<div class="resource-row clearfix">
			    	
			    		<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			    		
			    		<?php
						$kurs_image 		= get_field('kurs_image');
						$kurs_logo 			= get_field('kurs_logo');
						$kurs_button_text 	= get_field('kurs_button_text');
						$kurs_button_url 	= get_field('kurs_button_url');
						
						?>
			    		
				    	<div class="resource">
					    	
					    	<div class="resource-photo"><img src="<?php echo $kurs_image[url]; ?>"
					    	alt="<?php echo $kurs_image[alt]; ?>">
					    	</div>
					    	<br>
					    	<br>
					    	
					    	<div><img src="<?php echo $kurs_logo[url]; ?>"alt="<?php echo $kurs_logo[alt]; ?>"></div>
					    	<br>
					    	<?php the_content(); ?>
					    	
					    	<?php if (!empty($kurs_button_text) ): ?>
					    	
					    	<a href="<?php echo $kurs_button_url; ?>" class="btn btn-success"><?php echo $kurs_button_text; ?></a>
					    	
					    	<?php endif ;?>
				    	</div><!-- resource -->
				    	
				    	<?php endwhile; ?>
				    	
			    	</div><!-- resource-row -->
			    </section><!-- main content -->
		    	
		    </div><!-- content -->
	    	    
	    	<div id="stundenplan" class="col-sm-12">
	    	<h2><?php echo $stundenplan_titel; ?></h2>
	    	<p><?php echo $stundenplan_timetable; ?></p>
	    	
	    	
	    	
			</div><!-- #stundenplan -->
		    	    
	    </div><!-- primary-row -->
    </div><!-- container -->
	
	
	<!-- MAPS
	================================================== -->
	<div id="maps-kurse" data-type="background" data-speed="7">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2" id="maps-window">
					<div class="col-sm-6" style="padding-top: 15px;">
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
	</div><!-- maps-kurse -->


<?php get_footer(); ?>