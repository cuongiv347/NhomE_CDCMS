<!--menu dạng mobile-->
<div id="mobilemasthead" class="mobile-site-header">
    <div class="container">

        <div class="mobile-site-branding" itemscope itemtype="http://schema.org/Organization">
            <?php 
                if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                    the_custom_logo();
                }
                ?>
            <div class="text-logo">
                <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"
                        itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
                <?php         
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) { ?>
                <p class="site-description" itemprop="description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php } ?>
            </div>
        </div><!-- .site-branding -->
        <div class="btn-menu-opener">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="mobile-menu">
        <?php get_search_form(); ?>
        <nav id="mobile-site-navigation" class="mobile-main-navigation" role="navigation" itemscope
            itemtype="http://schema.org/SiteNavigationElement">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav><!-- #mobile-site-navigation -->
        <?php if( get_theme_mod( 'elegant_pink_ed_social', '1' ) ) do_action( 'elegant_pink_social' ); ?>
    </div>
</div>