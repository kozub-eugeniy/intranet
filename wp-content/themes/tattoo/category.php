<?php
/**
 * The category
 * @package WordPress
 * @subpackage Tattoo
 * @since Tattoo 1.0
 */
?>
<?php get_header();?>
<?php $the_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 6));

//var_dump($the_query);die;
?>

<section id="gallery">
    <div class="container">
        <div class="row">
            <?php if ($the_query->have_posts()) : ?>
                <div class="col-xs-12 clearfix">
                    <ul class="grid blog-posts" id="grid">
                        <?php while ($the_query->have_posts()) : $the_query->the_post();
                            ?>
                            <li class="grid-item clearfix">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <?php
                                        $img_id = get_post_thumbnail_id($post->ID);
                                        $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                                        ?>
                                        <img style="max-width: 340px;" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo $alt_text; ?>">
                                    <?php } ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php if ($the_query->max_num_pages > 1) : ?>
                        <script>
                            var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                            var true_posts = '<?php echo serialize($the_query->query_vars); ?>';
                            var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                            var max_pages = '<?php echo $the_query->max_num_pages; ?>';
                        </script>
                        <div id="load_more_gs">
                            <div class="cssload-container"><div class="cssload-whirlpool"></div></div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer();?>
