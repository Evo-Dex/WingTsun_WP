<?php 

$banner_titel				= get_field ('banner_titel');
$banner_body				= get_field ('banner_body');
$banner_button_text			= get_field ('banner_button_text');


?>
   <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="3">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
    			
    				<div class="col-sm-5">
		    			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/VESQ-WingTsun.png" height="70%" width="70%" alt="vesq wingtsun" class="logo">
    				</div><!-- col -->
		    		
		    		<div class="col-sm-7 hero-text">
			    		<h1><?php echo $banner_titel; ?></h1>
			            <p class="lead"><?php echo $banner_body; ?></p>

			            <p><a class="btn btn-lg btn-danger" href="https://www.wt-lichtenberg.com/kontakt/" role="button"><?php echo $banner_button_text; ?> &raquo;</a></p>
			            
		    		</div><!-- col -->
		    		
    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    </section>
	