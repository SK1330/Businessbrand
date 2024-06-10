<?php
/*
 * Template Name: Buzznez Page Template
 * Description: A custom template for the Buzznez.
 */

get_header('inner');

// Your custom HTML content goes here
?>

<div class="buzznez_page_wrapper">

    <section class="buznezz_cover">
        <div class="buzznezz_container">
            <!-- <img class="buzznezz_container_cover" src="<?php echo get_template_directory_uri(); ?>/images/Buzznez/Buzznez_home_cover.webp" alt=""> -->

            <div class="buzznez_content text-center">
                <h1>PowerPoint
                    <div>
                        is
                        <span class="degree-container">
                            360<span class="degree-symbol">°</span>
                        </span>tool.
                    </div>
                </h1>
                <p>To effectively convey your perspective in a way that resonates with your audience, alters viewpoints, and achieves your goals, PowerPoint isn't just a preference—it's a necessity.</p>
            </div>

        </div>
    </section>

    <div class="container">
        <h3 class="buzznez_desc">
            Buzznez Presentation Design Services is here to enhance your content, whether it's a company pitch, a video, or interactive material. We create stunning visuals that communicate effectively and function flawlessly, ensuring your message resonates with your audience.
        </h3>
    </div>
    <div class="branding_mockup container">

        <video id="my-video" class="video-js" controls preload="auto" width="640" height="264" poster="<?php echo get_template_directory_uri(); ?>/images/Buzznez/branding_mockup.webp" data-setup="{}">
            <source src="<?php echo get_template_directory_uri(); ?>/video/buzznez_homepage_video.mp4" type="video/mp4" />
            <source src="MY_VIDEO.webm" type="video/webm" />
            <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a
                web browser that
                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
        </video>
    </div>

    <div class="container">
        <p class="buzznez_desc_para">
            We provide four key PowerPoint design services: professional finishing, graphical makeover, thematic layout, and template design. By blending creativity, strategy, functionality, narrative, interactivity, and animation, we push the boundaries of PowerPoint to achieve results you might not have imagined possible.
        </p>
    </div>

    <section class="buzznezServices">
        <div class="container">
            <div class="row services-card-container">
                <div class="col-lg-3 col-md-6 service-column">
                    <div class="service-card">
                        <img class="service-card-icon" src="<?php echo get_template_directory_uri(); ?>/images/Buzznez/Professional_Finish.webp" alt="">
                        <div class="service-content">
                            <h3 class="service-title">Professional Finish</h3>
                            <p>When you require the recreation of charts, diagrams, or shapes, as well as the addition of icons or imagery, we recommend Professional Finish. We not only enhance existing content but also provide each slide with a sharp, professional touch.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 service-column">
                    <div class="service-card">
                        <img class="service-card-icon" src="<?php echo get_template_directory_uri(); ?>/images/Buzznez/Thematic_Layout.webp" alt="">
                        <div class="service-content text-center">
                            <h3 class="service-title">Thematic Layout</h3>
                            <p>Some presentations are meant for greater purpose and longer shelf life. Under Thematic Layout we elevate it through concept based visual communication, delivering impactful and engaging illustrations, infographics, motion graphics, and beyond.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 service-column">
                    <div class="service-card">
                        <img class="service-card-icon" src="<?php echo get_template_directory_uri(); ?>/images/Buzznez/Graphical_Makeover.webp" alt="">
                        <div class="service-content text-center">
                            <h3 class="service-title">Graphical Makeover</h3>
                            <p>When you're seeking a fresh approach from your current content, that's when we apply Graphical Makeover to elevate your PowerPoint slides. We prioritize your success and understand the significance of captivating each slide to engage your audience effectively.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 service-column">
                    <div class="service-card">
                        <img class="service-card-icon" src="<?php echo get_template_directory_uri(); ?>/images/Buzznez/Template_Design.webp" alt="">
                        <div class="service-content text-center">
                            <h3 class="service-title">Template Design</h3>
                            <p>When there is an event or a campaign, a fresh approach is needed. Designing a PowerPoint template for a specific purpose requires a blend of creativity, functionality, and branding that effectively represents the event and helps presenters deliver engaging presentations.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="container buzznez_subscription_container">

        <div class="buzznez_subscription">
            <h2>PowerPoint design Subscription package means dedicated team at better value</h2>
            <div class="buzznez_subscription_inner">
                <p>Additionally, we provide monthly/quarterly/annual subscription packages for clients with ongoing design requirements. With these packages, you'll benefit from discounted rates and a dedicated team that understands your brand thoroughly.</p>
                <p>With our subscription package, you'll receive a dedicated creative service, including expertly crafted presentations slides and videos, interactive content, print-ready and digital materials, PowerPoint templates, and more. We integrate seamlessly with your team, gaining a deep understanding of your needs and brand strategy. This fosters a creative partnership that is both cost-effective and time-efficient.</p>
            </div>
        </div>

    </div>
    <section class="buzznez-cta container">
        <h5>
            Our commitment to client satisfaction results in enduring partnerships built on trust and quality service.<span id="openModal">Contact Us</span> to discover what our expert in Buzznez presentation design team can do for you.
        </h5>
    </section>
</div>



<?php
get_footer('inner');
?>