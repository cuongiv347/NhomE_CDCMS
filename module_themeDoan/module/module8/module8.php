 <!--content-page-->
 <?php 
        if( ! is_front_page() ) : ?>
            <header class="entry-header">
        		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				
        	</header><!-- .entry-header -->
			
        <?php endif; ?>
    	<div class="entry-content">
    		<?php
    			the_content();
    
    			wp_link_pages( array(
    				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elegant-pink' ),
    				'after'  => '</div>',
    			) );
    		?>
    	</div><!-- .entry-content -->