<?php get_header(); ?>
	
	<!-- Content -->
	<div id="content" class="container_12 clearfix">
	
		<!-- Sidebar -->
		<?php get_sidebar(); ?>
		
		<!-- Main Content -->
		<div id="inner_content" class="grid_7">			
			<?php if(!is_home()) { ?>	
			<h1 class="pagetitle no_border_pagetitle">
			<?php if(is_archive()) { ?>All posts in <?php wp_title(''); ?>
			<?php } else if (is_404()) { ?>Sorry, no posts here
			<?php } else { ?><?php wp_title(''); ?><?php } ?>
			</h1>
			<?php } ?>			
			
			<ul class="blog_articles">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li class="blog_article">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<div class="post_info">
						<p><span class="postdate"><?php the_time('M j, Y') ?></span>Posted by <?php the_author_link(); ?></p>
					</div>
					
					<div class="clear"></div>
					
					<div class="post_area">
						<?php the_content(''); ?>
					</div>
					
					<div class="post_info2">
						<h6>Comments  </h6><span class="postcomments"><?php comments_popup_link('No comments yet', '1 Comment &raquo;', '% Comments &raquo;'); ?></span>
						<div class="clear"></div>
						<h6>Tagged  </h6><span class="postcategories"><?php the_category(', '); ?></span>
					</div>
					
					<a class="read_more" href="<?php the_permalink(); ?>">Read more &raquo;</a>
					<div class="clear"></div>
				</li>			
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</ul>
			
			<div id="navigation">
				<?php if(function_exists('wp_pagenavi')) : { wp_pagenavi(); } ?>
				<?php else : ?>
				<?php posts_nav_link('&nbsp;|&nbsp;','&laquo; Newer Posts','Older Posts &raquo;'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<?php get_footer(); ?>