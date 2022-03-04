<?php
    /* Template Name: Page - Leadership */

    get_header();
    get_template_part('template-parts/header/page-header');
?>



<div class="page-content margin-xxl-top margin-xxl-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>

                <?php endwhile; else : ?>
                <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                <?php endif;?>
            </div>
        </div>

        <?php if (have_rows('leadership_elders')): ?>

        <div class="row">
            <div class="col-12">
                <h2 class="h1 line margin-lg-bottom">Elders</h1>
            </div>
        </div>

        <?php
            while (have_rows('leadership_elders')) :
                the_row();
        ?>

        <div class="row margin-xl-top">
            <div class="col-12">
                <div class="row">
                    <div class="offset-2 col-8 offset-md-0 col-md-4 col-xl-3 r-margin-lg-bottom r-xs r-sm">
                        <img class="rounded-circle img-glow" src="<?php echo get_sub_field('elder_photo'); ?>"
                            alt="<?php echo get_sub_field('elder_name') . ", " . get_sub_field('elder_title'); ?>" />
                    </div>

                    <div class="col-12 col-md-8 col-xl-9 padding-lg-left">
                        <h3 class="h1 font-700 no-margin-bottom">
                            <?php echo get_sub_field('elder_name'); ?>
                        </h3>

                        <h6 class="font-spaced font-size-md font-color-accent">
                            <?php echo get_sub_field('elder_title'); ?>
                        </h6>

                        <p><?php echo get_sub_field('elder_bio'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <?php
            endwhile;
            endif;
        ?>

        <?php if (have_rows('leadership_elders_in_training')): ?>

        <div class="row">
            <div class="col-12 margin-xl-top">
                <h2 class="h1 line margin-lg-top margin-lg-bottom">Elders-in-Training</h2>
            </div>
        </div>

        <?php
            while (have_rows('leadership_elders_in_training')) :
                the_row();
        ?>

        <div class="row margin-xl-top">
            <div class="col-12">
                <div class="row">
                    <div class="offset-2 col-8 offset-md-0 col-md-4 col-xl-3 r-margin-lg-bottom r-xs r-sm">
                        <img class="rounded-circle img-glow"
                            src="<?php echo get_sub_field('elder_in_training_photo'); ?>"
                            alt="<?php echo get_sub_field('elder_in_training_name') . ", " . get_sub_field('elder_in_training_title'); ?>" />
                    </div>

                    <div class="col-12 col-md-8 col-xl-9 padding-lg-left">
                        <h3 class="h1 font-700 no-margin-bottom">
                            <?php echo get_sub_field('elder_in_training_name'); ?>
                        </h3>

                        <h6 class="font-spaced font-size-md font-color-accent">
                            <?php echo get_sub_field('elder_in_training_title'); ?>
                        </h6>

                        <p><?php echo get_sub_field('elder_in_training_bio'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <?php
            endwhile;
            endif;
        ?>

        <?php if (have_rows('leadership_deacons')): ?>

        <div class="row margin-xl-top">
            <div class="col-12">
                <h2 class="h1 line margin-lg-top margin-lg-bottom">Diaconate</h2>
            </div>
        </div>
        <?php
            while (have_rows('leadership_deacons')) :
                the_row();
        ?>

        <div class="row margin-lg-top">
            <div class="col-12">
                <div class="row">
                    <div class="offset-2 col-8 offset-md-0 col-md-4 col-xl-3 r-margin-lg-bottom r-xs r-sm">
                        <img class="rounded-circle img-glow" src="<?php echo get_sub_field('deacon_photo'); ?>"
                            alt="<?php echo get_sub_field('deacon_name') . ", " . get_sub_field('deacon_title'); ?>" />
                    </div>

                    <div class="col-12 col-md-8 col-xl-9 padding-lg-left">
                        <h3 class="h1 font-700 no-margin-bottom">
                            <?php echo get_sub_field('deacon_name'); ?>
                        </h3>

                        <h6 class="font-spaced font-size-md font-color-accent">
                            <?php echo get_sub_field('deacon_title'); ?>
                        </h6>

                        <p><?php echo get_sub_field('deacon_bio'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <?php
            endwhile;
            endif;
        ?>


    </div>
</div>

<?php
    include('menu.php');
    get_footer();
?>