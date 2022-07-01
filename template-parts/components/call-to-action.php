<?php 
    $bgOption = get_field('cta_background_style');

    if(get_field('show_cta')):
?>

<div class="page-content cta <?php echo get_field('cta_vertical_margins'); ?>">
    <?php echo $bgColor; ?>
    <div class="container-fluid <?php echo get_field('cta_vertical_padding'); echo ($bgOption != 'white') ? (' font-color-white') : (''); ?> ?>"
        style=" 
        background: 
        <?php if($bgOption == 'image'): ?>
            linear-gradient(to right, rgba(69, 76, 87, 0.6), rgba(69, 76, 87, 0.6)),
            url('<?php echo get_field('cta_background_image'); ?>') center center / cover no-repeat;
        <?php 
        elseif ($bgOption != 'image'):
                echo $bgOption;
        endif;
        ?>
        ;
    ">
        <div class="container">
            <div class="section-content text-center">
                <?php if(get_field('cta_title')): ?>
                <h3 class="d-inline fw-600">
                    <?php echo get_field('cta_title'); ?>
                </h3>
                <?php endif; // cta_title ?>

                <?php if(get_field('cta_description')): ?>
                <div class="margin-md-top"><?php echo get_field('cta_description'); ?></div>
                <?php endif; // cta_description ?>

                <?php if(get_field('cta_button_title')): ?>
                <a class="btn btn-lg <?php echo get_field('cta_button_color'); ?> margin-lg-top"
                    href=" <?php echo get_field('cta_button_url'); ?>">
                    <?php echo get_field('cta_button_title'); ?>
                </a>
                <?php endif; // cta_button_title ?>

            </div>
        </div>

    </div>
</div>

<?php 
    endif; // show_cta
?>