<!--Menu-->
<div class="nav">
    <div class="container">
        <nav id="site-navigation" class="main-navigation" role="navigation" itemscope
            itemtype="http://schema.org/SiteNavigationElement">
            <button class="menu-toggle" aria-controls="primary-menu"
                aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'elegant-pink' ); ?></button>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav><!-- #site-navigation -->
    </div>
</div>