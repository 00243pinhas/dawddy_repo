<?php
/**
 * The template for displaying the footer.
 *
 * @package Chani
 */
$back_totop_on = chani_get_opt( 'back_totop_on', true );
?>
</main>
<footer id="cms-footer" class="<?php chani_footer_css_class(); ?>"><?php 
    chani_footer(); 
?></footer>
<?php if ( isset( $back_totop_on ) && $back_totop_on ) : ?>
    <a href="#" class="scroll-top"><i class="cmsi-long-arrow-up"></i></a>
<?php endif; ?>

<?php wp_footer(); ?>
<div class="cms-modal-overlay cursor-close-white cms-transition"></div>
</body>
</html>
