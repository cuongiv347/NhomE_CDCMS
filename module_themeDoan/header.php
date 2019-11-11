<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elegant_Pink
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="http://schema.org/WebSite">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content (Press Enter)', 'elegant-pink' ); ?></a>
    <?php get_template_part( 'module/module1/module1', 'none' ); ?>

        <header id="masthead" class="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
            <?php get_template_part( 'module/module2/module2', 'none' ); ?>
        </header><!-- #masthead -->

        <?php get_template_part( 'module/module3/module3', 'none' ); ?>
    
    <?php 
    
        if ( is_front_page() ) {
            if( get_theme_mod( 'elegant_pink_ed_slider' ) ) do_action( 'elegant_pink_slider' );
        }    
    ?>
    
    <div class="container">
        <?php if( ! is_404() ) { ?>
            <div id="content" class="site-content">
        <?php } ?>
