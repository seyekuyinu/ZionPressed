<?php get_header(); ?>
	
	<!-- Content -->
	<div id="content" class="container_12 clearfix <?php echo get_option('of_layout'); ?>">
	
		<!-- Left Sidebar -->
		<?php get_sidebar(); ?>
		
		<!-- Main Content -->
		<div id="inner_content" class="grid_7">
			<h1 class="pagetitle">Sorry..That Page Doesn't Exist</h1>
			<div class="post_area">
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<?php get_footer(); ?>