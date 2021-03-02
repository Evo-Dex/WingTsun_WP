<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vesq_Webpage
 */

?>


<?php wp_footer(); ?>

<!-- FOOTER
	================================================== -->
	<footer id="footer-main">
		<div class="container">
			<div class="row justify-content-between">
			<div class="col-md-4">
				<p>Selbstverteidigung • Gesundheit • Sport</p>
			</div><!-- end col -->
			<div class="col-md-4" style="text-align: center;display: inline-block;">
				<?php
					wp_nav_menu(array(
						
						'theme_location' 	=>	'menu-2',
						'container'			=>	'nav',
						'menu_class'		=>	'list-unstyled list-inline',
						
					)
				);
						?>
			</div><!-- end col -->
			
			<div class="col-md-4" style="text-align: right">
				<p>&copy; <?php echo date ('Y'); ?> VESQ Lichtenberg</p>
			</div><!-- end col -->
			</div> <!-- end row --> 
		</div><!-- container -->
	</footer>


	

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
    <script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

