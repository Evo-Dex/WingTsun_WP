<?php

$events_text				= get_field ('events_text');
$events_button_text			= get_field ('events_button_text');

?>

<!-- UPCOMING EVENTS
	================================================== -->
    <section id="optin">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8">
					<p class="lead"><?php echo $events_text; ?></p>
				</div><!-- end col -->
				
				<div class="col-sm-4">
					<a href="https://www.wt-lichtenberg.com/events/" class="btn btn-success btn-lg btn-block" role="button">
						<?php echo $events_button_text; ?>
					</a>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
    </section><!-- optin -->