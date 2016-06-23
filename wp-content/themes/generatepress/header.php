<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Generate
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php 
wp_head();
$generate_settings = wp_parse_args( 
	get_option( 'generate_settings', array() ), 
	generate_get_defaults() 
);
?>

<!-- codigo google analytics -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59822887-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- fin de codigo de google analytics -->


</head>

<body itemtype="http://schema.org/WebPage" itemscope="itemscope" <?php body_class(); ?>>
	<?php do_action( 'generate_before_header' ); ?>
	
	<header itemtype="http://schema.org/WPHeader" itemscope="itemscope" id="masthead" role="banner" <?php generate_header_class(); ?>>
<div id="logo_escuela">
     <img src="http://escuelapacifico.com/archivos/logo.jpg" width="1200px" height="100px">
</div>
<div id="banner_escuela">
<?php 
    echo do_shortcode("[metaslider id=7]"); 
?>
</div>
		<div <?php generate_inside_header_class(); ?>>
			<?php do_action( 'generate_before_header_content'); ?>
			
			<?php if ( is_active_sidebar('header') ) : ?>
				<div class="header-widget">
					<?php dynamic_sidebar( 'header' ); ?>
				</div>
			<?php endif; // end sidebar widget area ?>
		
			<?php if ( empty( $generate_settings['hide_title'] ) || empty( $generate_settings['hide_tagline'] ) ) : ?>
				<div class="site-branding">
				<?php if ( empty( $generate_settings['hide_title'] ) ) : ?>
					<p class="main-title" itemprop="headline"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif;
				
				if ( empty( $generate_settings['hide_tagline'] ) ) : ?>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				<?php endif; ?>
				</div>
			<?php endif;
			
			if ( !empty( $generate_settings['logo'] ) ) : ?>
				<div class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class="header-image" src="<?php echo $generate_settings['logo']; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
				</div>
			<?php endif; ?>
			<?php do_action( 'generate_after_header_content'); ?>
		</div><!-- .inside-header -->
	</header><!-- #masthead -->
	<?php do_action( 'generate_after_header' ); ?>

	

	<div id="page" class="hfeed site grid-container container grid-parent">
		<div id="content" class="site-content">
			<?php do_action('generate_inside_container'); ?>

