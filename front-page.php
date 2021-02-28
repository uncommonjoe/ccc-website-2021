<?php get_header(); ?>

<div class="page-header">
    <div class="section-content">
        <h1><?php echo get_bloginfo( 'description', 'display' ); ?></h1>
    </div>
</div>


<div class="page-content" id="front-page">
    
    <div class="gray-area card-holder">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-12 col-md-4 margin-md-top margin-md-bottom">
                    <a class="card" href="connect/this-sunday">
                        <div class="card-img-top">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img2.jpg" alt="Sunday" />
                        </div>

                        <div class="card-body">
                            <div class="card-title">Sunday</div>
                            <div class="card-text">We gather on Sunday mornings at 10 AM. We also offer Sunday school for all ages at 9 AM</div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-4 margin-md-top margin-md-bottom">
                    <a class="card" href="what-we-believe">
                        <div class="card-img-top">
							<img src="<?php echo get_template_directory_uri(); ?>/img/img3.jpg" alt="Expository Preaching" />
                        </div>

                        <div class="card-body">
                            <div class="card-title">Expository Preaching</div>
                            <div class="card-text">Expository preaching seeks to present you with God’s original, intended meaning of a Bible passage in a way that is both relevant and practical.</div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-4 margin-md-top margin-md-bottom">
                    <a class="card" href="connect">
                        <div class="card-img-top">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/header-photos/jn-225844.jpg" alt="Sound Doctrine" />
                        </div>
                        
                        <div class="card-body">
                            <div class="card-title">Get Involved</div>
                            <div class="card-text">Connect at Cornerstone with fellow believers.</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-sermon">
        <div class="container">
            <div class="row margin-lg-bottom">
                <div class="col-12">
                    <h1 class="text-uppercase">Latest Sermon</h1>
                </div>
            </div>

            <?php if ($latest_sermon->have_posts()) :
                while ($latest_sermon->have_posts()) : $latest_sermon->the_post();
                global $post; ?> 
                <div class="row">
                    <div class="col-12 col-sm-4 latest-sermon-title">
                        <h2 class="break-word">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <?php if ( has_term( '', 'wpfc_preacher', $post->ID ) ) : ?>
                            <h5 class="serif italic">
                                <div class="margin-sm-top">
                                    <span class="wpfc-sermon-meta-prefix">
                                        <?php echo ( \SermonManager::getOption( 'preacher_label', '' ) ) ?: __( 'Preacher', 'sermon-manager-for-wordpress' ); ?>
                                    </span>
                                    
                                    <span><?php the_terms( $post->ID, 'wpfc_preacher' ); ?></span>
                                </div>
                                <div class="margin-sm-top"><?php wpfc_sermon_date(get_option('date_format')); ?></div>
                            </h6>
                        <?php endif; ?>
                    </div>

                    <div class="col-12 col-sm-8 sm-no-padding">
                        <div id="latest_sermon">
                            <a href="<?php the_permalink(); ?>">
                                <img class="wpfc-sermon-single-image-img" alt="<?php the_title(); ?>" src="<?php echo get_sermon_image_url(); ?>">
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
                endif; ?>
        </div>
    </div>

    <div class="container margin-xl-top margin-xl-bottom">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>

            <?php endwhile; else : ?>
                <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php endif;?>
    </div>
</div>

<?php get_footer(); ?>