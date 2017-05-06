<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Tattoo
 * @since Tattoo 1.0
 */
?>

<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php if (has_nav_menu('primary')) : ?>
                    <nav class="main-navigation" role="navigation"
                         aria-label="<?php esc_attr_e('Footer Primary Menu', 'tattoo'); ?>">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class' => 'primary-menu',
                        ));
                        ?>
                    </nav>
                <?php endif; ?>

                <?php if (has_nav_menu('social')) : ?>
                    <nav class="social-navigation" role="navigation"
                         aria-label="<?php esc_attr_e('Footer Social Links Menu', 'tattoo'); ?>">
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
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
