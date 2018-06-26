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

 global $cyber;

?>

<?php if($cyber['ftopbg']):  ?>
<div class="discover-cta" style="background: url(<?php echo $cyber['ftopbg']['url']; ?>);" >
    <div class="container">
      <div class="middle-area">
        <div class="row">
          <div class="col-lg-10 col-md-9">
            <div class="disc"><?php echo $cyber['footer-top-cont']; ?></div>
          </div>
          <div class="col-lg-2 col-md-3 ">
            <div class="contact-us">
              <a href="<?php echo $cyber['footer-top-button']['url']; ?>"><?php echo $cyber['footer-top-button']['label']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>

<footer class="footer-area" style="  background: <?php echo $cyber['fbc']; ?>; color: <?php echo $cyber['ftc']; ?>;">
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