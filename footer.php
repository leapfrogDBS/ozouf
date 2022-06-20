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
	<div class="section bg-yellow" id="footer">
    <div class="container">
        <div class="row grid grid-cols-5 py-10">
            <div class="col col-span-2 flex flex-col justify-between">
                <div id="contact-details" class="pl-14">
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
                <div id="terms">
                    <h4>
                        <a href="#" class="font-bold">GDPR</a> | <a href="#" class="font-bold">T&Cs</a> | Copywrite Ozouf Advertising Ltd. 2022<br>
                        Register with the Jersey Financial Serives Commision dated<br>
                        8th December 2008 | Number 102259

                    </h4>
                </div>
            </div>
            <div class="col col-span-3">
                <div id="blurb" class="flex align-top">
                    <img class="h-[18px] md:h-[22px]" src="<?php echo get_template_directory_uri();?>/img/asterisk-black.svg">
                    <p class="ml-2 text-2xl">OZOUF are a passionate team of marketers and creatives, who love telling our clients stories through powerful words and creative concepts, whic differentiate and generate results. We specialise in branding, websites, video and animation.</p>
                </div>
                <div id="contact" class="ml-[18px] md:ml-[22px] mt-6">
                    <form action="" class="grid grid-cols-3">
                        <div class="pr-2">
                            <input type="text" name="name" id="name" placeholder="Name" class="placeholder:text-black font-semibold p-2 text-xl mb-2 w-full">
                            <input type="text" name="email" id="email" placeholder="Email" class="placeholder:text-black font-semibold p-2 text-xl w-full">
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <textarea name="message" id="message" placeholder="Message" class="placeholder:text-black font-semibold p-2 text-xl h-40 mb-2"></textarea>
                            <div class="submit-container inline-flex items-center bg-black px-3 py-0.5 self-end w-auto"> 
                                <img class="h-[18px] md:h-[22px] mr-2" src="<?php echo get_template_directory_uri();?>/img/asterisk-yellow.svg">
                                <input class="text-yellow text-2xl font-semibold" type="submit" value="SEND">
                            </div>
                        </div>
                    </form>
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
