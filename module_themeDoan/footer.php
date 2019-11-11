<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Do An Nhom E
 */

?>

    <?php if( ! is_404() ){ ?>
    	</div><!-- #content -->
    <?php } ?>
    
    	<footer class="site-footer">
        <?php get_template_part('module/module5/module5', 'none'); ?>
           
		</footer>
        <div class="overlay"></div>
        
    </div><!-- .container -->
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
