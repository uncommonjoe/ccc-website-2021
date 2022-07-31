<?php
    get_header();

    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<div class="page-header">
    <div class="section-content">
        <h1><?php echo $curauth->nickname; ?></h1>
    </div>
</div>


<div class="page-content">
    <div class="container margin-xl-top margin-xl-bottom">

        <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>

        <ul>
            <!-- The Loop -->

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                    <?php the_title(); ?></a>,
                <?php the_time('d M Y'); ?> in <?php the_category('&');?>
            </li>

            <?php endwhile; else: ?>
            <p><?php _e('No posts by this author.'); ?></p>

            <?php endif; ?>

            <!-- End Loop -->

        </ul>
    </div>
</div>

<?php
    include('menu.php');
    get_footer();
?>