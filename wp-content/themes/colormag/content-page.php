<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( 'colormag_before_post_content' ); ?>
	<div class="custom-message-old-ste clearfix">
		<p><strong>Καλως ήρθατε στο νέο μας site! Μέχρι την ολοκλήρωση της μεταφοράς μπορείτε να χρησιμοποιείται παράλληλα το <a href="http://www.old.eakp.gr">παλιό site.</a>  </strong></p>
	</div>
	<header class="entry-header">
      <?php if ( is_front_page() ) : ?>
   		<h2 class="entry-title">
   			<?php the_title(); ?>
   		</h2>
      <?php else : ?>
         <h1 class="entry-title">
            <?php the_title(); ?>
         </h1>
      <?php endif; ?>
	</header>

	<div class="entry-content clearfix">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'colormag' ),
				'after'             => '</div>',
				'link_before'       => '<span>',
				'link_after'        => '</span>'
	      ) );
		?>
	</div>

	<?php do_action( 'colormag_after_post_content' ); ?>
</article>