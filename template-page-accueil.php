<?php
/*
 * Template Name: Template accueil
 * description: >-
  Template page d'accueil
 */

get_header();
?>
<!-- <?php if ( is_front_page() )
	{
		echo do_shortcode('[fts_instagram instagram_id=284813725 access_token=284813725.da06fb6.9b20c359957843a4b333095aa94d23dd pics_count=5 type=user width=100% height=auto profile_wrap=no super_gallery=yes columns=5 force_columns=yes space_between_photos=0px icon_size=65px hide_date_likes_comments=yes]');
	}
?> -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );



		endwhile; // End of the loop.

		?>

		</main><!-- #main -->
		<?php
		get_sidebar();
		?>
	</div><!-- #primary -->

<?php

get_footer();