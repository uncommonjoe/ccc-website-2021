<?php
    /* Template Name: Page - Growth Group */

    get_header();
    get_template_part('template-parts/header/page-header');
?>


<div class="page-content margin-xxl-top margin-xxl-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-0 offset-lg-2 col-lg-8">
                <h2 class="h1 line margin-lg-bottom"><?php the_field('section_title'); ?></h1>
            </div>
        </div>

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
            if (have_rows('growth_groups')):
                while (have_rows('growth_groups')) : the_row();
               
        ?>

        <div class="row margin-lg-top">
            <div class="col-12 offset-0 offset-lg-2 col-lg-8">
                <div class="row">
                    <div class="col-5 col-md-4 col-xl-3 r-margin-md-bottom r-xs r-sm">
                        <div class="card card-body height-unset bg-dark text-center">
                            <div class="h1 fw-600 no-margin">
                                <?php the_sub_field('day_of_the_week'); ?>
                            </div>
                            <div class=""><?php the_sub_field('type'); ?></div>
                        </div>
                    </div>


                    <div class="col-12 col-md-8 col-xl-9">
                        <?php
                            if (have_rows('ministry')):
                                while (have_rows('ministry')) : the_row();
                        ?>

                        <div class="card card-body height-unset margin-lg-bottom">
                            <h5 class="fw-600 margin-lg-bottom">
                                <?php
                                    $prefix = get_field('leader_prefix');
                                    
                                    if ($prefix) {
                                        echo $prefix . ' ';
                                    }
                                    
                                    the_sub_field('leader_name'); ?>
                            </h5>

                            <?php if (get_sub_field('when')) : ?>
                            <div class="text-group">
                                <div class="text-group-title font-color-accent">
                                    <?php the_field('when_title'); ?>
                                </div>

                                <div class="text-group-value">
                                    <?php the_sub_field('when'); ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (get_sub_field('where')) : ?>
                            <div class="text-group">
                                <div class="text-group-title font-color-accent">
                                    <?php the_field('where_title'); ?>
                                </div>

                                <div class="text-group-value">
                                    <?php the_sub_field('where'); ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (get_sub_field('notes')) : ?>
                            <div class="text-group">
                                <div class="text-group-title font-color-accent">
                                    <?php the_field('notes_title'); ?>
                                </div>

                                <div class="text-group-value">
                                    <?php the_sub_field('notes'); ?>
                                </div>
                            </div>
                            <?php endif; // notes ?>

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


                        <!-- Sub-Ministry -->
                        <?php
                            endwhile;

                            $subMinistryTitle = get_sub_field('sub_ministry_title');

                            if ($subMinistryTitle):
                        ?>


                        <h5 class="font-color-accent fw-600 margin-lg-top">
                            <?php echo $subMinistryTitle ?>
                        </h5>

                        <?php
                            if (have_rows('sub_ministry')):
                                while (have_rows('sub_ministry')) : the_row();
                        ?>

                        <div class="card card-body height-unset margin-md-bottom margin-md-top">
                            <h5 class="fw-600 margin-lg-bottom">
                                <?php
                                    $prefix = get_field('leader_prefix');
                                    
                                    if ($prefix) {
                                        echo $prefix . ' ';
                                    }
                                    
                                    the_sub_field('sub_leader_name'); ?>
                            </h5>

                            <?php if (get_sub_field('sub_when')) : ?>
                            <div class="text-group">
                                <div class="text-group-title font-color-accent">
                                    <?php the_field('when_title'); ?>
                                </div>

                                <div class="text-group-value">
                                    <?php the_sub_field('sub_when'); ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (get_sub_field('sub_where')) : ?>
                            <div class="text-group">
                                <div class="text-group-title font-color-accent">
                                    <?php the_field('where_title'); ?>
                                </div>

                                <div class="text-group-value">
                                    <?php the_sub_field('sub_where'); ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (get_sub_field('sub_notes')) : ?>
                            <div class="text-group">
                                <div class="text-group-title font-color-accent">
                                    <?php the_field('notes_title'); ?>
                                </div>

                                <div class="text-group-value">
                                    <?php the_sub_field('sub_notes'); ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <div class="margin-lg-top">
                                <?php
                                    if (have_rows('sub_action_buttons')):
                                        while (have_rows('sub_action_buttons')) : the_row();
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

                        <?php
                                endwhile;
                            endif;
                        ?>


                        <?php
                                endif;
                            endif;
                        ?>

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