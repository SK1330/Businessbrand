<?php
/*
 * Template Name: Oakshine Page Template
 * Description: A custom template for the Oakshine.
 */

get_header('inner');

// Your custom HTML content goes here
?>

<div class="page_wrapper">
    <section>
        <div class="container">

            <div class="oakshine_cover_grid">
                <div class="column_one">
                    <div class="image_one">
                        <img class="image_one" src="<?php echo get_template_directory_uri(); ?>/images/OakShine/Oakshine_Cover_Images_one.webp" alt="">
                    </div>
                    <div class="image_four">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/OakShine/Oakshine_Cover_Images_four.webp" alt="">
                    </div>
                </div>
                <div class="column_two">
                    <div class="image_two">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/OakShine/Oakshine_Cover_Images_two.webp" alt="">
                    </div>
                    <div class="image_five">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/OakShine/Oakshine_Cover_Images_five.webp" alt="">
                    </div>
                </div>
                <div class="column_three">
                    <div class="image_three">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/OakShine/Oakshine_Cover_Images_three.webp" alt="">
                    </div>
                    <div class="image_six">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/OakShine/Oakshine_Cover_Images_six.webp" alt="">
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="aboutServiceSection">
        <div class="container">
            <div class="service_content">
                <p>
                    Branding plays a crucial role for both businesses and individuals by fostering recognition, trust, and loyalty in a competitive market environment. A robust brand has the power to justify premium pricing, draw top-tier talent, and generate lasting value for stakeholders. Consequently, dedicating resources to branding endeavors is pivotal for cultivating a thriving and enduring business or personal brand.
                </p>
                <p>
                    <span class="service_name">Oakshine</span>
                    specializes in crafting a unique brand identity that stands out and withstands the test of time. Through the right blend of branding and marketing strategies, we empower you to catalyze a significant impact in the market, shifting the focus onto your brand instead of your competitors. Our comprehensive branding services are designed to facilitate genuine connections with your target audience, seamlessly integrating authenticity and appeal into every interaction.
                </p>
            </div>

        </div>
    </section>

    <section class="OurBrandingServices">
        <div class="container">
            <h2>Our Branding Services</h2>
            <div class="row services-card-container">
                <div class="col-lg-4 col-md-6 service-column">
                    <div class="service-card">
                        <img class="service-card-icon" src="<?php echo get_template_directory_uri(); ?>/images/OakShine/Web_Design.png" alt="">
                        <div class="service-content text-center">
                            <h3 class="service-title">UI/UX & Web Design</h3>
                            <p>UI/UX and web design are essential because they directly impact how users interact with digital products and websites. Our design not only enhances user satisfaction and loyalty but also contribute to business success by increasing conversions, reducing bounce rates, and fostering positive brand perceptions.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-column">
                    <div class="service-card">
                        <img class="service-card-icon" src="<?php echo get_template_directory_uri(); ?>/images/OakShine/social-media.png" alt="">
                        <div class="service-content text-center">
                            <h3 class="service-title">Social Media</h3>
                            <p>Social media is a powerful platform for storytelling due to its wide reach, immediacy, and interactive nature. Oakshine uses this platform so that brands/individuals engage directly with their audience, share authentic experiences, and convey emotions effectively through images, videos, and graphics.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-column">
                    <div class="service-card">
                        <img class="service-card-icon" src="<?php echo get_template_directory_uri(); ?>/images/OakShine/logo_design.png" alt="">
                        <div class="service-content text-center">
                            <h3 class="service-title">Logo Design</h3>
                            <p>A Logo is a fundamental element of brand identity and plays a pivotal role in shaping how a brand is perceived by its audience. Oakshine logo making process involves focusing on simplicity, minimalism, and balance, utilizing simple shapes, clean lines, and uncluttered elements to create a design that is easy to understand and recognize.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-column">
                    <div class="service-card">
                        <img class="service-card-icon" src="<?php echo get_template_directory_uri(); ?>/images/OakShine/marketing-strategy.png" alt="">
                        <div class="service-content text-center">
                            <h3 class="service-title">Marketing Strategy</h3>
                            <p>Marketing strategy services are crucial for businesses as they provide a roadmap to achieve objectives effectively by defining target audiences, positioning, and messaging. We keep finding Our well-crafted marketing strategy ensures resources are optimized, risks are mitigated, and measurable goals are set, allowing for agile decision-making and adaptation to market changes.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-column">
                    <div class="service-card">
                        <img class="service-card-icon" src="<?php echo get_template_directory_uri(); ?>/images/OakShine/Web_Design.png" alt="">
                        <div class="service-content text-center">
                            <h3 class="service-title">Digital Marketing</h3>
                            <p>Digital marketing provides unparalleled reach, allowing businesses to connect with potential customers worldwide through various channels such as search engines, social media, email, and websites. Oakshine's digital service is cost-effective compared to traditional marketing channels, making it accessible to businesses of all sizes.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-column">
                    <div class="service-card">
                        <img class="service-card-icon" src="<?php echo get_template_directory_uri(); ?>/images/OakShine/Web_Design.png" alt="">
                        <div class="service-content text-center">
                            <h3 class="service-title">Brand-identity</h3>
                            <p>Oakshine brand identity services encompass a range of strategic and creative activities aimed at developing a unique and cohesive visual and verbal identity for a brand. We help businesses differentiate themselves, build brand recognition, establish trust with their audience, and foster long-term brand loyalty.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Oakshine_Video container">

        <video id="oakshine-video" class="oakshine-video video-js" controls preload="auto" width="640" height="264" data-setup="{}">
            <source src="<?php echo get_template_directory_uri(); ?>/video/homepage_background.mp4" type="video/mp4" />
            <source src="MY_VIDEO.webm" type="video/webm" />
        </video>
    </section>

    <section class="oakshine-cta container">
        <h5>
            Seize the moment to elevate your marketing endeavors. <span id="openModal">Contact Us</span> for a complimentary consultation. Let's collaborate to strengthen your brand and connect with your audience effectively.
        </h5>
    </section>

</div>



<?php
get_footer('inner');
?>