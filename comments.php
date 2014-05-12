<div class="comment-page">
<hr />
<?php if($comments) :?>
	<?php foreach($comments as $comment) : ?>
		<?php if($comment->comment_approved = '0') : ?>
		<p>Din kommentar venter på godkjenning fra administrator.</p>
		<?php endif; ?>
		<div class="post-comment-rows">
			<div class="post-comment-desc-text">Den <?php comment_date('d.m.y'); ?> skrev <?php comment_author(); ?>:</div>
			<?php comment_text(); ?>
		</div>
	<?php endforeach; ?>
<?php else : ?>
<p>Vær den første til å kommentere!</p>
<?php endif; ?>
<div class="post-comment-post-comment">
<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>Du må være logget inn for å kommentere på denne artikkelen.</p>
	<?php else :?>
	<form action="<?php echo get_option('siteurl');?>/wp-comments-post.php" method="post" id="commentform">
		<?php if($user_ID) : ?>
		<p>Logget inn som <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></p>
		<?php else : ?>
			<p><label for='author'>Navn</label><br />
			<input type='text' name='author' id='author' value="<?php echo $comment_author;?>" /></p>
			<p><label for='email'>E-post <?php if($req) echo '(Obligatorisk felt)';?></label><br />
			<input type='text' name='email' id='email' value="<?php echo $comment_author_email;?>" /></p>
			<p><label for='url'>Nettsted</label><br />
			<input type='text' name='url' id='url' value="<?php echo $comment_author_url; ?>" /></p>
			<p>
			<?php endif; ?>
			<label for='comment'>Din kommentar:</label><br />
			<textarea name='comment' id='comment'></textarea>
			</p>
		<p><input type='submit' name='submit' id='submit' value='Send' /></p>
		<input type='hidden' name='comment_post_ID' value="<?php echo $id; ?>" />
		<?php do_action('comment_form', $post->ID);?>
		</form>
	<?php endif; ?>
<?php else : ?>
<p>Kommentarer er nå stengt.</p>
<?php endif; ?>
</div>
</div>