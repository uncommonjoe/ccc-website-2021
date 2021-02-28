<?php
/* Template Name: Staff */

get_header();
?>

    <div class="page-header">
        <div class="section-content">
            <h1>
                <?php the_title(); ?>
            </h1>
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

            <div class="row">
                <div class="col-12">
                    <h1 class="text-uppercase">Office Staff</h1>
                </div>
            </div>

            <div class="row margin-lg-top">
            <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2020/02/Romans-Jeff.jpg" alt="Jeff Romans" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Jeff<br/>Romans</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Senior Pastor</h6>

                                <p>Jeff Romans serves as our pastor-teacher. He loves helping people become faithful followers of Jesus. He is married to the best woman he has ever met, Christine. They have four awesome boys named Christopher, Shawn, Samuel, and Andrew. Before moving to Montana, Jeff ministered in Akron, Chicago, and Los Angeles. He has obtained degrees from the Moody Bible Institute (BA) and The Master’s Seminary (M.Div).</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12"> 
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2019/03/Haluzska-Rick-1.jpg" alt="Rick Haluszka" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Rick<br/>Haluszka</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Associate Pastor</h6>

                                <p>Rick Haluszka serves as our Associate Pastor. Born and raised on the Hi-Line, Rick came on staff in 2013 at CCC as a Pastoral Intern after graduating with a B.S. in HHP from MSU–Bozeman. Having completed five years of training and discipleship under Pastor Jeff, including graduating from The Master's University with an M.A. in Biblical Studies, Rick was affirmed as an elder at CCC in January of 2018. His primary focus is on Pastoral Care, though he also leads our Music and Youth ministries. Rick is happily married to Julia and grateful to be Laura and Ian's dad. He enjoys reading, sports, conversation, and anything BBQ.</p>
                            </div>
                        </div>
                    </div>
                </div>
 
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Hilkemann-Dave.jpg" alt="David Hilkemann" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">David<br/>Hilkemann</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Directory of Ministries & Administration</h6>

                                <p>Dave is the Director of Ministries and Administration at Cornerstone. He is a deacon and an elder-in-training. He has been given the opportunity to oversee the duties in our church that the pastors do not have time to do themselves. Dave and his wife, Dawn also teach the 3rd and 4th grade Sunday school class. Dave and Dawn have three daughters, Anna, Sadie, and Callie, and one son, Silas. Dave enjoys riding his bike, drinking coffee, and woodworking.</p>
                            </div>
                        </div>
                    </div>
				</div>
				

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Gardner-Lindsay.jpg" alt="Lindsey Gardner" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Lindsey<br/>Gardner</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Director of Children's Ministries</h6>

                                <p>Lindsey Gardner first began attending Cornerstone Community Church in 1991. She and her husband Jeremy have two children, Dallas and Savannah. Lindsey serves as Cornerstone’s Children’s Ministry Director. In addition to serving in our children’s ministries, Lindsey serves on the Deacon’s Administrative Committee as the treasurer of the Deacon fund.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                               <img src="../../wp-content/uploads/2020/02/Hayter-Joyce.jpg" alt="Joyce Hayter" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Joyce<br/>Hayter</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Secretary</h6>

                                <p>I have enjoyed being able to serve our church family in this capacity. I’ve been married to my favorite person, Jon, for 14 years. We have four fantastic children, Taylar, Benjamen, Logan and Iann, which we also homeschool. When not being secretary, teacher or chauffeur I enjoy baking, cooking and spending time out in the yard.</p>
                            </div>
                        </div>
                    </div>
				</div>

            </div>
        </div>
    </div>

    <?php get_footer(); ?>