<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); $author = get_the_author(); ?>">
<div class="post-card modal-dialog">
        <?php include 'post-hero.php'; ?>
        <?php include 'post-content.php'; ?>
</div>
</article><!-- #post-## -->

