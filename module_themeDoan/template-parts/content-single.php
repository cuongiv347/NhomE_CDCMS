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
    <?php if(has_post_thumbnail()){ ?>
        <div class="img-holder">
        <?php 
            if( is_active_sidebar( 'right-sidebar' ) ){
                the_post_thumbnail( 'elegant-pink-image' );
            }else{
                the_post_thumbnail( 'elegant-pink-image-full' );
            } 
            elegant_pink_posted_on(); 
        ?>
        </div>     
    <?php }?>
    
    <div class="text-holder">
        <?php get_template_part('module/module7/module7','none'); ?>    
    </div>
    <footer class="entry-footer">
		<?php elegant_pink_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
