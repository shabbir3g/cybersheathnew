<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package cybersheathnew
*/
get_header(); ?>


<?php 

$topblog = isset($cyber['blog-top-bg']) ? $cyber['blog-top-bg'] : '' ;


if($topblog):  ?>

<div class="internal-banner-section" style="background-image: url(<?php echo $topblog['url']; ?>); ">
	<div class="jumbotron">
		<div class="container">
			<div class="middle-area">
				<div class="banner-cont">
					<h1><span><?php echo '<a href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">'.get_the_title( get_option("page_for_posts", true) ).'</a>'; ?><?php  ?></span></h1>
					
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="internal-cheath">
	<div class="container">
		<div class="middle-area">
			<?php while(have_posts()): the_post(); ?>
			<div class="row single-post-blog">
				<div class="col-md-3 blog-image"> 
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<div class="col-md-9 blog-content"> 
					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					<p><?php echo wp_trim_words(get_the_content(), 25, false); ?></p>
					<div class="meta-section"> 
						<div class="time-section"> 
							<div class="time-icon"></div><span>
<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>

</span>
						</div>
						<div class="share-section"> 
							<a href="<?php the_permalink(); ?>"><div class="share-icon"></div></a>
						</div>
					</div>
					<hr>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>


<?php get_footer();