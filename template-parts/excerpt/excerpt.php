<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package veritastrophe
 */

?>

<p id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php veritastrophe_post_thumbnail(); ?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>
	</header><!-- .entry-header -->

	<div class="entry-excerpt">
		<?php
		the_excerpt();
		?>
	</div><!-- .entry-excerpt -->

</p><!-- #post-<?php the_ID(); ?> -->
