<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tiger_Stripe_Media
 */
 
 $blog_sign_off  = get_field('blog_sign_off');
 $posted_by_hayden  = get_field('posted_by_hayden');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( has_post_thumbnail() ) { ?>
	<section id="article-header" >
      <div class="article-header-img" style="background: url('<?php echo the_post_thumbnail_url(); ?>'); background-attachment: fixed; background-size: cover; height: 550px; background-position: center;">
        <img class="blog-border" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/blog-border.png"></img>
      </div>
  </section>
    <?php } else { ?>
      <br>
      <br>
    <?php } ?>
    
    <section id="article-title">
      <div class="container">
      	<?php the_title( '<h1>', '</h1>' ); ?>
        <h6 class="text-muted"><time><?php the_last_modified_info(); ?></time> | In <?php the_category(', '); ?> | By <?php the_author(); ?> | <?php echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]'); ?></h6>
        <br>
        <hr class="orange-hr">
      </div>
    </section>

	<section id="article-body">
      <div class="container">
		
		<?php the_content(); ?>
		
		<div class="article-sign-off">
          <br>
          <h5><?php echo $blog_sign_off; ?></h5>
          <?php if ($posted_by_hayden) : ?>
            <img class="article-signiture" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/signiture.svg" alt="Hayden Ingham">
          <?php endif; ?>
        </div>
        
        <br>
        
        <div class="share-title">
          <i class="fas fa-share-alt" style="color: #f79447; font-size: 2.5rem; margin-bottom: 10px;"></i>
          <h4>Sharing's Caring!</h4>
        </div>
        <br>
        <?php wcr_share_buttons(); ?>

        <hr class="hr">

        <div class="blog-author">
          <!--<img class="blog-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/me.jpg" alt="Hayden Ingham">-->
          <div class="blog-img"><?php echo get_avatar( get_the_author_meta( 'ID' ) , 160); ?></div>
          <h3><?php echo get_author_link_target_blank(); ?></h3>
          <p class="text-muted">
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">All posts by <?php the_author(); ?> <i class="fas fa-angle-right"></i></a>
          </p>
        </div>

        <hr class="hr">
      </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
