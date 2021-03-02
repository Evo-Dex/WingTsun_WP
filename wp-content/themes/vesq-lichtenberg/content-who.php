<?php

$who_benefits_title			= get_field ('who_benefits_title');
$who_benefits_body			= get_field ('who_benefits_body');

?>


<!-- WHO BENEFITS
	================================================== -->
	<section id="who-benefits">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-xs-12">
					<h2><?php echo $who_benefits_title; ?></h2>
					
					<?php echo $who_benefits_body; ?>
					
				</div><!-- end col -->
			</div><!-- row -->

		</div><!-- container -->
	</section><!-- who-benefits -->