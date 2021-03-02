 <?php

$vesq_image					= get_field ('vesq_image');
$general_info_title			= get_field ('general_info_title');	
$general_info_description	= get_field ('general_info_description');
$allgemeines_untertitel_1	= get_field ('allgemeines_untertitel_1');
$allgemeines_beschreibung_1	= get_field ('allgemeines_beschreibung_1');
$allgemeines_untertitel_2	= get_field ('allgemeines_untertitel_2');
$allgemeines_beschreibung_2	= get_field ('allgemeines_beschreibung_2');

?>
 
 <!-- GENERAL INFO
	================================================== -->
	<section id="general-info">
		<div class="container">
			
			<div class="section-header">
			
				<!-- if user uploaded an image -->
				<?php if (!empty($vesq_image)): ?>
				
				<img src="<?php echo $vesq_image['url'];?>" alt="<?php echo $vesq_image['alt']; ?>" width="150">
					
				<?php endif;  ?>
				
				<h2><?php echo $general_info_title; ?></h2>
				
			</div><!-- section-header -->
			
			<p class="lead"><?php echo $general_info_description;?></p>
			<div class="row">
			
				<div class="col-sm-6">
					<h3><?php echo $allgemeines_untertitel_1; ?></h3><br>
					<p><?php echo $allgemeines_beschreibung_1; ?></p>
				</div><!-- end col -->
				
				<div class="col-sm-6">
					<h3><?php echo $allgemeines_untertitel_2; ?></h3><br>
					<p><?php echo $allgemeines_beschreibung_2; ?></p>
				</div><!-- end col -->
				
			</div><!-- row -->
		
		</div><!-- container -->
	</section><!-- general info -->