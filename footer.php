<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package cybersheathnew
*/
?>
<footer class="footer-area" style="  background: <?php global $cyber; echo $cyber['fbc']; ?>; color: <?php global $cyber; echo $cyber['ftc']; ?>;">
	<div class="container">
		<div class="middle-area">
			<div class="footer-title-border"></div>
			<div class="row footer-widgets">

				<?php dynamic_sidebar('footer-widget'); ?>
			



			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>