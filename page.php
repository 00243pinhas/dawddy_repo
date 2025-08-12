<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package Chani
 */

get_header();
	while ( have_posts() ) {
		the_post();
		the_content();

		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}
	

get_footer();

