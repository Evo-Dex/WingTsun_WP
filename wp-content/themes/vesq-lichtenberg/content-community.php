<?php

$community_titel			= get_field ('community_titel');
$community_body				= get_field ('community_body');

$facebook_username			= get_field ('facebook_username');
$googleplus_username		= get_field ('googleplus_username');
$instagram_username			= get_field ('instagram_username');
$youtube_username			= get_field ('youtube_username');
?>


<!-- VESQ COMMUNITY
	================================================== -->
	<section id="vesq-community">
		<div class="container">
		
							
			<?php if(!empty($facebook_username) ): ?>
				<a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
			<?php endif; ?>
						
			<?php if(!empty($youtube_username) ): ?>
				<a href="https://www.youtube.com/user/<?php echo $youtube_username; ?>" class="badge social youtube" target="_blank"><i class="fa fa-youtube"></i></a>
			<?php endif; ?>
							
			<?php if(!empty($googleplus_username) ): ?>
				<a href="https://plus.google.com/+<?php echo $googleplus_username; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
			<?php endif; ?>
			
			<?php if(!empty($instagram_username) ): ?>
				<a href="https://www.instagram.com/<?php echo $instagram_username; ?>" class="badge social instagram" target="_blank"><i class="fa fa-instagram"></i></a>
			<?php endif; ?>
			
			<h2><span style="color: #fdcd1c;"><?php echo $community_titel; ?></span></h2>
			
			<p class="lead"><?php echo $community_body; ?></p>
			
			
			<div class="row">
	
					<?php $loop = new WP_Query ( array( 'post_type' => 'community_angebot', 'orderby' => 'post_id', 'order'=> 'ASC')); ?>
					
					<?php while ($loop->have_posts() ): $loop->the_post(); ?>
					
					<div class="col-sm-4">
					
					<?php 
						if (has_post_thumbnail()) {
							the_post_thumbnail();
						}
					?>
					
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
					</div><!-- col -->
					
					<?php endwhile; ?>
					
					<?php wp_reset_query(); ?>
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- project-features -->