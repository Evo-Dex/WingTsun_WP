<?php

$instructor_section_titel	= get_field ('instructor_section_titel');
$instructor_name			= get_field ('instructor_name');
$biographie_auszug			= get_field ('biographie_auszug');
$biographie					= get_field ('biographie');
$anzahl_schueler			= get_field ('anzahl_schueler');
$anzahl_kurse				= get_field ('anzahl_kurse');
$random_zahl				= get_field ('random_zahl');

?>

<!-- INSTRUCTOR
	================================================== -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6" id="instructor-info">
					<div class="row">
						<div class="col-lg-10">
							<h2><?php echo $instructor_section_titel; ?> <small><?php echo $instructor_name; ?></small></h2>
						</div><!-- end col -->
					</div><!-- row -->
					
					<p class="lead"><?php echo $biographie_auszug; ?></p>
					
					<?php echo $biographie; ?>
					
					<hr>
					
					
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $anzahl_schueler; ?><span>Schüler</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $random_zahl; ?> <span>Jahre Erfahrung</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $anzahl_kurse; ?> <span>Kurse</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- instructor -->