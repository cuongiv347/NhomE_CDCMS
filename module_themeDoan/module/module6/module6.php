<!--Content-->
<header class="entry-header">
            <?php 
                elegant_pink_category();
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); 
            ?>
        </header><!-- .entry-header -->
    
        <div class="entry-content">
            <?php 
                
                    the_content( sprintf(
                    
                        /* translators: %s: Name of current post. */
                         wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'elegant-pink' ), array( 'span' => array( 'class' => array() ) ) ),
                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                    ) );
                
                
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elegant-pink' ),
                    'after'  => '</div>',
                ) );
            ?>
            <a href="<?php the_permalink(); ?>" class="btn-readmore"><?php esc_html_e( 'Read More', 'elegant-pink' ); ?></a>
        </div><!-- .entry-content -->        