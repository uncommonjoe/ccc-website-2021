<?php
/* Template Name: Leadership */

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
                    <h1 class="text-uppercase">Elders</h1>
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
                            <img src="../../wp-content/uploads/2020/02/Sande-Ken.jpg" alt="Ken Sande" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Ken<br/>Sande</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Elder</h6>

                                <p>Ken Sande is the founder of Peacemaker Ministries and Relational Wisdom 360. Trained as an engineer, lawyer and mediator, he focuses on teaching people how to get upstream of conflict by building strong relationships in the family, church and workplace. He teaches internationally and is the author of numerous books, articles, and training resources, including The Peacemaker. He is certified as a Relational Wisdom Instructor and Conciliator, as well as a Certified Emotional Intelligence Instructor. Ken has served as a Certified Professional Engineer, as a member of the Alternative Dispute Resolution Committee of the Montana Bar Association, and as an Editorial Adviser for Christianity Today.</p>
                            </div>
                        </div>
                    </div>
                </div>
				
				 <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Kelly-David.jpg" alt="David Kelly" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">David<br/>Kelly</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Director of Growth Groups</h6>

                                <p>David oversees the Growth Group Ministries at Cornerstone. He is married to Amanda and they have two children; Calista and Jace. David enjoys the pursuit of growing relationships in the church and pointing people to the truth of God’s word.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1 class="text-uppercase">Elders-in-Training</h1>
                </div>
            </div>

            <div class="row margin-lg-top">
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Hilkemann-Dave.jpg" alt="David Hilkemann" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">David<br/>Hilkemann</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Directory of Ministries and Admimnistration</h6>

                                <p>Dave is the Director of Ministries and Administration at Cornerstone and an elder-in-training. He has been given the opportunity to oversee the duties in our church that the pastors do not have time to do themselves. Dave and his wife, Dawn also teach the 3rd and 4th grade Sunday school class. Dave and Dawn have three daughters, Anna, Sadie, and Callie, and one son, Silas. Dave enjoys riding his bike, drinking coffee, and woodworking.</p>
                            </div>
                        </div>
                    </div>
                </div>
				
				 <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/default-person-1.jpg" alt="Photo coming soon" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Andy<br/>Metroka</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Elder in training</h6>

                                <p>Bio coming soon.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row margin-xxl-top">
                <div class="col-12">
                    <h1 class="text-uppercase">Diaconate</h1>
                </div>
            </div>

            <div class="row margin-lg-top">
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2020/02/Arnhart-Zach.jpg" alt="Zach Arnhart" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Zach<br/>Arnhart</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Zach moved to Billings from Washington in the fall of 2016 with wife Karin and four kids. Cornerstone was the first church they visited, and they have been attending ever since. The biblical preaching and the fellowship are what they appreciate most. Zach considers it a true honor to serve the body as deacon.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Burnham-Seth.jpg" alt="Seth Burnham" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Seth<br/>Burnham</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Seth Burnham was born and raised in Lewistown, MT and enjoys rifleman-ship, hunting and playing guitar. He is married to the beautiful and compassionate Endreah and together they have 3 children, Azalea, John and Ethan and have fostered 32 children at different times in their home. Seth currently serves on the music team as a bass player, and as a leader/teacher for the Cornerstone Youth Ministry.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2020/02/Cox-Scott.jpg" alt="Scott Cox" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Scott<br/>Cox</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Scott was born in Missoula, MT (Go Cats!) and has lived in Billings for the majority of his life. He is involved in operating several local businesses and looks forward to spending down time with family and friends in the outdoors fishing, hunting and snowmobiling. Married to Karen Cox, his high-school sweetheart, he has two grown children, Hannah Mueller and Eli Cox, and three grandchildren (so far) all of whom also attend Cornerstone Community Church. Scott has attended Cornerstone since February 2017 and became a member later that Fall. He serves as an usher and on the Welcome Team and is now humbled to serve as a Deacon as well. He looks forward to new opportunities to serve the body of Cornerstone and the Billings community.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2020/02/Cox-Karen.jpg" alt="Karen Cox" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Karen<br/>Cox</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deaconess</h6>

                                <p>Karen has been married 35 years to her sweet husband Scott. They have two grown children. Their daughter Hannah is married to Eric and together have three children, Sage, Titus and Knox. Their son Eli is soon to be married to his fiancé Tori. All of them call CCC home. Karen likes to hike and bike, but is especially grateful for time with family. Because of God’s amazing grace of awakening her heart to truth she has a passion to expose false beliefs and help young women live out lives by God’s design as clearly written in His Word. She is excited to serve the people of Cornerstone and our community.</p>
                            </div>
                        </div>
                    </div>
				</div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Gardner-Jeremy.jpg" alt="Jeremy Gardner" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Jeremy<br/>Gardner</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Jeremy Gardner started attending Cornerstone Community Church in December of 2012. He is married to his wife Lindsey and they have two children, Dallas and Savannah. Jeremy joined the Deacons Ministry in February of 2018 and is grateful for the opportunity to serve his church body and the Billings community. Jeremy is also an active member of the worship team and also serves in CCC’s children’s ministry.</p>
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

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deaconess</h6>

                                <p>Lindsey Gardner first began attending Cornerstone Community Church in 1991. She and her husband Jeremy have two children, Dallas and Savannah. Lindsey serves as Cornerstone’s Children’s Ministry Director. In addition to serving in our children’s ministries, Lindsey serves on the Deacon’s Administrative Committee as the treasurer of the Deacon fund.</p>
                            </div>
                        </div>
                    </div>
				</div>	

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Harpster-Susan.jpg" alt="Susan Harpster" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Susan<br/>Harpster</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deaconess</h6>

                                <p>Susan Harpster oversees the CCC prison ministry at Montana Women’s Prison. She organizes the assembling of hygiene kits for the homeless that go to Montana Rescue Mission and the Women’s & Children’s Shelter. She also coordinates meals for those in our body experiencing things like illness or the birth of a new baby. She is married to Rick and they have a daughter (Hannah) and a grand-daughter (Raziyah). </p>
                            </div>
                        </div>
                    </div>
				</div>
                
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2020/02/Hilkemann-Dawn.jpg" alt="Dawn Hilkemann" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Dawn<br/>Hilkemann</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deaconess</h6>

                                <p>Dawn Hilkemann is the wife of David Hilkemann.  She teaches their four children, Anna, Sadie, Silas, and Callie at home.  Along with teaching the 3rd and 4th grade Sunday school class, she helps in children’s church.  She enjoys studying God’s word with other women.  In her free time she loves to  hike, bike, and bake!</p>
                            </div>
                        </div>
                    </div>
				</div>
                
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2020/02/McClellan-Russ.jpg" alt="Russ McClellan" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Russ<br/>McClellan</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Russ McClellan was born and raised in northeastern Montana. Following a career in the Gulf Coast, he returned to his home state in 2016. He joined Cornerstone soon thereafter largely due to its emphasis on expositional preaching and teaching. He prefers to do anything outdoors including golf and motorcycle riding as favorite hobbies.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Murray-Bill.jpg" alt="Bill Murray" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Bill<br/>Murray</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Bill and his wife Sunny have been attending Cornerstone since the summer of 2015 and have been truly blessed by both the shepherding and Christ-centered preaching. Bill currently serves on both the Deacon Administrative Committee and the Benevolence Committee. His interests include most things outdoor, including bicycling, skiing, fishing, and gardening, plus having their Golden pups take him for a walk.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Rivers-Patrick.jpg" alt="Patrick Rivers" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Patrick<br/>Rivers</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Patrick Rivers is honored to serve as a deacon at Cornerstone. He works as a CPA and enjoys spending time with his wife, Betsy, and their five young children.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Romans-Christine.jpg" alt="Christine Romans" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Christine<br/>Romans</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deaconess</h6>

                                <p>Christine Romans is an active women’s Growth Growth leader and discipler here at Cornerstone. Her husband, Jeff, and four boys keep her pretty busy at home as well. When not tied up at home or church, she can be found at Elder Grove School teaching middle school English.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Stafford-Paul.jpg" alt="Paul Stafford" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Paul<br/>Stafford</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Paul Stafford and his wife, Suzee, and their children, Ashlee and Mason moved to Billings from Wyoming in 2004. Ashlee and Mason now live in Denver and Bozeman with their spouses, Andy & Emma, and their first grandchild, Averee. They joined Cornerstone in 2014 because they loved the preaching and worship services but mostly because of the unique passion for honestly seeing who we are and how we are amazingly immersed in His grace. Paul’s role as deacon focuses on “going beyond the ordinary” in the benevolence ministry. He also likes to put together classes on financial stewardship (which is also his day “job”), as well as seminars/classes on parenting, marriage and men’s classes. He also does a little to get us together on the softball field and out camping.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Stafford-Suzee.jpg" alt="Suzee Stafford" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Suzee<br/>Stafford</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deaconess</h6>

                                <p>Suzee is a certified counselor with CCEF and currently works part-time at CCEF-MT as a pastoral counselor. She’s currently completing a Masters degree in Biblical Counseling by finishing up the theology requirements. She is married to Paul and they have two married children. She likes to hike, ski, garden and read classical literature. As a deacon, she’d like to serve others through prayer and the ministry and counsel of God’s word.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Steinback-Jeff.jpg" alt="Jeff Steinback" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Jeff<br/>Steinback</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Jeff Steinback has been attending Cornerstone since 2010. Pastor Jeff married Jeff and his wife Lindsay in 2012. They have 2 kids, Annalyn and John. Jeff serves on the Deacon’s Administrative Committee as the Diaconate President. He also helps as one of the Children's Church teachers, and participates in the Men's growth group. His family enjoys swimming and eating outside on the deck in nice weather. He also likes fly fishing and snow skiing.</p>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>