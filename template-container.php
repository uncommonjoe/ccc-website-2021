<?php
/* Template Name: Template Container */

get_header();
?>

<div class="page-header">
    <div class="section-content">
        <h1><?php the_title(); ?></h1>
    </div>
</div>


<div class="page-content">
    <div class="container margin-xl-top margin-xl-bottom">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>

            <?php endwhile; else : ?>
                <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php endif;?>
    </div>
</div>

<?php get_footer(); ?>