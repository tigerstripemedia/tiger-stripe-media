<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tiger_Stripe_Media
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card blog-card">
		<?php if ( has_post_thumbnail() ) { ?>
			<img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="Post Image">
		<?php } ?>
		<div class="card-body">
			
			<?php
			if ( is_singular() ) :
				the_title( '<h5 class="card-title">', '</h5>' );
			else :
				the_title( '<h5 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
			endif;
			?>
			
		    <p class="card-text"><?php the_excerpt(); ?></p>
		    
			<?php
			if ( 'post' === get_post_type() ) :
				?>
				<small class="text-muted blog-post-meta">
	            	<i class="fas fa-user"></i> <?php the_author(); ?><br>
	            	<i class="fas fa-calendar-alt"></i> <time><?php the_date(); ?></time><br>
	            	<i class="fas fa-folder-open"></i> <?php the_category(', '); ?><br>
	            	<i class="fas fa-tags"></i> <?php the_tags(); ?>
	            	<?php edit_post_link( 'Edit Post', '<br><i class="fas fa-pencil-alt"></i> ', '' ); ?>
	            </small>
			<?php endif; ?>
			
		</div>
	
		<footer class="card-footer">
			<a href="<?php the_permalink($post->ID); ?>" class="btn btn-primary btn-block btn-load-right"><i class="fab fa-readme"></i> Read Post</a>
		</footer>
		
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
