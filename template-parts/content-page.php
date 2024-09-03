<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package tesla-master
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		if ( !is_front_page() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		}
		?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	
</article>