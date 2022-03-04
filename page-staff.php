<?php
    /* Template Name: Page - Staff */

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

        <?php if (have_rows('office_staff')): ?>

        <div class="row">
            <div class="col-12">
                <h2 class="h1 line margin-lg-bottom">Office Staff</h1>
            </div>
        </div>

        <?php
            while (have_rows('office_staff')) :
                the_row();
        ?>

        <div class="row margin-xl-top">
            <div class="col-12">
                <div class="row">
                    <div class="offset-2 col-8 offset-md-0 col-md-4 col-xl-3 r-margin-lg-bottom r-xs r-sm">
                        <img class="rounded-circle img-glow" src="<?php echo get_sub_field('staff_photo'); ?>"
                            alt="<?php echo get_sub_field('staff_name') . ", " . get_sub_field('staff_title'); ?>" />
                    </div>

                    <div class="col-12 col-md-8 col-xl-9 padding-lg-left">
                        <h3 class="h1 font-700 no-margin-bottom">
                            <?php echo get_sub_field('staff_name'); ?>
                        </h3>

                        <h6 class="font-spaced font-size-md font-color-green">
                            <?php echo get_sub_field('staff_title'); ?>
                        </h6>

                        <p><?php echo get_sub_field('staff_bio'); ?></p>
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