<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ozouf
 */

?>

<footer id="colophon" class="site-footer">
    <img id="services-topper" class="w-full" src="<?php echo get_template_directory_uri();?>/img/services-topper.png">
    <div class="section bg-black overflow-auto" id="home-services">
        <div class="container">
            <div class="row w-3/4 m-auto sm:grid grid-cols-2  gap-x-32 gap-y-20 mb-32 lg:grid-cols-3">
                <div class="col">
                    <a href="#"><img class="service-icon" src="<?php echo get_template_directory_uri();?>/img/brand.svg"></a>
                </div>
                <div class="col">
                    <a href="#"><img class="service-icon" src="<?php echo get_template_directory_uri();?>/img/website.svg"></a>
                </div>
                <div class="col">
                    <a href="#"><img class="service-icon" src="<?php echo get_template_directory_uri();?>/img/video.svg"></a>
                </div>
                <div class="col">
                    <a href="#"><img class="service-icon" src="<?php echo get_template_directory_uri();?>/img/animation.svg"></a>
                </div>
                <div class="col">
                    <a href="#"><img class="service-icon" src="<?php echo get_template_directory_uri();?>/img/packaging.svg"></a>
                </div>
                <div class="col">
                    <a href="#"><img class="service-icon" src="<?php echo get_template_directory_uri();?>/img/brand.svg"></a>
                </div>
            </div>
        </div>
    </div>
	<div class="section bg-yellow" id="footer">
        <div class="container">
            <div class="row flex flex-col lg:grid grid-cols-5 py-10">
                
                <div class="col col-span-3 lg:order-2 mb-5 sm:mb-0">
                    <div id="blurb" class="flex align-top">
                        <img class="h-[18px] md:h-[22px]" src="<?php echo get_template_directory_uri();?>/img/asterisk-black.svg">
                        <p class="ml-2 text-2xl">OZOUF are a passionate team of marketers and creatives, who love telling our clients stories through powerful words and creative concepts, whic differentiate and generate results. We specialise in branding, websites, video and animation.</p>
                    </div>
                    <div id="contact" class="ml-[18px] md:ml-[22px] mt-6">
                        <?php echo do_shortcode('[contact-form-7 id="48" title="Footer Contact Form"]'); ?>
                    </div>
                </div>
                <div class="col col-span-2 sm:flex lg:flex-col justify-between lg:order-1">
                    <div id="contact-details" class="mb-5 sm:mb-0 sm:pl-14">
                        <div id="phoneandemail">
                            <div class="flex items-center md:w-[260px]">
                                <img class="h-[18px] md:h-[22px]" src="<?php echo get_template_directory_uri();?>/img/asterisk-black.svg">
                                <a class="ml-2 text-lg md:text-2xl font-semibold" href="tel:004401534780080">+44 (0)1534 780080</a>
                            </div>
                            <div class="flex items-center md:w-[260px]">
                                <img class="h-[18px] md:h-[22px]" src="<?php echo get_template_directory_uri();?>/img/asterisk-black.svg">
                                <a class="ml-2 text-lg md:text-2xl font-semibold" href="mailto:hello@ozouf.net">hello@ozouf.net</a>
                            </div>
                        </div>
                        <div id="address" class="ml-[18px] md:ml-[22px] mt-6">
                            <h3 class="text-xl font-semibold">
                                Ozouf Advertising Limited<br>
                                25 Pier Road St Helier<br>
                                Jersey JE2 4XW
                            </h3>
                        </div>
                    </div>
                    <div id="terms" class="self-end lg:self-auto text-center sm:text-left">
                        <h4 class="text-sm">
                            <a href="#" class="font-bold">GDPR</a> | <a href="#" class="font-bold">T&Cs</a> | Copywrite Ozouf Advertising Ltd. 2022<br>
                            Register with the Jersey Financial Serives Commision dated<br>
                            8th December 2008 | Number 102259

                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
