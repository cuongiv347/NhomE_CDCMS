<!--header dạng PC -->
<div class="container">

    <div class="header-t">
        <?php if( get_theme_mod( 'elegant_pink_ed_social', '1' ) ) do_action( 'elegant_pink_social' ); ?>
        <?php get_search_form(); ?>
    </div>

    <div class="site-branding" itemscope itemtype="http://schema.org/Organization">
        <?php 
                if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                    the_custom_logo();
                }
                if ( is_front_page() && is_home() ) : ?>
        <h1 class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"
                itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
                else : ?>
        <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"
                itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
        <?php
                endif;          
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) { ?>
        <p class="site-description" itemprop="description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
        <?php } ?>
    </div><!-- .site-branding -->

</div><!-- .container -->