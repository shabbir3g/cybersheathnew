<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package cybersheathnew
*/
get_header(); ?>

<div class="internal-post-cheath">
	<div class="container">
		<div class="middle-area">
			<?php while(have_posts()): the_post(); ?>
			<div class="row single-post-blog">
				<div class="col-md-12 blog-content-single">
					<div class="title-blog"> 
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					</div>
					<div class="meta-section">
						<div class="time-section">
							<div class="time-icon"></div><span>2 Hours ago</span>
						</div>
					</div>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<?php the_content(); ?>
					
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer();