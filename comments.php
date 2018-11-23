<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tiger_Stripe_Media
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<div class="container">
		
		<div class="comments-wrap">
		<?php

		$fields =  array(
		 
		  'author' =>
		    '<p class="comment-form-author"><div class="form-group"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
		    ( $req ? '<span class="required">*</span>' : '' ) .
		    '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		    '" ' . $aria_req . ' /></div></p>',
		 
		  'email' =>
		    '<p class="comment-form-email"><div class="form-group"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
		    ( $req ? '<span class="required">*</span>' : '' ) .
		    '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		    '" ' . $aria_req . ' /></div></p>',
		 
		  'url' =>
		    '<p class="comment-form-url"><div class="form-group"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
		    '<input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		    '"   /></p>',
		    
		    // 'comment_notes_after' => '<button type="submit" id="submit-new" class="btn btn-primary btn-block"><span>'.__('Post Comment').'</span></button>',
		);
		
    	$comments_args = array(
 
        // change "Leave a Reply" to "Comment"
        'title_reply'=>'<br><i class="fas fa-comment-dots" style="color: #f79447; font-size: 2.5rem; margin-bottom: 10px;"></i><br>Leave a Comment',
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
        'comment_field' =>  '<p class="comment-form-comment"><div class="form-group"><label for="comment">' . _x( 'Comment', 'noun' ) .
            '</label><textarea id="comment" name="comment" class="form-control"  rows="8" aria-required="true">' .
            '</textarea></div></p>',
        'comment_notes_after' => '<button type="submit" id="submit-new" class="btn btn-primary btn-block"><span>'.__('Post Comment').'</span></button>');

		if ( have_comments() ) :
			?>
			<h3 class="comments-title"> 
			<br><i class="fas fa-comments" style="color: #f79447; font-size: 2.5rem; margin-bottom: 10px;"></i><br>
				<?php
				$tiger_stripe_media_comment_count = get_comments_number();
				if ( '1' === $tiger_stripe_media_comment_count ) {
					printf(
						/* translators: 1: title. */
						esc_html__( 'One comment on this post', 'tiger-stripe-media' ),
						'<span>' . get_the_title() . '</span>'
					);
				} else {
					printf( // WPCS: XSS OK.
						/* translators: 1: comment count number, 2: title. */
						esc_html( _nx( '%1$s comment on this post', '%1$s comments on this post', $tiger_stripe_media_comment_count, 'comments title', 'tiger-stripe-media' ) ),
						number_format_i18n( $tiger_stripe_media_comment_count ),
						'<span>' . get_the_title() . '</span>'
					);
				}
				?>
			</h3><br><!-- .comments-title -->
			
	
			<?php the_comments_navigation(); ?>
	
			<ol class="comment-list">
				<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
				?>
			</ol><!-- .comment-list -->
			
			<br>
			<hr class="hr">
	
			<?php
			the_comments_navigation();
	
			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() ) :
				?>
				<p class="no-comments"><i class="fas fa-comment-slash"></i> <?php esc_html_e( 'Comments are closed.', 'tiger-stripe-media' ); ?></p>
				<?php
			endif;
	
		endif; // Check for have_comments().
	
		comment_form($comments_args);
		?>
		</div><!-- .comments-wrap -->

	</div><!-- .container -->
</div><!-- #comments -->
