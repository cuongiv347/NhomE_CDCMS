<!-- Footer -->
<?php if( is_active_sidebar('footer-one') || is_active_sidebar('footer-two') || is_active_sidebar('footer-three') ){?>
<div class="row">

    <?php if(is_active_sidebar('footer-one')){ ?>
    <div class="col">
        <?php dynamic_sidebar('footer-one'); ?>
    </div>
    <?php }?>


    <?php if(is_active_sidebar('footer-two')){ ?>
    <div class="col">
        <?php dynamic_sidebar('footer-two'); ?>
    </div>
    <?php }?>

    <?php if(is_active_sidebar('footer-three')){ ?>
    <div class="col">
        <?php dynamic_sidebar('footer-three'); ?>
    </div>
    <?php }?>

</div>
<?php } 
            
            /**
             * @see elegant_pink_footer_credit
            */
            do_action( 'elegant_pink_footer' ); //footer credits
            ?>