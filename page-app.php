<?php
    /* Template Name: Page - Get Our App */

    get_header();
    get_template_part('template-parts/header/page-header');
?>

<div class="page-content margin-xxl-top margin-xxl-bottom">
    <div class="container">

        <div class="row">
            <div class="col-12 offset-0 offset-lg-2 col-lg-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>

                <?php endwhile; else : ?>
                <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
                <?php endif;?>
            </div>
        </div>

        <?php
            if (have_rows('apps')):
                while (have_rows('apps')) : the_row();
        ?>

        <div class="margin-lg-top margin-xxl-bottom">
            <div class="row">
                <div class="col-12">
                    <h2 class="h1 line margin-xl-bottom">
                        <?php echo get_sub_field('title'); ?>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-xl-4">
                    <?php
                            $image = get_sub_field('image', $post->ID);
                            if($image):
                        ?>
                    <img class="img-glow" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" style="width: 100%;" />
                    <?php endif; // image ?>
                </div>

                <div class="col-12 col-md-6 col-xl-8">
                    <?php echo get_sub_field('description'); ?>

                    <div class="margin-lg-top">
                        <?php
                            if (have_rows('action_buttons')):
                                while (have_rows('action_buttons')) : the_row();
                        ?>

                        <a class="btn <?php echo get_sub_field('button_color'); ?> margin-md-right"
                            href="<?php echo get_sub_field('button_url'); ?>" target="_blank">
                            <?php echo get_sub_field('button_title'); ?>
                        </a>

                        <?php
                                endwhile; // action_buttons
                            endif; // action_buttons
                        ?>
                    </div>
                </div>
            </div>

        </div>

        <?php
                endwhile; // app
            endif; // app
        ?>
    </div>
</div>

<?php
    include('menu.php');
    get_footer();
?>