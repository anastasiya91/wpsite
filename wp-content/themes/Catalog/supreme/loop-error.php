<?php
/**
 * Loop Error Template
 *
 * Displays an error message when no posts are found.
 *
 * @package supreme
 * @subpackage Template
 */
?>

	<li id="post-0" class="<?php hybrid_entry_class(); ?>">

		<div class="entry-summary">

			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'supreme' ); ?></p>

		</div><!-- .entry-summary -->

	</li><!-- .hentry .error -->