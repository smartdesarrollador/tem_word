<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Generate
 */

get_header(); ?>

	<div id="primary" <?php generate_content_class();?>>
		<main id="main" <?php generate_main_class(); ?> itemprop="mainContentOfPage" role="main">
			<?php do_action('generate_before_main_content'); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>
			<?php do_action('generate_after_main_content'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
do_action('generate_sidebars');
if($_SERVER['REQUEST_URI']=="/"){
?>
<!-- <center>

<iframe id="datamain" src="http://escuelapacifico.com/archivos/galeria/carrucel.php" width="1100px" height="150px" marginwidth="150" marginheight="5" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>

</center> -->
<?php
}
get_footer();