<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gmotor
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">

 <div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
   <div class="img-header">
    <?php
    if ( is_front_page() && is_home() ) : ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php header_image(); ?>" title="<?php bloginfo( 'name' ); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" style="float:left" />
    </a>
    <?php else : ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php header_image(); ?>" title="<?php bloginfo( 'name' ); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" style="float:left" />
    </a>
    <?php
  endif; ?>


    <div class="site-branding">

			<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<h1><small><?php echo $description; /* WPCS: xss ok. */ ?></small></h1>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
    </div><!-- .img-header -->

   <div class="header-nav">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="float:right">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">G</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" style="float:right">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'wp_page_menu',
                //Process nav menu using our custom nav walker
                'walker' => new wp_bootstrap_navwalker())
            );
            ?>
        </div><!-- /.navbar-collapse -->
    </nav>
      </div><!-- .header-nav -->




	</header><!-- #masthead -->

	<div id="content" class="site-content">
    <div class="row">
     <div class="col-md-8 col-xs-12">
