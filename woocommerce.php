<?php
/**
 * Custom Woocommerce shop page.
 */
get_header();
    chani_content_has_sidebar_open('sidebar-product');

       woocommerce_content();

    chani_content_has_sidebar_close('sidebar-product');

    if(!is_singular('product') && chani_get_opt('sidebar_on', 'off') === 'on' && is_active_sidebar('sidebar-product')){ 
        $sidebar_pos = chani_get_opt('shop_sidebar_on', 'order-last');
    ?>
        <div id="cms-sidebar" class="cms-sidebar cms-shop-sidebar <?php echo esc_attr($sidebar_pos); ?> flex-basic">
            <?php dynamic_sidebar('sidebar-product'); ?>
        </div>
    <?php
    }
// get_footer();