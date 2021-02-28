<?php
/* Template Name: Growth Group */

get_header();
?>

    <div class="page-header">
        <div class="section-content">
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>

                    <?php endwhile; else : ?>
                    <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                    <?php endif;?>
                </div>
            </div>

            <div class="row row-eq-height margin-lg-top">

                <div class="col-12 margin-lg-bottom margin-xl-top">
                    <h1>Sunday Growth Group</h1>
                </div>

                <div class="col-12 col-md-6">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                            <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Leader</h6>
                                <h2 class="text-uppercase font-700 no-margin-bottom">David Kelly</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">When</h6>
                                <h5 class="sans-serif font-color-darker font-sm">Sundays, 3:30&nbsp;PM - 5:00&nbsp;PM</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Location</h6>
                                <h5 class="sans-serif font-color-darker font-sm">5708 Danford Road</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Notes</h6>
                                <h5 class="sans-serif font-color-darker font-sm">Kid friendly</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <a href="https://cornerstonebillings.org/contact/" class="btn btn-primary btn-block margin-md-top">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 margin-lg-bottom margin-xl-top">
                    <h1>Monday Growth Group</h1>
                </div>

                <div class="col-12 col-md-6">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Leader</h6>
                                <h2 class="text-uppercase font-700 no-margin-bottom">Pastor Rick</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">When</h6>
                                <h5 class="sans-serif font-color-darker font-sm">Mondays 6:30&nbsp;PM - 8:00&nbsp;PM</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Place</h6>
                                <h5 class="sans-serif font-color-darker font-sm">3604 Corbin Drive</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Notes</h6>
                                <h5 class="sans-serif font-color-darker font-sm">Kid friendly</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <a href="https://cornerstonebillings.org/contact/" class="btn btn-primary btn-block margin-md-top">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 margin-lg-bottom margin-xl-top">
                    <h1>Tuesday Growth Groups</h1>
                </div>

                <div class="col-12 col-md-6">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Leader</h6>
                                <h2 class="text-uppercase font-700 no-margin-bottom">Andy Metroka</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">When</h6>
                                <h5 class="sans-serif font-color-darker font-sm">Tuesdays, 6:30&nbsp;PM - 8:00&nbsp;PM</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Place</h6>
                                <h5 class="sans-serif font-color-darker font-sm">5507 Billy Casper Drive</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Notes</h6>
                                <h5 class="sans-serif font-color-darker font-sm">Kid Friendly</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                               <a href="https://cornerstonebillings.org/contact/" class="btn btn-primary btn-block margin-md-top">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Leader</h6>
                                <h2 class="text-uppercase font-700 no-margin-bottom">Ken Sande</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">When</h6>
                                <h5 class="sans-serif font-color-darker font-sm">Tuesdays, 6:30&nbsp;PM - 8:00 PM</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Place</h6>
                                <h5 class="sans-serif font-color-darker font-sm">4460 Laredo Place</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Notes</h6>
                                <h5 class="sans-serif font-color-darker font-sm">No childcare</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                               <a href="https://cornerstonebillings.org/contact/" class="btn btn-primary btn-block margin-md-top">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 margin-lg-bottom margin-xl-top">
                    <h1>Wednesday Growth Group</h1>
                </div>

                <div class="col-12 col-md-6">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">                                
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Leader</h6>
                                <h2 class="text-uppercase font-700 no-margin-bottom">Pastor Jeff</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">When</h6>
                                <h5 class="sans-serif font-color-darker font-sm">Wednesdays, 6:30&nbsp;PM - 8:00 PM</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Place</h6>
                                <h5 class="sans-serif font-color-darker font-sm">7905 Cheetah Avenue</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Notes</h6>
                                <h5 class="sans-serif font-color-darker font-sm">No childcare</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                               <a href="https://cornerstonebillings.org/contact/" class="btn btn-primary btn-block margin-md-top">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="col-12 margin-lg-bottom margin-xl-top">
                    <h1>Men's Discipleship</h1>
                </div>

                <div class="col-12 col-md-6">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Leader</h6>
                                <h2 class="text-uppercase font-700 no-margin-bottom">Steve Glancey</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">When</h6>
                                <h5 class="sans-serif font-color-darker font-sm">Tuesdays, 6:30&nbsp;AM - 7:30 AM</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Place</h6>
                                <h5 class="sans-serif font-color-darker font-sm">Cornerstone Community Church</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-darker">Notes</h6>
                                <h5 class="sans-serif font-color-darker font-sm">Going through the book "Knowing God" by J.I. Packer</h5>
                            </div>

                            <div class="col-12 margin-md-top">
                                <a href="https://cornerstonebillings.org/contact/" class="btn btn-primary btn-block margin-md-top">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <?php get_footer(); ?>