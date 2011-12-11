<?php
 
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
 
if ( post_password_required() ) { ?>
<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
return;
}
?>
 
<!-- You can start editing here. -->
 
<?php if ( have_comments() ) : ?>
<h4 class="comment-heading"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h4>
 
<div class="navigation">
<div class="alignleft"><?php previous_comments_link() ?></div>
<div class="alignright"><?php next_comments_link() ?></div>
</div>
 
<ol class="commentlist">
<?php wp_list_comments('callback=mytheme_comment'); ?>
</ol>
 
<div class="navigation">
<div class="alignleft"><?php previous_comments_link() ?></div>
<div class="alignright"><?php next_comments_link() ?></div>
</div>
<?php else : // this is displayed if there are no comments so far ?>
 
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
 
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>
 
<?php endif; ?>
<?php endif; ?>
 
<?php if ('open' == $post->comment_status) : ?>
 
<div id="respond">
 
<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>
 
<div class="cancel-comment-reply">
<?php cancel_comment_reply_link('Cancel Reply'); ?>
</div>

<div class="clear"></div>
 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
 
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
 
<?php if ( $user_ID ) : ?>
 
<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
 
<?php else : ?>

<p>
	<label for="author">Name:<span class="comment-required"><?php if ($req) echo " *"; ?></span></label>
	<input size="22" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" <?php if ($req) echo "required"; ?> />
	<span class="clear"></span>
</p>

<p>
	<label for="email">Email:<span class="comment-required"><?php if ($req) echo " *"; ?></span></label>
	<input size="22" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" <?php if ($req) echo "required"; ?> />
	<span class="clear"></span>
</p>

<p>
	<label for="url">Website:</label>
	<input size="22" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" />
	<span class="clear"></span>
</p>
	
<?php endif; ?>
 
<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
 
<label for="comment">Comment:<span class="comment-required"><?php if ($req) echo " *"; ?></span></label>
<textarea name="comment" id="comment" cols="50" rows="10"></textarea>

<div class="clear"></div>
 
<input name="submit" type="submit" id="comment_submit" tabindex="5" value="Submit" />
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>

<div class="clear"></div>
 
</form>
 
<?php endif; // If registration required and not logged in ?>
</div>
 
<?php endif; // if you delete this the sky will fall on your head ?>