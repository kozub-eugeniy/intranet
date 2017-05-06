<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Tattoo
 * @since Tattoo 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header" class="header">
    <div class="container">
        <div class="row">
            <?php if (has_nav_menu('primary') || has_nav_menu('social')) : ?>
                <div class="col-xs-12">
                    <?php if (has_nav_menu('primary')) : ?>
                        <nav id="site-navigation" class="main-navigation" role="navigation"
                             aria-label="<?php esc_attr_e('Primary Menu', 'tattoo'); ?>">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'primary-menu',
                            ));
                            ?>
                        </nav>
                    <?php endif; ?>
                    <?php if (has_nav_menu('social')) : ?>
                        <nav id="social-navigation" class="social-navigation" role="navigation"
                             aria-label="<?php esc_attr_e('Social Links Menu', 'tattoo'); ?>">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'social',
                                'menu_class' => 'social-links-menu',
                                'depth' => 1,
                                'link_before' => '<span class="screen-reader-text">',
                                'link_after' => '</span>',
                            ));
                            ?>
                        </nav>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

</header>


