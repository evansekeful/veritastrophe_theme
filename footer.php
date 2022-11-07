<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package veritastrophe
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>&copy;2014-<script language="javascript" type="text/javascript">
					var today = new Date()
					var year = today.getFullYear()
					document.write(year)
					</script> Elizabeth Evans, aka El Beastie.</br>
			Made with <i class="fas fa-heart" aria-hidden="true"></i> by <a href="https://github.com/evansekeful">El Beastie</a>.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>