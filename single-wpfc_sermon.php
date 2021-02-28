<?php get_header(); ?>

<div class="page-header">
    <div class="section-content">
        <h1>Sermons</h1>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="col-12">
        <?php
            while ( have_posts() ) :
                global $post;
                the_post();

                if ( ! post_password_required( $post ) ) {
                    wpfc_sermon_single_v2(); // You can edit the content of this function in `partials/content-sermon-single.php`.
                } else {
                    echo get_the_password_form( $post );
                }
            endwhile;
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>