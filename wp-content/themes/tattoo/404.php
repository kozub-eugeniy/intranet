<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Tattoo
 * @since Tattoo 1.0
 */

get_header(); ?>


<section class="error-404 not-found">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="img-404">
                    <img src="<?php echo get_template_directory_uri()?>/images/404.jpg" alt="404">
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
