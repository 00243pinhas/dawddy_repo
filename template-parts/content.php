<?php
/**
 * Template part for displaying posts in loop
 *
 * @package Chani
 */
?>
<div class="cms-single">

    <div> hello pinhas </div>
	<!-- <?php 
		chani_entry_thumbnail([
			'size'      => 'large',
			'class'     => 'mb-35',
			'img_class' => ''
		]);
	?>
	<div class="cms-post--content">
		<?php 
			chani_post_meta([
				'opt_prefix' => 'post_',
				'gap'		 => '',
				'class'		 => 'gap-20 mb-10 text-uppercase',
				'separator' => '<div class="separator"></div>'
			]);
			chani_entry_single_title(['class' => 'text-55 mb-20 lh-1-1']);
		?> -->
		<div class="content clearfix pt-10"><?php 
			the_content(); 
			chani_entry_link_pages();
		?></div>
		<div class="tags-share d-flex gap justify-content-between empty-none"><?php 
			chani_entry_tagged_in(['class' => 'flex-basis']);
			chani_socials_share_default([
				'class' => 'flex-auto',
				'show'	=> (bool)chani_get_opt('post_social_share_on', false)
			]); 
		?></div>
	</div>
</div>
<?php
// About Author
if(!empty(get_the_author_meta( 'description' )) && chani_get_opt('post_author_info_on', false)){
?>
<div class="cms-author-info d-flex align-items-center gap text-mobile-center gap-30 gap-mobile-20">
    <div class="author-avatar flex-auto">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 150, '', '', ['class' => '']); ?>
    </div>
    <div class="author-desc flex-basic flex-mobile-auto">
    	<h4 class="author-name cms-heading text-30 mt-n5 pb-10"><?php the_author_meta( 'display_name' ); ?></h4>
		<div class="text-line-2"><?php  the_author_meta( 'description' ); ?></div>
		<?php
			// User Social
			chani_get_user_social(); 
		?>
    </div>
</div>
<?php 
	}
// Post Nav
	chani_post_nav_default();
?>