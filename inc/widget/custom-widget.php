<?php 


	class koncept_custom_widget extends WP_Widget{
		
		
		
		public function __construct(){
			
			
			parent::__construct('koncept_custom_widget','Custom Blog',array(
				'description'	=> 'You can add your Custom Blog here'
			));
			
			
		}
		
		public function widget($first, $second){

		$postnum = $second['postnum'];
		$title = $second['title'];

		?>
			
		<div class="col-md-6 footer-widget">
			<h2><?php echo $title; ?></h2>
			
		<?php 


		$widgetpost = new WP_Query(array(
			'post_type'			=> 	'post',
			'posts_per_page'	=> 	$postnum,
		));

		while($widgetpost->have_posts()): $widgetpost->the_post();  ?>
		<p><?php the_title(); ?></p>
		<?php endwhile; ?>
			
		</div>



		<?php 
			
		}
			
			
			
		public function form($second){
			
			
			$title = isset( $second['title'] ) ? $second['title'] : '';
			
			$postnum = isset( $second['postnum'] ) ? $second['postnum'] : '';


			
			?>
			
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>">Title</label> 
				<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
			</p>
			
			<p>
				<label for="widget-recent-posts-4-number">Number of posts to show:</label>
				<input class="tiny-text" id="<?php echo $this->get_field_id('postnum'); ?>" name="<?php echo $this->get_field_name('postnum'); ?>" step="1" min="1" value="<?php echo $postnum; ?>" size="3" type="number">
			</p>
			
			
			<?php 
			
			
			
		}
		
		
	}
	

	
	add_action('widgets_init',function(){
		
		
		
		register_widget('koncept_custom_widget');
		
		
		
		
	});





?>