<?php
/*
 * Template Name: Custom Homepage Template
 * Description: A custom template for the homepage.
 */

get_header();

// Your custom HTML content goes here
?>

<section class="hero-section">
    <div class="container-fluid p-0">
        <!-- Video container -->
        <div class="video-container">
            <!-- Video element with autoplay -->
            <video autoplay muted loop>
                <source src="<?php echo get_template_directory_uri(); ?>/video/homepage_background.mp4" type="video/mp4" />
                <!-- Fallback content if video is not supported -->
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>



<!-- Oakshine Service with two work -->
<section class="container equal-height-columns padding-xy padding-top-20">
    <div class="row">
        <!-- First column (25%) -->
        <div class="col-lg-3 col-md-6 padding-bottom-20">
            <div class="card card-Ujjivan">
                <div class="card-body">
                    <a class="card-title" href="<?php echo esc_url(home_url('/our_work/ujjivan/')); ?>">Ujjivan</a>
                    <p class="card-text">Work</p>
                </div>
            </div>
        </div>
        <!-- Second column (25%) -->
        <div class="col-lg-3 col-md-6 padding-bottom-20">
            <div class="card card-Xumpe">
                <div class="card-body">
                    <a class="card-title" href="<?php echo esc_url(home_url('/our_work/xumpe/')); ?>">Xumpe</a>
                    <p class="card-text">Work</p>
                </div>
            </div>
        </div>
        <!-- Third column (50%) -->
        <div class="col-lg-6 col-md-12 padding-bottom-20">
            <a class="card-title" href="<?php echo esc_url(home_url('/our_work/xumpe')); ?>">
                <div class="card card-Oakshine service_block">
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Portfolio cards with four work samples -->
<section class="container equal-height-columns padding-xy">
    <div class="row">
        <!-- First column (25%) -->
        <div class="col-lg-3 col-md-6 padding-bottom-20">
            <div class="card card-hrhood">
                <div class="card-body">
                    <a class="card-title" href="<?php echo esc_url(home_url('/our_work/hr-hood/')); ?>">Hr Hood</a>
                    <p class="card-text">Work</p>
                </div>
            </div>
        </div>
        <!-- Second column (25%) -->
        <div class="col-lg-3 col-md-6 padding-bottom-20">
            <a class="card-title" href="<?php echo esc_url(home_url('#')); ?>">
                <div class="card card-contactCard service_block"></div>
            </a>
        </div>
        <!-- Third column (25%%) -->
        <div class="col-lg-3 col-md-6 padding-bottom-20">
            <div class="card card-Aadat-Sanskar">
                <div class="card-body">
                    <a class="card-title" href="<?php echo esc_url(home_url('/our_work/aadat-sanskar/')); ?>">Aadat Sanskar</a>
                    <p class="card-text">Work</p>
                </div>
            </div>
        </div>
        <!-- Fourth column (25%) -->
        <div class="col-lg-3 col-md-6 padding-bottom-20">
            <div class="card card-Nebarrio">
                <div class="card-body">
                    <a class="card-title" href="<?php echo esc_url(home_url('/our_work/nebarrio/')); ?>">Nebarrio</a>
                    <p class="card-text">Work</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Buznezz Service with work samples -->
<section class="container equal-height-columns padding-xy">
    <div class="row buznezz-row">
        <!-- First column (50%) -->
        <div class="col-lg-6 col-md-12 padding-bottom-20">
            <a class="card-title" href="<?php echo esc_url(home_url('/our_work/buznezz')); ?>">
                <div class="card card-buznezz service_block">
                    <video autoplay muted loop>
                        <source src="<?php echo get_template_directory_uri(); ?>/video/buzznez_homepage_video.mp4" type="video/mp4" />
                        <!-- Fallback content if video is not supported -->
                        Your browser does not support the video tag.
                    </video>
                </div>
            </a>
        </div>
        <!-- Second column (25%) -->
        <div class="col-lg-3 col-md-6 padding-bottom-20">
            <div class="card card-nokia">
                <div class="card-body">
                    <a class="card-title" href="<?php echo esc_url(home_url('/case-studies/nebarrio')); ?>">Nokia - a technology innovator</a>
                    <p class="card-text">Case Study</p>
                </div>
            </div>
        </div>
        <!-- Third column (25%) -->
        <div class="col-lg-3 col-md-6 padding-bottom-20">
            <div class="card card-Vinda">
                <div class="card-body">
                    <a class="card-title" href="<?php echo esc_url(home_url('/our_work/vinda')); ?>">Vinda</a>
                    <p class="card-text">Work</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row worksample-row ">
        <!-- First column (25%) -->
        <div class="col-lg-3 col-md-6 padding-bottom-20">
            <div class="card card-banks-rebranding">
                <div class="card-body">
                    <a class="card-title" href="<?php echo esc_url(home_url('/our_work/vinda')); ?>">Banks are rebranding</a>
                    <p class="card-text">Case Study</p>
                </div>
            </div>
        </div>
        <!-- Second column (25%) -->
        <div class="col-lg-3 col-md-6 padding-bottom-20">
            <div class="card card-almodox">
                <div class="card-body">
                    <a class="card-title" href="<?php echo esc_url(home_url('/our_work/almocode/')); ?>">Almodox</a>
                    <p class="card-text">Work</p>
                </div>
            </div>
        </div>
        <!-- Third column (50%) -->
        <div class="col-lg-6 col-md-12 padding-bottom-20">
            <a class="card-title" href="<?php echo esc_url(home_url('/our_work/')); ?>">
                <div class="card card-works service_block">

                </div>
            </a>
        </div>
    </div>
</section>



<?php get_footer(); ?>