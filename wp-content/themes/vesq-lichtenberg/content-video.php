<?php

$video_feature_titel		= get_field ('video_feature_titel');
$interview_video			= get_field ('interview_video'); 

?>


<!-- VIDEO FEATURE
	================================================== -->
	<section id="video-feature">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2><?php echo $video_feature_titel; ?></h2>
					<iframe width="100%" height="415" src="<?php echo $interview_video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div><!-- end col -->
			</div><!-- row -->			
		</div><!-- container -->
	</section><!-- featurette -->