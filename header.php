<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cybersheathnew
 */

?>



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  
  <?php wp_head(); ?>

  <style> 



	<?php global $cyber; echo $cyber['ccss']; ?>



</style>
</head>
<body <?php body_class(); ?>>
  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <header>
    <div class="top-bar" style="background:<?php global $cyber; echo $cyber['bg-color']; ?>;">
      <div class="container">
        <div class="middle-area">
        	<?php 

			wp_nav_menu([
				'theme_location'	=> 'top-menu',
				'menu_class'		=> 'navbar-nav',
				'fallback_cb'		=> 'top_menu',

			]);

			 ?>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light header-top-fixed">
      <div class="container">
        <div class="middle-area">
          <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php global $cyber; echo $cyber['logoup']['url']; ?>" alt="" /></a>
          
          <div class="toogle-button">
            <a class="navbar-toggler" href="#navbarSupportedContent" id="toggle" data-toggle="collapse" ><span></span></a>
          </div>
          
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
			

			<?php 

			wp_nav_menu([
				'theme_location'	=> 'main-menu',
				'menu_class'		=> 'navbar-nav main-menu',
				'fallback_cb'		=> 'default_menu',

			]);

			 ?>

          </div>
        </div>
      </div>
    </nav>
  </header>