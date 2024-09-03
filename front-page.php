<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package tesla-master
*/

get_header();
?>
	<main id="primary" class="site-main py-8">

		<div class="container mx-auto px-4">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
			?>
		</div>
	</main>

<?php
get_footer();
