<?php get_header(); ?>
	
	<!-- Content -->
	<div id="content" class="container_12 clearfix <?php echo get_option('of_layout'); ?>">
	
		<!-- Left Sidebar -->
		<?php get_sidebar(); ?>
		
		<!-- Main Content -->
		<div id="inner_content" class="grid_7">			
			<?php if ( have_posts() ) : the_post(); ?>
			<h1 class="pagetitle"><?php the_title(); ?></h1>
			<div class="post_area">
				<?php the_content(''); ?>
			</div>
			<?php else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>

<!-- Footer -->
<?php get_footer(); ?>