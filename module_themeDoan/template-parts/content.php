<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Do An Nhom E
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if( has_post_thumbnail() ){ ?>
        <div class="img-holder">
            <a class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'elegant-pink-3col-image', array( 'itemprop' => 'image' ) ); ?></a>
            <?php elegant_pink_posted_on(); ?>
        </div>     
    <?php }?>
    
    <div class="text-holder">
    <?php get_template_part('module/module6/module6','none'); ?>  
    </div>
    <footer class="entry-footer">
		<?php elegant_pink_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
