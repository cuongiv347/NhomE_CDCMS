<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Do An Nhom E
 */
global $post;
if( get_post_meta( $post->ID, 'elegant_pink_sidebar_layout', true ) ){
    $sidebar_layout = get_post_meta( $post->ID, 'elegant_pink_sidebar_layout', true );    
}else{
    $sidebar_layout = 'right-sidebar';
} 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(has_post_thumbnail()){ ?>
        <div class="img-holder">
        <?php
            ( is_active_sidebar( 'right-sidebar' ) && ( $sidebar_layout == 'right-sidebar' ) ) ? the_post_thumbnail( 'elegant-pink-image', array( 'itemprop' => 'image' ) ) : the_post_thumbnail( 'elegant-pink-image-full', array( 'itemprop' => 'image' ) );
        ?>
        </div>
    <?php } ?>
    <div class="text-holder">
		<?php get_template_part('module/module8/module8','none'); ?>    
    </div>
	<footer class="entry-footer">
		<?php elegant_pink_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
