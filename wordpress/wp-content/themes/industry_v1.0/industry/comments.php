<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<div id="comments">
     
    <?php if ( have_comments() ) : ?>

        <h2><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h2>
    
    	<?php foreach ($comments as $comment) : ?>
        
        <?php $oddcomment = ( empty( $oddcomment ) ) ? 'alt' : '';?>
        <?php if (1 == $comment->user_id) $authcomment = "authcomment"; ?>
        
        <div id="comment-<?php comment_ID() ?>" class="comcontent right <?php echo $authcomment; ?> <?php echo $oddcomment; ?>">

            <?php if ($comment->comment_approved == '0') : ?>
                <p class="moderation"><em>Your comment is awaiting moderation.</em></p>
            <?php endif; ?>
            
            <?php comment_text() ?>
            
            <?php edit_comment_link('edit comment', '<p class="editcom">', '</p>'); ?>
            
            <div class="userinfo">
                <div class="useravatar right"><?php echo get_avatar($comment,'40','' ); ?></div>
                <p class="user"><?php comment_author_link() ?></p>
				<p class="comdate"><?php comment_date('n/j/Y') ?></p>
            </div>
        </div>
        
            <div class="clear"></div>
        
        <?php endforeach; ?>
    
    <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
    
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

	<h2 class="comments"><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h2>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>
    
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    	<fieldset>
        
        <textarea name="comment" id="comment" class="text-input" cols="10" rows="10" tabindex="1"></textarea>
        <div class="clear"></div>
        
        <?php if ( $user_ID ) : ?>
        
            <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
        
        <?php else : ?>
        
        <input type="text" name="author" id="author" class="text-input" value="Your Name" size="22" tabindex="2" onfocus="if(this.value=='Your Name')this.value = '';" onblur="if(this.value=='')this.value = 'Your Name';" <?php if ($req) echo "aria-required='true'"; ?> />
        <div class="clear"></div>
       	
        <input type="text" name="email" id="email" class="text-input" value="Email Address (Kept Private)" size="22" tabindex="3" onfocus="if(this.value=='Email Address (Kept Private)')this.value = '';" onblur="if(this.value=='')this.value = 'Email Address (Kept Private)';" <?php if ($req) echo "aria-required='true'"; ?> />
        <div class="clear"></div>
        
        <input type="text" name="url" id="url" class="text-input" value="http://" size="22" tabindex="4" onfocus="if(this.value=='http://')this.value = '';" onblur="if(this.value=='')this.value = 'http://';" />
        <div class="clear"></div>
        
        <?php endif; ?>
        
        <input name="submit" type="submit" id="submit" class="btn" tabindex="5" value="Submit Comment" />
        <?php comment_id_fields(); ?>
        
        <?php do_action('comment_form', $post->ID); ?>
    	</fieldset>
    </form>
    
    <?php endif; // If registration required and not logged in ?>

<?php endif; ?>

</div>

	<div class="clear"></div>