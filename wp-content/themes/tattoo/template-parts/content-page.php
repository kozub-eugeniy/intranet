<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Tattoo
 * @since Tattoo 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>
        </div>
<!--	</div>-->

<!--	--><?php //tattoo_post_thumbnail(); ?>

<!--	<div class="container">-->
        <div class="row">
            <div class="col-xs-12">
                <?php
                the_content();

                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tattoo' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tattoo' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
                ?>
            </div>
        </div>
	</div>

<!--	--><?php
//		edit_post_link(
//			sprintf(
//				/* translators: %s: Name of current post */
//				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'tattoo' ),
//				get_the_title()
//			),
//			'<footer class="entry-footer"><span class="edit-link">',
//			'</span></footer><!-- .entry-footer -->'
//		);
//	?>

</article>
