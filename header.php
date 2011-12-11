<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php wp_title('&raquo;','true','right'); ?><?php if ( is_single() ) { ?> Blog Archive &raquo; <?php } ?><?php bloginfo('name'); ?></title>

	<!-- Theme Stylesheets -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bg-slider.css" />

	<!-- Javascript Functionality -->
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>

	<!-- Javascript Initiation -->
	<script type="text/javascript">
		var mysiteurl = "<?php bloginfo('template_url'); ?>";
		$(document).ready(function(){
		
		});
	</script>

</head>
<!--[if IE ]><body class="ie"><![endif]-->
<!--[if IE 7 ]><body class="ie7"><![endif]-->
<!--[if !IE]><!--><body><!--<![endif]-->

<!--Content Area-->
<div id="content_wrapper">
	
	<!-- Top Menu -->
	<div id="myslidemenu" class="jqueryslidemenu">
		<?php mytheme_nav(); ?>
	</div>
	
	<div class="clear"></div>
	
	<!-- Background Image -->
	<div id="tf_loading" class="tf_loading"></div>
	<div id="tf_bg" class="tf_bg">
		<?php if( (is_page() && has_post_thumbnail( $post->ID )) || (is_single() && has_post_thumbnail( $post->ID ))) {
		$bg_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
		<img src="<?php echo $bg_image[0] ?>" alt="" />
		<?php } else { ?>
		<img src="<?php echo get_option('of_default_bg') ?>" alt="" />
		<?php } ?>
		<?php if(get_option('of_overlay_inner') == 'true') { ?><div class="tf_pattern"></div><?php } ?>
	</div>